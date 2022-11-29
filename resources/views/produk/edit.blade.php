@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="namaProduk" required value="{{ $produk->namaProduk }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <img src="{{ asset('storage/',$produk->foto)}}" alt="" width="100px">
                        <input type="file"  class="form-control" name="foto" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" required value="{{ $produk->harga}}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">DescProduk</label>
                        <input type="text" class="form-control" name="descProduk" required value="{{ $produk->descProduk }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example" name="kategori_id">
                            <option selected>Open this select menu</option>
                            @foreach ($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->namaKategori }}</option>
                            @endforeach
                           </select>
                     
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
