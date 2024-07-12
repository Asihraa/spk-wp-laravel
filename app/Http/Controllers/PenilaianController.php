<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Penilaian;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();
        $penilaians = Penilaian::all();

        return view('penilaian.index', compact('alternatifs', 'kriterias', 'penilaians'));
    }

    public function create()
    {
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();

        return view('penilaian.create', compact('alternatifs', 'kriterias'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $alternativeId = $request->input('alternatif_id');

        DB::beginTransaction();
        foreach ($data as $key => $value) {
            if ($key != 'alternatif_id') {
                Penilaian::updateOrCreate(
                    ['alternatif_id' => $alternativeId, 'kriteria_id' => $key],
                    ['nilai' => $value]
                );
            }
        }
        DB::commit();

        return redirect()->route('penilaian.index')->with('toast_success', 'Penilaian alternatif diperbarui!');
    }

    public function getForms(Request $request)
    {
        $id = $request->id;
        $forms = Penilaian::with(['alternatif', 'kriteria'])
            ->where('alternatif_id', $id)
            ->get();

        $alternatif = Alternatif::find($id);
        $kriterias = Kriteria::all();

        return view('penilaian.edit', compact('forms', 'alternatif', 'kriterias'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method', 'alternative_id']);
        $alternativeId = $request->input('alternative_id');
        $alternative = Alternatif::find($alternativeId);
    
        if (!$alternative) {
            return redirect()->route('penilaian.index')->with('toast_error', 'Alternatif tidak ditemukan!');
        }
    
        DB::beginTransaction();
        try {
            foreach ($data as $key => $value) {
                DB::table('penilaians')
                    ->where('id', '=', $key)
                    ->update(['nilai' => $value]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('penilaian.index')->with('toast_error', 'Terjadi kesalahan saat memperbarui penilaian!');
        }
    
        return redirect()->route('penilaian.index')->with('toast_success', 'Penilaian alternatif ' . $alternative->nama_alternatif . ' diperbarui!');
    }
    
}
