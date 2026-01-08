@extends('layouts.app')

@section('titulo', 'Aplicar a Vacante')

@section('contenido')
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="fw-bolder">Administración de Empleos</h2>
            </div>
        </div>

        <div class="container mt-5">
            {!! $aplicaciones !!}
        </div>
    </div>
</section>

@include('aplicaciones.modales')
@endsection

@push('scripts')
<script>
    $('#aplicarModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const id = button.data('id');
        const puesto = button.data('puesto');

        $(this).find('#empleo_id').val(id);
        $(this).find('.modal-title').text('Aplicar a ' + puesto);
    });
</script>
@endpush
