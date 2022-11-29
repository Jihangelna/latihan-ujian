@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Isi</label>
                        <input type="text"  class="form-control" name="isi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/post" class="btn btn-success btn-sm ms-2" style="float: right">kembali</a>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
