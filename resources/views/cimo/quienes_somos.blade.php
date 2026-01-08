@extends('layouts.app')

@section('titulo', 'Quiénes Somos - CIMO')

@section('description', 'Conoce al Colegio de Ingenieros Mecánicos de El Oro, nuestra historia y compromiso con el desarrollo profesional.')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder display-4">¿Quiénes Somos?</h1>
            <div class="border-bottom border-primary mx-auto mt-3" style="width: 80px; border-width: 3px !important;"></div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <p class="lead text-muted mb-4">
                            Somos el <strong>Colegio de Ingenieros Mecánicos de El Oro</strong>, 
                            una institución comprometida con el desarrollo, formación y representación 
                            de los ingenieros mecánicos en la provincia.
                        </p>
                        
                        <p class="text-muted">
                            Nuestro colegio agrupa a profesionales de la Ingeniería Mecánica y afines, 
                            promoviendo el desarrollo continuo de la profesión y contribuyendo 
                            activamente al progreso de nuestra región y del país.
                        </p>

                        <div class="row mt-5">
                            <div class="col-md-6 mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-check-circle-fill text-primary fs-3"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fw-bold">Representación Profesional</h5>
                                        <p class="text-muted mb-0">
                                            Defendemos los intereses de nuestros agremiados.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-mortarboard-fill text-primary fs-3"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fw-bold">Formación Continua</h5>
                                        <p class="text-muted mb-0">
                                            Capacitaciones y actualización profesional constante.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-people-fill text-primary fs-3"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fw-bold">Networking</h5>
                                        <p class="text-muted mb-0">
                                            Red de contactos profesionales en el sector.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-award-fill text-primary fs-3"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fw-bold">Ética Profesional</h5>
                                        <p class="text-muted mb-0">
                                            Promovemos los más altos estándares éticos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection