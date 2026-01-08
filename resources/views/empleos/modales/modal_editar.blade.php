{{-- Modal editar --}}
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar Empleo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('empleos.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" id="editarId">

                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <input type="text" class="form-control" name="puesto" id="editarPuesto" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ubicación</label>
                        <input type="text" class="form-control" name="ubicacion" id="editarUbicacion" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="editarDescripcion" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Requisitos</label>
                        <textarea class="form-control" name="requisitos" id="editarRequisitos" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha de Publicación</label>
                        <input type="date" class="form-control" name="fecha_publicacion" id="editarFechaPublicacion" required>
                    </div>

                    <button type="submit" class="btn btn-warning w-100">
                        Guardar Cambios
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- Fin Modal editar --}}