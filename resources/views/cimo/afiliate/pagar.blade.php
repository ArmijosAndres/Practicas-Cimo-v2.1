{{-- resources/views/cimo/afiliate/pagar.blade.php --}}
@extends('layouts.app')

@section('titulo', 'Subir Comprobante de Pago - CIMO')

@section('description', 'Sube tu comprobante de pago para completar el proceso de afiliación.')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder display-4">Subir Comprobante de Pago</h1>
            <p class="lead text-muted">Completa tu proceso de afiliación</p>
            <div class="border-bottom border-primary mx-auto mt-3" style="width: 80px; border-width: 3px !important;"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- Información de pago --}}
                <div class="card shadow-sm border-primary mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            Información de Pago
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <p class="mb-1 text-muted small">Banco:</p>
                                <p class="fw-bold mb-0">Banco Pichincha</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="mb-1 text-muted small">Tipo de Cuenta:</p>
                                <p class="fw-bold mb-0">Ahorros</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="mb-1 text-muted small">Número de Cuenta:</p>
                                <p class="fw-bold mb-0">1234567890</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="mb-1 text-muted small">Titular:</p>
                                <p class="fw-bold mb-0">CIMO - El Oro</p>
                            </div>
                            <div class="col-12">
                                <p class="mb-1 text-muted small">Monto:</p>
                                <p class="fw-bold fs-4 text-primary mb-0">$50.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Formulario --}}
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Por favor corrige los siguientes errores:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                            </div>
                        @endif

                        <form action="{{ route('cimo.afiliate.procesar-pago') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="nombre" class="form-label fw-bold">
                                    <i class="bi bi-person text-primary me-2"></i>
                                    Nombre Completo <span class="text-danger">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg @error('nombre') is-invalid @enderror" 
                                    id="nombre"
                                    name="nombre" 
                                    value="{{ old('nombre') }}"
                                    placeholder="Ingrese su nombre completo"
                                    required
                                >
                                @error('nombre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">
                                    <i class="bi bi-envelope text-primary me-2"></i>
                                    Correo Electrónico <span class="text-danger">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                    id="email"
                                    name="email" 
                                    value="{{ old('email') }}"
                                    placeholder="correo@ejemplo.com"
                                    required
                                >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="telefono" class="form-label fw-bold">
                                    <i class="bi bi-telephone text-primary me-2"></i>
                                    Teléfono <span class="text-danger">*</span>
                                </label>
                                <input 
                                    type="tel" 
                                    class="form-control form-control-lg @error('telefono') is-invalid @enderror" 
                                    id="telefono"
                                    name="telefono" 
                                    value="{{ old('telefono') }}"
                                    placeholder="0999999999"
                                    required
                                >
                                @error('telefono')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="comprobante" class="form-label fw-bold">
                                    <i class="bi bi-file-earmark-image text-primary me-2"></i>
                                    Comprobante de Pago (Imagen) <span class="text-danger">*</span>
                                </label>
                                <input 
                                    type="file" 
                                    class="form-control form-control-lg @error('comprobante') is-invalid @enderror" 
                                    id="comprobante"
                                    name="comprobante" 
                                    accept="image/*,.pdf"
                                    required
                                >
                                <small class="text-muted">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Formatos aceptados: JPG, PNG, PDF (Máximo 5MB)
                                </small>
                                @error('comprobante')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Importante:</strong> Asegúrate de que el comprobante sea legible 
                                y contenga todos los datos de la transacción (fecha, monto, número de cuenta).
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-upload me-2"></i>
                                    Enviar Comprobante
                                </button>
                                <a href="{{ route('cimo.afiliate.requisitos') }}" class="btn btn-outline-secondary btn-lg">
                                    <i class="bi bi-arrow-left me-2"></i>
                                    Volver a Requisitos
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Pasos del proceso --}}
                <div class="row mt-5">
                    <div class="col-12">
                        <h5 class="fw-bold mb-4 text-center">Proceso de Afiliación</h5>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center">
                            <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-check-lg fs-3"></i>
                            </div>
                            <h6 class="fw-bold">1. Revisar Requisitos</h6>
                            <p class="small text-muted">Verificar documentación necesaria</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-arrow-right fs-3"></i>
                            </div>
                            <h6 class="fw-bold">2. Realizar Pago</h6>
                            <p class="small text-muted">Transferencia a cuenta CIMO</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center">
                            <div class="bg-secondary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-hourglass-split fs-3"></i>
                            </div>
                            <h6 class="fw-bold">3. Esperar Validación</h6>
                            <p class="small text-muted">Revisión en 2-3 días hábiles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection