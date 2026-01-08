@extends('layouts.app')

@section('titulo', 'Registro de Oferta de Peritaje - CIMO')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center mb-4">Formulario de Registro de Peritaje</h2>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('peritajes.registrar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre completo del ingeniero</label>
                <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Especialidad en peritaje</label>
                <input type="text" name="especialidad" class="form-control" value="{{ old('especialidad') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ubicación / Provincia</label>
                <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono de contacto</label>
                <input type="tel" name="telefono" class="form-control" value="{{ old('telefono') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" name="correo" class="form-control" value="{{ old('correo') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción del servicio de peritaje</label>
                <textarea name="descripcion" class="form-control" rows="4" required>{{ old('descripcion') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Adjuntar documento de respaldo (opcional)</label>
                <input type="file" name="archivo" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png">
                <small class="text-muted">Formatos aceptados: PDF, DOC, DOCX, JPG, PNG</small>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Registrar Oferta</button>
            </div>
        </form>
    </div>
</section>
@endsection