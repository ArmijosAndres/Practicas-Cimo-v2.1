<div class="modal fade" id="eliminarModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('usuarios.destroy') }}" method="POST">
            @csrf

            <input type="hidden" name="id" id="eliminarId">

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Eliminar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p>¿Estás seguro de que deseas eliminar este usuario?</p>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>
