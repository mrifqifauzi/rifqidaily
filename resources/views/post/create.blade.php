@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Buat Post
        </div>
        <div class="card-body">
            <form action="/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Postingan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
                    <small style="color: grey">Buat semenarik mungkin</small>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Caption</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Postingan</label>
                    <input class="form-control" type="file" id="formFile" accept="jpg,jpeg,image/png,image/jpeg" name="gambar">
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
    </div>
</div>

@endsection
