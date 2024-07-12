@extends('layouts.app')

@section('contents')
<div class="container">
    <h2>Hasil Perhitungan WP</h2>

    <!-- Tabel Bobot Kriteria -->
    <h3>Bobot Kriteria (Normalisasi)</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kriteria</th>
                <th>Bobot</th>
                <th>Bobot Normalisasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kriterias as $kriteria)
            <tr>
                <td>{{ $kriteria->nama_kriteria }}</td>
                <td>{{ $kriteria->bobot }}</td>
                <td>{{ $kriteria->bobot_normalized }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tabel Vektor S -->
    <h3>Vektor S</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>Nilai S</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alternatifs as $alternatif)
            <tr>
                <td>{{ $alternatif->nama_alternatif }}</td>
                <td>{{ $vektorS[$alternatif->id] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tabel Vektor V dan Ranking -->
    <h3>Ranking Alternatif</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>Nilai V</th>
                <th>Ranking</th>
            </tr>
        </thead>
        <tbody>
            @php
                $ranking = 1;
            @endphp
            @foreach ($vektorV as $altId => $nilaiV)
            <tr>
                <td>{{ $alternatifs->find($altId)->nama_alternatif}}</td>
                <td>{{ $nilaiV }}</td>
                <td>{{ $ranking++ }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
