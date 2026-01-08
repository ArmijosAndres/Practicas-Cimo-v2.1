{{-- Modal crear empleo --}}
<div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="crearModalLabel">Crear Empleo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('empleos.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <input type="text" class="form-control" name="puesto" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ubicación</label>
                        <input type="text" class="form-control" name="ubicacion" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Requisitos</label>
                        <textarea class="form-control" name="requisitos" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha de Publicación</label>
                        <input type="date" class="form-control" name="fecha_publicacion" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Crear Empleo
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- Fin Modal crear empleo --}}