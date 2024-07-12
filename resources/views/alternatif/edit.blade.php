@extends('layouts.app')
  
@section('title', 'Edit alternatif')
  
@section('contents')
    <h1 class="mb-0">Edit alternatif</h1>
    <hr />
    <form action="{{ route('alternatif.update', $alternatif->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode alternatif</label>
                <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode alternatif" value="{{ $alternatif->kode_alternatif }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama alternatif</label>
                <input type="text" name="nama_alternatif" class="form-control" placeholder="Nama Kriteria" value="{{ $alternatif->nama_alternatif}}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection