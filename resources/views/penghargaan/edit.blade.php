@extends('layouts.app')
@section('title', 'Edit Penghargaan')

@section('content')

<form action="{{route('penghargaan.update', $penghargaan->id)}}" method="post">
    @csrf
    @method('PUT')

        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Edukasi *</label>
            </div>
            <div class="col-sm-5">
                <select required name="education_id" id="" class="form-control">
                    <option value="">Pilih Edukasi</option>
                    @foreach ($education as $edu )
                        <option value="{{ $edu->id }}">{{ $edu->nama_sekolah }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Juara *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$penghargaan->juara}}" required type="number" class="form-control" name="juara" placeholder="Juara">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Perlombaan *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$penghargaan->perlombaan}}" required type="text" class="form-control" name="perlombaan" placeholder="Perlombaan">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Tahun Lomba *</label>
            </div>
            <div class="col-sm-5">
                <input value="{{$penghargaan->tahun_lomba}}" required type="number" class="form-control" name="tahun_lomba" placeholder="Tahun Lomba">
            </div>
        </div>

    <div class="mb-3 row">
        <div class="col-sm-10">
          <button class="btn btn-primary" type="submit">Simpan</button>
          <a href="{{ route('penghargaan.index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</form>

@endsection
