@extends('layouts.app')

@section('titulo', 'Administración de Empleos')

@section('contenido')
    <main class="flex-shrink-0">
        {{-- Navegación --}}
        @include('partials.navigation')

        {{-- Blog preview section --}}
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder">Administración de Empleos</h2>
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    {{-- Llamar a la función que muestra la tabla de empleos --}}
                    @foreach($empleos as $empleo)
                        <div>{{ $empleo->puesto }} - {{ $empleo->ubicacion }}</div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    {{-- Modales --}}
    @include('modales')  
@endsection

@section('scripts')
    <script>
        // Script para pasar datos al modal de edición
        $('#editarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var puesto = button.data('puesto');
            var ubicacion = button.data('ubicacion');
            var descripcion = button.data('descripcion');
            var requisitos = button.data('requisitos');
            var fecha_publicacion = button.data('fecha_publicacion');
            var modal = $(this);
            modal.find('#editarId').val(id);
            modal.find('#editarPuesto').val(puesto);
            modal.find('#editarUbicacion').val(ubicacion);
            modal.find('#editarDescripcion').val(descripcion);
            modal.find('#editarRequisitos').val(requisitos);
            modal.find('#editarFechaPublicacion').val(fecha_publicacion);
        });

        // Script para pasar datos al modal de eliminación
        $('#eliminarModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var modal = $(this);
            modal.find('#eliminarId').val(id);
        });
    </script>

@include('empleos.modales.modal_crear')
@include('empleos.modales.modal_editar')
@include('empleos.modales.modal_eliminar')
@include('empleos.modales.modal_exito')

@endsection
