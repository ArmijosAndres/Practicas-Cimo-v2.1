@extends('layouts.app')

@section('titulo', 'Misión - CIMO')

@section('description', 'Conoce la misión del Colegio de Ingenieros Mecánicos de El Oro.')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder display-4">Nuestra Misión</h1>
            <div class="border-bottom border-primary mx-auto mt-3" style="width: 80px; border-width: 3px !important;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 bg-primary text-white">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="bi bi-bullseye fs-1"></i>
                        </div>
                        <p class="lead text-center mb-0">
                            Impulsar el desarrollo profesional de los ingenieros mecánicos mediante 
                            <strong>formación continua</strong>, <strong>respaldo gremial</strong> 
                            y <strong>promoción de valores éticos</strong>, contribuyendo al progreso 
                            tecnológico y social de nuestra provincia y del país.
                        </p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="bi bi-book text-primary fs-1 mb-3"></i>
                                <h5 class="fw-bold">Formación</h5>
                                <p class="text-muted small mb-0">
                                    Capacitación continua y actualización profesional
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
                                <h5 class="fw-bold">Respaldo</h5>
                                <p class="text-muted small mb-0">
                                    Apoyo gremial y defensa de intereses profesionales
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="bi bi-heart text-primary fs-1 mb-3"></i>
                                <h5 class="fw-bold">Valores</h5>
                                <p class="text-muted small mb-0">
                                    Promoción de la ética y responsabilidad profesional
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
