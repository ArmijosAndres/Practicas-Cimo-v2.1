@extends('layouts.app')

@section('titulo', 'Administración de Vacantes')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="fw-bolder">Administración de Vacantes</h2>
            </div>
        </div>

        <div class="container mt-5">
            {{-- Aquí luego irá la tabla con Blade --}}
            {!! $tablaAplicaciones !!}
        </div>
    </div>
</section>

@include('aplicaciones.modales')
@endsection

@push('scripts')
<script>
    $('#eliminarModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const id = button.data('id');
        $(this).find('#eliminarId').val(id);
    });

    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('mensaje')) {
            $('#exitoModal').modal('show');
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    });
</script>
@endpush
