@extends('layouts.app')

@section('titulo', 'Convenios - CIMO')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center mb-4">Convenios Institucionales</h2>
        <p class="lead text-center text-muted mb-5">
            Conoce los convenios y alianzas estratégicas del CIMO con diferentes instituciones
        </p>

        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">
                    <i class="bi bi-handshake-fill"></i>
                    <strong>Información sobre convenios</strong> 
                    <br>
                    Estamos actualizando nuestra lista de convenios vigentes.
                    <br>
                    Para conocer los beneficios disponibles, comunícate con nosotros.
                </div>
            </div>
        </div>

        {{-- Cuando tengas convenios reales: --}}
        {{--
        <div class="row gx-5">
            @foreach($convenios as $convenio)
            <div class="col-lg-6 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            @if($convenio->logo)
                                <img src="{{ asset('uploads/convenios/' . $convenio->logo) }}" 
                                     alt="{{ $convenio->nombre_empresa }}" 
                                     style="height: 60px; margin-right: 15px;">
                            @endif
                            <h4 class="mb-0">{{ $convenio->nombre_empresa }}</h4>
                        </div>
                        <p>{{ $convenio->descripcion }}</p>
                        <div class="bg-light p-3 rounded">
                            <strong>Beneficios:</strong>
                            <p class="mb-0 mt-2">{{ $convenio->beneficios }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        --}}
    </div>
</section>
@endsection