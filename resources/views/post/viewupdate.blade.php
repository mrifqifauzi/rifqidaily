@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Update Postingan Anda
        </div>
        <div class="card-body">
            <form action="/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Update Postingan Anda</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="{{ $post->title }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Caption</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan">{{ $post->caption }}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Postingan<span class="text-danger"> (Jangan diutik-utik jika tidak ingin mengganti gambar)</span></label>
                    <input class="form-control" type="file" id="formFile" accept="jpg,jpeg,image/png,image/jpeg" name="gambar">
                  </div>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
    </div>
</div>

@endsection
