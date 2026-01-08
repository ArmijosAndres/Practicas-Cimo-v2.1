@extends('layouts.app')

@section('titulo', 'Capacitaciones - CIMO')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center mb-4">Capacitaciones Disponibles</h2>
        <p class="lead text-center text-muted mb-5">
            Mejora tus habilidades profesionales con nuestros cursos y capacitaciones especializadas
        </p>

        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle-fill"></i>
                    <strong>Próximamente</strong> - Estamos preparando nuevas capacitaciones para ti.
                    <br>
                    Para más información, contáctanos a través de nuestro formulario de contacto.
                </div>
            </div>
        </div>

        {{-- Cuando tengas capacitaciones reales, puedes usar esto: --}}
        {{--
        <div class="row gx-5">
            @foreach($capacitaciones as $capacitacion)
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <div class="card-body p-4">
                        <h5 class="card-title">{{ $capacitacion->titulo }}</h5>
                        <p class="card-text">{{ $capacitacion->descripcion }}</p>
                        <ul class="list-unstyled">
                            <li><strong>Duración:</strong> {{ $capacitacion->duracion }}</li>
                            <li><strong>Modalidad:</strong> {{ $capacitacion->modalidad }}</li>
                            <li><strong>Precio:</strong> ${{ $capacitacion->precio }}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary w-100">Inscribirse</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        --}}
    </div>
</section>
@endsection
