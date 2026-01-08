@extends('layouts.app')

@section('title', 'Noticias')

@section('content')
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center mb-4">Noticias</h2>

        @foreach ($noticias as $noticia)
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $noticia->foto) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{{ $noticia->descripcion }}</p>
                    <small class="text-muted">{{ $noticia->fecha }}</small>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
