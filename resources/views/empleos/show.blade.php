@extends('layouts.app')

@section('titulo', $empleo->titulo . ' - CIMO')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                {{-- Botón volver --}}
                <div class="mb-4">
                    <a href="{{ route('empleos.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-2"></i>Volver a empleos
                    </a>
                </div>

                {{-- Título --}}
                <h1 class="fw-bolder mb-4">{{ $empleo->titulo }}</h1>
                
                {{-- Información general --}}
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <p class="mb-0">
                                    <i class="bi bi-building text-primary me-2"></i>
                                    <strong>Empresa:</strong> {{ $empleo->empresa }}
                                </p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="mb-0">
                                    <i class="bi bi-geo-alt text-primary me-2"></i>
                                    <strong>Ubicación:</strong> {{ $empleo->ubicacion }}
                                </p>
                            </div>
                            @if($empleo->salario)
                                <div class="col-md-6 mb-3">
                                    <p class="mb-0">
                                        <i class="bi bi-cash text-primary me-2"></i>
                                        <strong>Salario:</strong> {{ $empleo->salario }}
                                    </p>
                                </div>
                            @endif
                            @if($empleo->tipo_contrato)
                                <div class="col-md-6 mb-3">
                                    <p class="mb-0">
                                        <i class="bi bi-file-text text-primary me-2"></i>
                                        <strong>Tipo:</strong> {{ $empleo->tipo_contrato }}
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Descripción --}}
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">
                            <i class="bi bi-file-earmark-text text-primary me-2"></i>
                            Descripción del puesto
                        </h5>
                        <p class="text-muted">{!! nl2br(e($empleo->descripcion)) !!}</p>
                    </div>
                </div>

                {{-- Requisitos --}}
                @if($empleo->requisitos)
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">
                                <i class="bi bi-check-circle text-primary me-2"></i>
                                Requisitos
                            </h5>
                            <p class="text-muted">{!! nl2br(e($empleo->requisitos)) !!}</p>
                        </div>
                    </div>
                @endif

                {{-- Beneficios --}}
                @if($empleo->beneficios)
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">
                                <i class="bi bi-star text-primary me-2"></i>
                                Beneficios
                            </h5>
                            <p class="text-muted">{!! nl2br(e($empleo->beneficios)) !!}</p>
                        </div>
                    </div>
                @endif

                {{-- Botón aplicar --}}
                <div class="text-center mt-5">
                    <button class="btn btn-primary btn-lg px-5" data-bs-toggle="modal" data-bs-target="#aplicarModal">
                        <i class="bi bi-send me-2"></i>Aplicar a esta vacante
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@include('empleos.modales.modal_aplicar')
@endsection