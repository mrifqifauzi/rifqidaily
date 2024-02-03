@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang, <strong>  {{ Auth::user()->name }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Mulai buat Postingan Anda</h3>
                    <a href="/createposts" type="button" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i> Buat Postingan</a>
                </div>
            </div>
                <h3 class="text-center mt-4">Statistik</h3>
                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Total Postingan Anda</h5>
                                    <div class="row">
                                        <div class="col">
                                            <h2>{{ Auth::user()->posts()->count() }}</h2>
                                        </div>
                                        <div class="col">
                                            <h2><i class="bi bi-postcard-heart"></i></h2>
                                        </div>
                                    </div>
                                <p class="card-text">Jumlah postingan yang sudah anda post.</p>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Lihat Postingan Anda</h5>
                                <p class="card-text">Di sini anda bisa melihat postingan yang sudah anda posting.</p>
                                <a href="/index" class="btn btn-success">Lihat Postingan</a>
                                </div>
                            </div>
                            </div>
                        </div>
        </div>
    </div>
</div>
@endsection
