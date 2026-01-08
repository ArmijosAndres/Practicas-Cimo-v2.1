@extends('layouts.app')

@section('titulo', 'Inicio - CIMO')

@section('header')
    @include('partials.header')
@endsection

@section('contenido')
    <!-- Blog preview section-->
    <section class="py-5">
<section-config>
<cookie-config>
    <http-only></http-only>
</cookie-config>
</section-config>
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Nuestras Noticias!</h2>
                        <p class="lead fw-normal text-muted mb-5">
                            Mantente informado con las últimas noticias y actualizaciones de nuestro blog.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @forelse($noticias as $noticia)
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            @if($noticia->imagen)
                                <img class="card-img-top" src="{{ asset('uploads/noticias/' . $noticia->imagen) }}" alt="{{ $noticia->titulo }}" />
                            @endif
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Noticias</div>
                                <a class="text-decoration-none link-dark stretched-link" href="{{ route('noticias.show', $noticia->id) }}">
                                    <h5 class="card-title mb-3">{{ $noticia->titulo }}</h5>
                                </a>
                                <p class="card-text mb-0">{{ Str::limit($noticia->contenido, 100) }}</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="small">
                                            <div class="fw-bold">{{ $noticia->autor ?? 'CIMO' }}</div>
                                            <div class="text-muted">{{ $noticia->created_at->format('d M, Y') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">No hay noticias disponibles en este momento.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">Conoce nuestras vacantes</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        @forelse($aplicaciones as $aplicacion)
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                                    <i class="bi bi-briefcase"></i>
                                </div>
                                <h2 class="h5">{{ $aplicacion->titulo }}</h2>
                                <p class="mb-0">{{ Str::limit($aplicacion->descripcion, 120) }}</p>
                                <a class="text-decoration-none" href="{{ route('empleos.show', $aplicacion->id) }}">
                                    Ver más
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-muted">No hay vacantes disponibles en este momento.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                    <div class="mb-4 mb-xl-0">
                        <div class="fs-3 fw-bold text-white">Únete a nuestro portal de Noticias.</div>
                        <div class="text-white-50">Suscríbete a nuestro boletín para las últimas actualizaciones.</div>
                    </div>
                    <div class="ms-xl-4">
                        <form action="{{ route('newsletter.subscribe') }}" method="POST">
                            @csrf
                            <div class="input-group mb-2">
                                <input class="form-control" name="email" type="email" placeholder="Dirección de correo..." required />
                                <button class="btn btn-outline-light" type="submit">Suscribirse</button>
                            </div>
                            <div class="small text-white-50">Nos importa la privacidad y nunca compartiremos tus datos.</div>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection