@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col d-grid gap-2 d-md-block">
            <a href="/home" class="btn btn-success"><i class="bi bi-house-fill"></i> Home</a>
            <a href="/home" class="btn btn-success"><i class="bi bi-send-plus-fill"></i> Buat Postingan</a>
        </div>
        @foreach ( $posts as $post )
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <h5><strong>{{ $user->name }}</strong></h5>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/viewupdate/{{ $post->id }}">Sunting</a></li>
                                    <li><a class="dropdown-item text-danger" href="/delete/{{ $post->id }}">Hapus</a></li>
                                    </ul>
                                </div>
                    </div>
                    <img src="{{ $post->image }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $post->title }}</strong></h5>
                        <p class="card-text">{{ $post->caption }}</p>
                        <small class="text-body-tertiary">Diposting tanggal {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('j F, Y') }} Oleh {{ $user->name }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


@endsection
