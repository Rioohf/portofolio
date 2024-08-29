@extends('layouts.app')
@section('title', 'Data Pengalaman')

@section('content')


<div class="table-responsive">

    @if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div align="right" class="mb-3">
        <a href="{{route('pengalaman.create')}}" class="btn btn-primary">Tambah</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Posisi</th>
                <th>Perusahaan</th>
                <th>Deskripsi</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ( $pengalaman as $key => $laman )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $laman->posisi}}</td>
                <td>{{ $laman->perusahaan }}</td>
                <td>{{ $laman->deskripsi }}</td>
                <td>{{ $laman->tahun }}</td>
                <td>
                    <a href="{{route('pengalaman.edit', $laman->id)}}" class="btn btn-success btn-xs">Edit</a>
                    {{-- <a href="{{route('product.destroy', $product->id)}}" class="btn btn-danger btn-xs">Delete</a> --}}
                    <form class="d-inline" action="{{route('pengalaman.destroy', $laman->id)}}" method="post">
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
