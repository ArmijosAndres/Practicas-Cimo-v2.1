@extends('layouts.app')

@section('titulo', 'Contacto - CIMO')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center">Contáctanos</h2>
        
        @if(session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger mt-4">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contacto.enviar') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" value="{{ old('nombre') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Correo electrónico</label>
                <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Asunto</label>
                <input type="text" name="asunto" class="form-control" placeholder="Asunto del mensaje" value="{{ old('asunto') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mensaje</label>
                <textarea name="mensaje" class="form-control" rows="4" placeholder="Escribe tu mensaje..." required>{{ old('mensaje') }}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</section>
@endsection