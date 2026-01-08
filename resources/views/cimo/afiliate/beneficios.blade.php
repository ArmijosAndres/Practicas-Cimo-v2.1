@extends('layouts.app')

@section('titulo', 'Beneficios de Afiliarse - CIMO')

@section('description', 'Descubre todos los beneficios de ser parte del Colegio de Ingenieros Mecánicos de El Oro.')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder display-4">Beneficios de Afiliarte</h1>
            <p class="lead text-muted">Únete a nuestra comunidad y disfruta de múltiples ventajas</p>
            <div class="border-bottom border-primary mx-auto mt-3" style="width: 80px; border-width: 3px !important;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row g-4">
                    {{-- Beneficio 1 --}}
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary bg-gradient text-white rounded-3 p-3">
                                            <i class="bi bi-mortarboard-fill fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="fw-bold mb-3">Capacitaciones Exclusivas</h4>
                                        <p class="text-muted mb-0">
                                            Acceso prioritario a cursos, talleres y seminarios especializados 
                                            en las últimas tendencias de ingeniería mecánica.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Beneficio 2 --}}
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-success bg-gradient text-white rounded-3 p-3">
                                            <i class="bi bi-briefcase-fill fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="fw-bold mb-3">Bolsa de Empleo</h4>
                                        <p class="text-muted mb-0">
                                            Acceso exclusivo a ofertas laborales y oportunidades de 
                                            crecimiento profesional en empresas líderes del sector.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Beneficio 3 --}}
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-info bg-gradient text-white rounded-3 p-3">
                                            <i class="bi bi-people-fill fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="fw-bold mb-3">Red de Contactos Profesionales</h4>
                                        <p class="text-muted mb-0">
                                            Networking con colegas, expertos y empresas del sector 
                                            mecánico a nivel local y nacional.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Beneficio 4 --}}
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-warning bg-gradient text-white rounded-3 p-3">
                                            <i class="bi bi-tag-fill fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="fw-bold mb-3">Descuentos y Convenios</h4>
                                        <p class="text-muted mb-0">
                                            Beneficios especiales en comercios, servicios profesionales, 
                                            eventos y productos para ingenieros.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Beneficio 5 --}}
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-danger bg-gradient text-white rounded-3 p-3">
                                            <i class="bi bi-shield-check fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="fw-bold mb-3">Respaldo Gremial</h4>
                                        <p class="text-muted mb-0">
                                            Asesoría legal y representación profesional ante entidades 
                                            públicas y privadas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Beneficio 6 --}}
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm hover-lift">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-secondary bg-gradient text-white rounded-3 p-3">
                                            <i class="bi bi-journal-check fs-3"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="fw-bold mb-3">Certificaciones</h4>
                                        <p class="text-muted mb-0">
                                            Obtén certificados avalados por el colegio para validar 
                                            tu participación en eventos y capacitaciones.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="text-center mt-5">
                    <a href="{{ route('cimo.afiliate.requisitos') }}" class="btn btn-primary btn-lg px-5">
                        <i class="bi bi-file-text me-2"></i>
                        Ver Requisitos para Afiliarse
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}
</style>
@endpush
@endsection