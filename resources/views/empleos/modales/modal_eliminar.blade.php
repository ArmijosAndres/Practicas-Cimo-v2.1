{{-- Modal eliminar --}}
<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="eliminarModalLabel">Eliminar Empleo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body">
                <p class="text-center">
                    ¿Estás seguro de que deseas eliminar este empleo?
                </p>

                <form action="{{ route('empleos.destroy') }}" method="POST" class="d-flex gap-2">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="id" id="eliminarId">

                    <button type="submit" class="btn btn-danger w-50">
                        Eliminar
                    </button>

                    <button type="button" class="btn btn-secondary w-50" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- Fin Modal eliminar --}}