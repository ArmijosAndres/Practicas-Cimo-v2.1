@extends('layouts.auth')

@section('titulo', 'Iniciar Sesión - CIMO')

@push('styles')
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }
    .login-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
</style>
@endpush

@section('contenido')
<section class="login-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                
                {{-- Logo centrado --}}
                <div class="text-center mb-4">
                    <img 
                        src="{{ asset('assets/img/logocimo.ico') }}" 
                        alt="Logo CIMO" 
                        width="70" 
                        height="70"
                        class="mb-2"
                    >
                    <h4 class="text-white fw-bold mb-1">CIMO</h4>
                    <small class="text-white-50">Colegio de Ingenieros Mecánicos de El Oro</small>
                </div>

                {{-- Card del formulario --}}
                <div class="card border-0 shadow-lg" style="border-radius: 15px; background: rgba(255, 255, 255, 0.95);">
                    <div class="card-body p-4">
                        
                        <h5 class="text-center mb-4 fw-bold text-dark">Iniciar Sesión</h5>

                        {{-- Alertas de error --}}
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show py-2" role="alert">
                                <small>
                                    <i class="bi bi-exclamation-circle me-1"></i>
                                    @foreach($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </small>
                                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        {{-- Alerta de logout exitoso --}}
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show py-2" role="alert">
                                <small>
                                    <i class="bi bi-check-circle me-1"></i>
                                    {{ session('success') }}
                                </small>
                                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label text-muted small fw-semibold mb-1">
                                    CORREO ELECTRÓNICO
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-envelope text-muted"></i>
                                    </span>
                                    <input 
                                        type="email" 
                                        class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror" 
                                        id="email" 
                                        name="email" 
                                        value="{{ old('email') }}" 
                                        placeholder="correo@ejemplo.com"
                                        required 
                                        autofocus
                                        style="background: #f8f9fa;"
                                    >
                                </div>
                            </div>

                            {{-- Contraseña --}}
                            <div class="mb-3">
                                <label for="password" class="form-label text-muted small fw-semibold mb-1">
                                    CONTRASEÑA
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-lock text-muted"></i>
                                    </span>
                                    <input 
                                        type="password" 
                                        class="form-control border-start-0 ps-0 @error('password') is-invalid @enderror" 
                                        id="password" 
                                        name="password" 
                                        placeholder="••••••••"
                                        required
                                        style="background: #f8f9fa;"
                                    >
                                </div>
                            </div>

                            {{-- Recordarme --}}
                            <div class="mb-3">
                                <div class="form-check">
                                    <input 
                                        type="checkbox" 
                                        class="form-check-input" 
                                        id="remember" 
                                        name="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label text-muted small" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>

                            {{-- Botón submit --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold" style="border-radius: 8px; padding: 10px;">
                                    Ingresar
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Volver al inicio --}}
                <div class="text-center mt-3">
                    <a href="{{ route('inicio') }}" class="text-white-50 text-decoration-none small">
                        <i class="bi bi-arrow-left me-1"></i>
                        Volver al inicio
                    </a>
                </div>

                {{-- Nota de contacto --}}
                <div class="text-center mt-2 mb-3">
                    <small class="text-white-50" style="font-size: 0.75rem;">
                        ¿Problemas para acceder? Contacta al administrador
                    </small>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection