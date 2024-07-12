@extends('layouts.app')

@section('title', 'Kriteria')

@section('contents')
    
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Kriteria</h1>
    <a href="{{ route('kriteria.create')}}" class="btn btn-primary">add Kriteria</a>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover" style="">
    <thead class="table text-white" style="background-color: #508D4E">
        <tr>
            <th>No</th>
            <th>Kode Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Bobot</th>
            <th>Jenis</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($kriteria->count() > 0)
            @foreach($kriteria as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_kriteria }}</td>
                    <td class="align-middle">{{ $rs->nama_kriteria}}</td>
                    <td class="align-middle" >{{ $rs->bobot}}</td>
                    <td class="align-middle btn text-white" style="background-color: #508D4E">{{ $rs->type}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('kriteria.edit', $rs->id) }}" type="button" class="btn text-white" style="background-color: #508D4E">Edit</a>
                            <form action="{{ route('kriteria.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Alternatif not found</td>
            </tr>
        @endif
    </tbody>
</table>


@endsection