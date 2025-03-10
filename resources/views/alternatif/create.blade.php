@extends('layouts.app')
  
@section('title', 'Create Alternatif')
  
@section('contents')
    <h1 class="mb-0">Add Alternatif</h1>
    <hr />
    <form action="{{ route('alternatif.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode Alternatif">
            </div>
            <div class="col">
                <input type="text" name="nama_alternatif" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection