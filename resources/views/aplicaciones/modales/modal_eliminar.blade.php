{{-- Modal eliminar --}}
<div class="modal fade" id="eliminarModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('aplicaciones.destroy') }}" class="modal-content">
            @csrf
            @method('DELETE')

            <input type="hidden" name="id" id="eliminarId">

            <div class="modal-header">
                <h5 class="modal-title">Eliminar Aplicación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                ¿Deseas eliminar esta aplicación?
            </div>

            <div class="modal-footer">
                <button class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </form>
    </div>
</div>
{{-- Fin modal eliminar --}}