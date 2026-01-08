{{-- Modal para aplicar a empleo --}}
<div class="modal fade" id="aplicarModal" tabindex="-1" aria-labelledby="aplicarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="aplicarModalLabel">
                    <i class="bi bi-briefcase me-2"></i>
                    Aplicar a: {{ $empleo->titulo }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            
            <form action="{{ route('empleos.aplicar', $empleo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-person text-primary me-1"></i>
                                Nombre <span class="text-danger">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="nombre" 
                                class="form-control @error('nombre') is-invalid @enderror" 
                                value="{{ old('nombre') }}"
                                placeholder="Tu nombre"
                                required
                            >
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-person text-primary me-1"></i>
                                Apellido <span class="text-danger">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="apellido" 
                                class="form-control @error('apellido') is-invalid @enderror" 
                                value="{{ old('apellido') }}"
                                placeholder="Tu apellido"
                                required
                            >
                            @error('apellido')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="bi bi-envelope text-primary me-1"></i>
                            Correo Electrónico <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') }}"
                            placeholder="ejemplo@correo.com"
                            required
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="bi bi-telephone text-primary me-1"></i>
                            Teléfono <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="tel" 
                            name="telefono" 
                            class="form-control @error('telefono') is-invalid @enderror" 
                            value="{{ old('telefono') }}"
                            placeholder="0999999999"
                            required
                        >
                        @error('telefono')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="bi bi-file-earmark-pdf text-primary me-1"></i>
                            Curriculum Vitae (PDF) <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="file" 
                            name="curriculum" 
                            class="form-control @error('curriculum') is-invalid @enderror" 
                            accept=".pdf"
                            required
                        >
                        <small class="text-muted">
                            <i class="bi bi-info-circle me-1"></i>
                            Formato PDF, máximo 5MB
                        </small>
                        @error('curriculum')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <i class="bi bi-chat-text text-primary me-1"></i>
                            Carta de Presentación (Opcional)
                        </label>
                        <textarea 
                            name="carta_presentacion" 
                            class="form-control @error('carta_presentacion') is-invalid @enderror" 
                            rows="4" 
                            placeholder="Cuéntanos por qué eres el candidato ideal para este puesto..."
                        >{{ old('carta_presentacion') }}</textarea>
                        <small class="text-muted">
                            <i class="bi bi-info-circle me-1"></i>
                            Opcional, máximo 500 caracteres
                        </small>
                        @error('carta_presentacion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="alert alert-info">
                        <i class="bi bi-shield-check me-2"></i>
                        <small>
                            Tus datos serán tratados de forma confidencial y solo se usarán 
                            para el proceso de selección de este puesto.
                        </small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send me-2"></i>
                        Enviar Aplicación
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Fin Modal aplicar --}}