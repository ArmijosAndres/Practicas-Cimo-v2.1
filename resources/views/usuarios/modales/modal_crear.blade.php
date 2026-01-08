<div class="modal fade" id="crearModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5>Crear Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Apellido</label>
                        <input type="text" name="apellido" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Correo</label>
                        <input type="email" name="correo" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Crear</button>
                </div>
            </div>
        </form>
    </div>
</div>
