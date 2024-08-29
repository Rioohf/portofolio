@extends('layouts.app')
@section('title', 'Tambah Pengalaman')

@section('content')

<form action="{{route('pengalaman.store')}}" method="post">
    @csrf

    @if (session('error'))
<div class="alert alert-danger">{{session('error')}}</div>
    @endif

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Posisi *</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="posisi" placeholder="Posisi">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Perusahaan *</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="perusahaan" placeholder="Perusahaan">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Deskripsi *</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Tahun *</label>
        </div>
        <div class="col-sm-5">
            <input required type="number" class="form-control" name="tahun" placeholder="Tahun">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-10">
          <button class="btn btn-primary" type="submit">Simpan</button>
          <a href="{{ route('pengalaman.index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</form>

@endsection
