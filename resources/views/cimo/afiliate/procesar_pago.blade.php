{{-- resources/views/cimo/afiliate/procesar-pago.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Comprobante Enviado - CIMO')

@section('description', 'Tu comprobante de pago ha sido enviado exitosamente.')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- Mensaje de éxito --}}
                <div class="text-center mb-5">
                    <div class="mb-4">
                        <div class="bg-success bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 120px; height: 120px;">
                            <i class="bi bi-check-lg" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <h1 class="fw-bolder display-4 mb-3">¡Comprobante Enviado!</h1>
                    <p class="lead text-muted">
                        Tu información ha sido recibida correctamente
                    </p>
                </div>

                {{-- Información del proceso --}}
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-body p-5">
                        <h4 class="fw-bold mb-4">
                            <i class="bi bi-info-circle text-primary me-2"></i>
                            ¿Qué sigue ahora?
                        </h4>
                        
                        <div class="timeline">
                            <div class="timeline-item mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-check-lg"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">1. Verificación del Comprobante</h5>
                                        <p class="text-muted mb-0">
                                            Nuestro equipo revisará tu comprobante de pago en un plazo de 
                                            <strong>2 a 3 días hábiles</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">2. Notificación por Email</h5>
                                        <p class="text-muted mb-0">
                                            Te enviaremos un correo electrónico con el estado de tu solicitud 
                                            a <strong>{{ session('email', 'tu correo registrado') }}</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item mb-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">3. Revisión de Documentos</h5>
                                        <p class="text-muted mb-0">
                                            Si todo está correcto, procederemos con la revisión de tu 
                                            documentación completa para la afiliación.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="bi bi-trophy"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h5 class="fw-bold mb-2">4. Confirmación Final</h5>
                                        <p class="text-muted mb-0">
                                            Una vez aprobada tu solicitud, recibirás tu credencial de socio 
                                            y podrás disfrutar de todos los beneficios.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Datos enviados --}}
                @if(session('datos'))
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">
                            <i class="bi bi-file-earmark-check me-2"></i>
                            Resumen de Información Enviada
                        </h5>
                    </div>
                    <div class="card-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-4 text-muted">Nombre:</dt>
                            <dd class="col-sm-8">{{ session('datos.nombre') }}</dd>

                            <dt class="col-sm-4 text-muted">Email:</dt>
                            <dd class="col-sm-8">{{ session('datos.email') }}</dd>

                            <dt class="col-sm-4 text-muted">Teléfono:</dt>
                            <dd class="col-sm-8">{{ session('datos.telefono') }}</dd>

                            <dt class="col-sm-4 text-muted">Comprobante:</dt>
                            <dd class="col-sm-8">
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle me-1"></i>
                                    Archivo recibido
                                </span>
                            </dd>

                            <dt class="col-sm-4 text-muted">Fecha de envío:</dt>
                            <dd class="col-sm-8">{{ now()->format('d/m/Y H:i') }}</dd>
                        </dl>
                    </div>
                </div>
                @endif

                {{-- Alertas importantes --}}
                <div class="alert alert-info" role="alert">
                    <i class="bi bi-lightbulb-fill me-2"></i>
                    <strong>Consejo:</strong> Guarda este número de referencia para consultas futuras: 
                    <code class="ms-2">REF-{{ strtoupper(Str::random(8)) }}</code>
                </div>

                <div class="alert alert-warning" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <strong>Importante:</strong> Si no recibes respuesta en 5 días hábiles, 
                    contáctanos a través de nuestro correo: 
                    <a href="mailto:contacto@cimo.com.ec" class="alert-link">contacto@cimo.com.ec</a>
                </div>

                {{-- Botones de acción --}}
                <div class="d-grid gap-3 d-md-flex justify-content-md-center mt-5">
                    <a href="{{ route('inicio') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-house-door me-2"></i>
                        Volver al Inicio
                    </a>
                    <a href="{{ route('contacto') }}" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-envelope me-2"></i>
                        Contactar Soporte
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
.timeline-item {
    position: relative;
}

.timeline-item:not(:last-child)::after {
    content: '';
    position: absolute;
    left: 24px;
    top: 60px;
    width: 2px;
    height: calc(100% - 10px);
    background: linear-gradient(to bottom, #dee2e6, transparent);
}
</style>
@endpush
@endsection