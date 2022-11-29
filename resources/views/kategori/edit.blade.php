@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id)}}" method="post">
                @csrf
                @method('put')
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="namaKategori" required value="{{ $kategori->namaKategori }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DescKategori</label>
                        <input type="text" class="form-control" name="descKategori" required value="{{ $kategori->descKategori }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/kategori" class="btn btn-success btn-sm ms-2" style="float: right">kembali</a>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
