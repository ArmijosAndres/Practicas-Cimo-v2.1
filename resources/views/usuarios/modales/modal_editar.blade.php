<div class="modal fade" id="editarModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('usuarios.update') }}" method="POST">
            @csrf

            <input type="hidden" name="id" id="editarId">

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="editarNombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Apellido</label>
                        <input type="text" name="apellido" id="editarApellido" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Correo</label>
                        <input type="email" name="correo" id="editarCorreo" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Nueva Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning">Guardar cambios</button>
                </div>
            </div>
        </form>
    </div>
</div>
