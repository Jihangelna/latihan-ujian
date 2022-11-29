@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ url('produk/create') }}" class="btn btn-primary">Tambah</a>
            <div class="card">
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Harga</th>
                        <th scope="col">DescProduk</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $dp)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$dp->namaProduk}}</td>
                        <td>
                        <img src="{{ asset('storage/'.$dp->foto) }}" alt="" width="100px">
                        </td>
                        <td>{{$dp->harga}}</td>
                        <td>{{$dp->descProduk}}</td>
                        <td>{{$dp->kategori->namaKategori }}</td>
                        <td>
                          <a href="{{ route('produk.edit', $dp->id) }}" class="btn btn-info">Edit</a>
                          <a href="{{ url('happrodk/'.$dp->id)}}" class="btn btn-danger">Hapus</a>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
