@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ url('kategori/create') }}" class="btn btn-primary">Tambah</a>
            <div class="card">
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">DescKategori</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($kategori as $k)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$k->namaKategori}}</td>
                        <td>{{$k->descKategori}}</td>
                        <td>
                          <a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-info">Edit</a>
                          <a href="{{ url('hapkat/'.$k->id)}}" class="btn btn-danger">Hapus</a>
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
