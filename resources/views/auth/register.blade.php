@extends('layouts.app')

@section('titulo', 'Registrarse - CIMO')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h3 class="mb-0">
                            <i class="bi bi-person-plus me-2"></i>
                            Crear Cuenta
                        </h3>
                    </div>
                    <div class="card-body p-5">
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Errores en el formulario:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="nombre" class="form-label fw-bold">
                                        <i class="bi bi-person text-primary me-2"></i>
                                        Nombre
                                    </label>
                                    <input 
                                        type="text" 
                                        class="form-control @error('nombre') is-invalid @enderror" 
                                        id="nombre" 
                                        name="nombre" 
                                        value="{{ old('nombre') }}" 
                                        placeholder="Tu nombre"
                                        required 
                                        autofocus
                                    >
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="apellido" class="form-label fw-bold">
                                        <i class="bi bi-person text-primary me-2"></i>
                                        Apellido
                                    </label>
                                    <input 
                                        type="text" 
                                        class="form-control @error('apellido') is-invalid @enderror" 
                                        id="apellido" 
                                        name="apellido" 
                                        value="{{ old('apellido') }}" 
                                        placeholder="Tu apellido"
                                        required
                                    >
                                    @error('apellido')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">
                                    <i class="bi bi-envelope text-primary me-2"></i>
                                    Correo Electrónico
                                </label>
                                <input 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    id="email" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    placeholder="ejemplo@correo.com"
                                    required
                                >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="telefono" class="form-label fw-bold">
                                    <i class="bi bi-telephone text-primary me-2"></i>
                                    Teléfono (Opcional)
                                </label>
                                <input 
                                    type="tel" 
                                    class="form-control @error('telefono') is-invalid @enderror" 
                                    id="telefono" 
                                    name="telefono" 
                                    value="{{ old('telefono') }}" 
                                    placeholder="0999999999"
                                >
                                @error('telefono')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label fw-bold">
                                    <i class="bi bi-key text-primary me-2"></i>
                                    Contraseña
                                </label>
                                <input 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Mínimo 8 caracteres"
                                    required
                                >
                                <small class="text-muted">
                                    <i class="bi bi-info-circle me-1"></i>
                                    La contraseña debe tener al menos 8 caracteres
                                </small>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-bold">
                                    <i class="bi bi-key text-primary me-2"></i>
                                    Confirmar Contraseña
                                </label>
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    id="password_confirmation" 
                                    name="password_confirmation" 
                                    placeholder="Repite tu contraseña"
                                    required
                                >
                            </div>

                            <div class="alert alert-info">
                                <i class="bi bi-info-circle-fill me-2"></i>
                                <small>
                                    Al registrarte, aceptas nuestros términos y condiciones de uso.
                                </small>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-person-check me-2"></i>
                                    Crear Cuenta
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3 bg-light">
                        <small class="text-muted">
                            ¿Ya tienes una cuenta? 
                            <a href="{{ route('login') }}" class="text-decoration-none fw-bold">
                                Iniciar Sesión
                            </a>
                        </small>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('inicio') }}" class="text-decoration-none">
                        <i class="bi bi-arrow-left me-2"></i>
                        Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection