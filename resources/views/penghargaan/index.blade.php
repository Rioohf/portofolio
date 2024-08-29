@extends('layouts.app')
@section('title', 'Data Penghargaan')

@section('content')


<div class="table-responsive">

    @if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div align="right" class="mb-3">
        <a href="{{route('penghargaan.create')}}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Edukasi</th>
                <th>Juara</th>
                <th>Perlombaan</th>
                <th>Tahun Lomba</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ( $penghargaan as $key => $harga )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $harga->education->nama_sekolah}}</td>
                <td>{{ $harga->juara }}</td>
                <td>{{ $harga->perlombaan }}</td>
                <td>{{ $harga->tahun_lomba }}</td>
                <td>
                    <a href="{{route('penghargaan.edit', $harga->id)}}" class="btn btn-success btn-xs">Edit</a>
                    {{-- <a href="{{route('product.destroy', $product->id)}}" class="btn btn-danger btn-xs">Delete</a> --}}
                    <form class="d-inline" action="{{route('penghargaan.destroy', $harga->id)}}" method="post">
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
