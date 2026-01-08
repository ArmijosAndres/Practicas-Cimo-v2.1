{{-- Modal eliminar --}}
<div class="modal fade" id="eliminarModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST"
              action="{{ route('carrusel.destroy') }}"
              class="modal-content">
            @csrf
            @method('DELETE')

            <input type="hidden" name="id" id="eliminar-id">

            <div class="modal-header">
                <h5 class="modal-title">Eliminar Imagen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                ¿Estás seguro de eliminar esta imagen?
            </div>

            <div class="modal-footer">
                <button class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>
{{-- End Modal eliminar --}}