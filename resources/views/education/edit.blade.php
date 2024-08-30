@extends('layouts.app')
@section('title', 'Edit Edukasi')

@section('content')

<form action="{{route('education.update', $education->id)}}" method="post">
    @csrf
    @method('PUT')

        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Profile *</label>
            </div>
            <div class="col-sm-5">
                <select required name="profile_id" id="" class="form-control">
                    <option value="">Pilih Profile</option>
                    @foreach ($profiles as $profile )
                        <option {{$profile->id == $education->profile_id ? 'selected' : ' ' }} value="{{ $profile->id }}">{{ $profile->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Sekolah *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$education->nama_sekolah}}" required type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Jurusan *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$education->jurusan}}" required type="text" class="form-control" name="jurusan" placeholder="Jumlah Produk">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Tahun Lulus *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$education->tahun_lulus}}" required type="number" class="form-control" name="tahun_lulus" placeholder="Harga Produk">
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
