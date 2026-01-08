{{-- Modal editar --}}
<div class="modal fade" id="editarModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST"
              action="{{ route('carrusel.update') }}"
              enctype="multipart/form-data"
              class="modal-content">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" id="editar-id">

            <div class="modal-header">
                <h5 class="modal-title">Editar Imagen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nueva Imagen</label>
                    <input type="file" name="imagen" class="form-control" required>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Actualizar Imagen</button>
            </div>
        </form>
    </div>
</div>
{{-- End Modal editar --}}