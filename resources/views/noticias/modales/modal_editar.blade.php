<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('noticias.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" id="editarId">
            <input type="hidden" name="foto_actual" id="foto_actual">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Noticia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nueva Foto (opcional)</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Título</label>
                        <input type="text" name="titulo" id="editarTitulo" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="descripcion" id="editarDescripcion" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha</label>
                        <input type="datetime-local" name="fecha" id="editarFecha" class="form-control" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Guardar cambios</button>
                </div>
            </div>
        </form>
    </div>
</div>