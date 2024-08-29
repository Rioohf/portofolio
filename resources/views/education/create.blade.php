@extends('layouts.app')
@section('title', 'Tambah Edukasi')

@section('content')

<form action="{{route('education.store')}}" method="post">
    @csrf

    @if (session('error'))
<div class="alert alert-danger">{{session('error')}}</div>
    @endif

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Nama Profile *</label>
        </div>
        <div class="col-sm-5">
            <select required name="profile_id" id="" class="form-control">
                <option value="">Pilih Profile</option>
                @foreach ($profiles as $profile )
                    <option value="{{ $profile->id }}">{{ $profile->nama_lengkap }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Nama Sekolah *</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Jurusan *</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="jurusan" placeholder="Jurusan">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Tahun Lulus *</label>
        </div>
        <div class="col-sm-5">
            <input required type="number" class="form-control" name="tahun_lulus" placeholder="Tahun Lulus">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-10">
          <button class="btn btn-primary" type="submit">Simpan</button>
          <a href="{{ route('education.index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</form>

@endsection
