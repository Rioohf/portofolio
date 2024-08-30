@extends('layouts.app')
@section('title', 'Edit Pengalaman')

@section('content')

<form action="{{route('pengalaman.update', $pengalaman->id)}}" method="post">
    @csrf
    @method('PUT')

        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Posisi *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$pengalaman->posisi}}" required type="text" class="form-control" name="posisi" placeholder="Posisi">
            </div>
        </div>


        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Perusahaan *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$pengalaman->perusahaan}}" required type="text" class="form-control" name="perusahaan" placeholder="Perusahaan">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Deskripsi *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$pengalaman->deskripsi}}" required type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Tahun *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$pengalaman->tahun}}" required type="number" class="form-control" name="tahun" placeholder="Tahun">
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
