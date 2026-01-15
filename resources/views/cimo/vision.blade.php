@extends('layouts.app')

@section('titulo', 'Visión - CIMO')

@section('description', 'Conoce la visión del Colegio de Ingenieros Mecánicos de El Oro.')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder display-4">Nuestra Visión</h1>
            <div class="border-bottom border-primary mx-auto mt-3" style="width: 80px; border-width: 3px !important;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <div class="card-body p-5 text-white">
                        <div class="text-center mb-4">
                            <i class="bi bi-eye fs-1"></i>
                        </div>
                        <p class="lead text-center mb-0" style="color: #0c0c0c;">
                            Ser una institución <strong>líder en la representación técnica y profesional</strong> 
                            de la ingeniería mecánica en el Ecuador, reconocida por nuestra excelencia, 
                            compromiso social y capacidad de innovación, con <strong>impacto nacional 
                            e internacional</strong>.
                        </p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-3 mb-4">
                        <div class="text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-trophy fs-2"></i>
                            </div>
                            <h6 class="fw-bold">Liderazgo</h6>
                            <p class="small text-muted">Referentes en el sector</p>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-star fs-2"></i>
                            </div>
                            <h6 class="fw-bold">Excelencia</h6>
                            <p class="small text-muted">Altos estándares</p>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-lightbulb fs-2"></i>
                            </div>
                            <h6 class="fw-bold">Innovación</h6>
                            <p class="small text-muted">Vanguardia tecnológica</p>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-globe fs-2"></i>
                            </div>
                            <h6 class="fw-bold">Alcance</h6>
                            <p class="small text-muted">Presencia internacional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection