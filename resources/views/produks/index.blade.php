@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Daftar Produk</h1>
    <a href="{{ route('produks.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>
                        <a href="{{ route('produks.edit', $produk) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('produks.destroy', $produk) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
