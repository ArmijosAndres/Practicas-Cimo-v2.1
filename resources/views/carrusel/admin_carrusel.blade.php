@extends('layouts.app')

@section('titulo', 'Administración del Carrusel')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">

        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bolder">Administración del Carrusel</h2>
            </div>
        </div>

        {{-- Tabla del carrusel --}}
        <div class="container">
            {!! $tablaCarrusel !!}
        </div>

    </div>
</section>

@include('carrusel.modales')
@endsection

@push('scripts')
<script>
    // Modal editar
    $('#editarModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const id = button.data('id');
        $(this).find('#editar-id').val(id);
    });

    // Modal eliminar
    $('#eliminarModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const id = button.data('id');
        $(this).find('#eliminar-id').val(id);
    });

    // Modal éxito por parámetro
    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('mensaje')) {
            $('#exitoModal').modal('show');
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    });
</script>
@include('carrusel.modales.modal_crear')
@include('carrusel.modales.modal_editar')
@include('carrusel.modales.modal_eliminar')
@include('carrusel.modales.modal_exito')
@endpush
