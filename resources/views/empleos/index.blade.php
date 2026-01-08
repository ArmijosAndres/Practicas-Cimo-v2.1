@extends('layouts.app')

@section('titulo', 'Bolsa de Empleo - CIMO')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Bolsa de Empleo</h2>
            <p class="lead text-muted">Encuentra las mejores oportunidades laborales</p>
        </div>
        
        <div class="row gx-5">
            @forelse($empleos as $empleo)
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 hover-lift">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h5 class="card-title mb-0">{{ $empleo->titulo }}</h5>
                                <span class="badge bg-primary">Nuevo</span>
                            </div>
                            
                            <div class="mb-3">
                                <p class="text-muted mb-2">
                                    <i class="bi bi-building me-2"></i>
                                    <strong>Empresa:</strong> {{ $empleo->empresa }}
                                </p>
                                <p class="text-muted mb-2">
                                    <i class="bi bi-geo-alt me-2"></i>
                                    <strong>Ubicación:</strong> {{ $empleo->ubicacion }}
                                </p>
                                @if($empleo->salario)
                                    <p class="text-muted mb-2">
                                        <i class="bi bi-cash me-2"></i>
                                        <strong>Salario:</strong> {{ $empleo->salario }}
                                    </p>
                                @endif
                            </div>
                            
                            <p class="card-text text-muted">
                                {{ Str::limit($empleo->descripcion, 150) }}
                            </p>
                            
                            <div class="d-grid gap-2">
                                <a href="{{ route('empleos.show', $empleo->id) }}" class="btn btn-primary">
                                    <i class="bi bi-eye me-2"></i>Ver detalles
                                </a>
                            </div>
                        </div>
                        <div class="card-footer bg-light text-muted small">
                            <i class="bi bi-calendar3 me-1"></i>
                            Publicado: {{ $empleo->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <i class="bi bi-briefcase fs-1 d-block mb-3"></i>
                        <h4>No hay empleos disponibles en este momento</h4>
                        <p class="mb-0">Vuelve pronto para ver nuevas oportunidades laborales.</p>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Paginación si es necesario --}}
        @if(isset($empleos) && $empleos->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $empleos->links() }}
            </div>
        @endif
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