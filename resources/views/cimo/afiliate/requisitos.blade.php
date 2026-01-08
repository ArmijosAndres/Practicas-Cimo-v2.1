@extends('layouts.app')

@section('titulo', 'Requisitos para Afiliarse - CIMO')

@section('description', 'Conoce los requisitos necesarios para ser parte del Colegio de Ingenieros Mecánicos de El Oro.')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder display-4">Requisitos para Afiliarse</h1>
            <p class="lead text-muted">Documentos necesarios para completar tu afiliación</p>
            <div class="border-bottom border-primary mx-auto mt-3" style="width: 80px; border-width: 3px !important;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <div class="list-group list-group-flush">
                            {{-- Requisito 1 --}}
                            <div class="list-group-item border-0 px-0 py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <span class="fw-bold">1</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">
                                            <i class="bi bi-mortarboard text-primary me-2"></i>
                                            Título Profesional
                                        </h5>
                                        <p class="text-muted mb-0">
                                            Copia notariada del título de Ingeniero Mecánico o afines, 
                                            debidamente registrado en la SENESCYT.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Requisito 2 --}}
                            <div class="list-group-item border-0 px-0 py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <span class="fw-bold">2</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">
                                            <i class="bi bi-card-checklist text-primary me-2"></i>
                                            Copia de Cédula y Papeleta de Votación
                                        </h5>
                                        <p class="text-muted mb-0">
                                            Copias a color de la cédula de identidad y certificado de votación 
                                            actualizado (última elección).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Requisito 3 --}}
                            <div class="list-group-item border-0 px-0 py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <span class="fw-bold">3</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">
                                            <i class="bi bi-file-earmark-person text-primary me-2"></i>
                                            Currículum Vitae
                                        </h5>
                                        <p class="text-muted mb-0">
                                            Hoja de vida actualizada que incluya experiencia laboral, 
                                            formación académica y referencias profesionales.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Requisito 4 --}}
                            <div class="list-group-item border-0 px-0 py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <span class="fw-bold">4</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">
                                            <i class="bi bi-receipt text-primary me-2"></i>
                                            Comprobante de Pago
                                        </h5>
                                        <p class="text-muted mb-0">
                                            Comprobante del pago de la cuota de afiliación. 
                                            Consulta el monto actual con nuestra secretaría.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Información adicional --}}
                        <div class="alert alert-info mt-4" role="alert">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            <strong>Nota importante:</strong> Todos los documentos deben ser presentados 
                            en formato digital (PDF) con un tamaño máximo de 5MB por archivo.
                        </div>

                        {{-- Botones de acción --}}
                        <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                            <a href="{{ route('cimo.afiliate.beneficios') }}" class="btn btn-outline-primary btn-lg">
                                <i class="bi bi-arrow-left me-2"></i>
                                Ver Beneficios
                            </a>
                            <a href="{{ route('cimo.afiliate.pagar') }}" class="btn btn-primary btn-lg">
                                Subir Comprobante
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection