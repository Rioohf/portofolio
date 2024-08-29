@extends('layouts.app')
@section('title', 'Data Edukasi')

@section('content')


<div class="table-responsive">

    @if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div align="right" class="mb-3">
        <a href="{{route('education.create')}}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Profile</th>
                <th>Nama Sekolah</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ( $education as $key => $edu )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $edu->profiles->nama_lengkap}}</td>
                <td>{{ $edu->nama_sekolah }}</td>
                <td>{{ $edu->jurusan }}</td>
                <td>{{ $edu->tahun_lulus }}</td>
                <td>
                    <a href="{{route('education.edit', $edu->id)}}" class="btn btn-success btn-xs">Edit</a>
                    {{-- <a href="{{route('product.destroy', $product->id)}}" class="btn btn-danger btn-xs">Delete</a> --}}
                    <form class="d-inline" action="{{route('education.destroy', $edu->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
