{{-- Modal aplicar --}}
<div class="modal fade" id="aplicarModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('aplicaciones.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Aplicar a Vacante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" name="empleo_id" id="empleo_id">

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" name="nombre_candidato" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input class="form-control" name="telefono" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">CV</label>
                    <input type="file" class="form-control" name="cv" required>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Aplicar</button>
            </div>
        </form>
    </div>
</div>
{{-- Fin modal aplicar --}}