@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="{{ url('post/create') }}" class="btn btn-primary">Tambah</a>
            <div class="card">
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $d)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$d->judul}}</td>
                        <td>{{$d->isi}}</td>
                        <td>{{$d->tanggal}}</td>
                        <td>
                          <a href="{{ route('post.edit', $d->id) }}" class="btn btn-info">Edit</a>
                          <a href="{{ url('happost/'.$d->id)}}" class="btn btn-danger">Hapus</a>
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
