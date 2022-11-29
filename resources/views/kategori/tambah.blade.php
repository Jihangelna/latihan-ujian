@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('kategori.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="namaKategori" class="form-control" name="namaKategori">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DescKategori</label>
                        <input type="descKategori" class="form-control" name="descKategori">
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
