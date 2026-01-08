{{-- Modal crear --}}
<div class="modal fade" id="crearModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST"
              action="{{ route('carrusel.store') }}"
              enctype="multipart/form-data"
              class="modal-content">
            @csrf

            <div class="modal-header">
                <h5 class="modal-title">Agregar Imagen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Seleccionar Imagen</label>
                    <input type="file" name="imagen" class="form-control" required>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Agregar Imagen</button>
            </div>
        </form>
    </div>
</div>
{{-- End Modal crear --}}