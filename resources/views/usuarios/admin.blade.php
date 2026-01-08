@extends('layouts.app')

@section('title', 'Administración de Usuarios')

@section('content')
<section class="py-5">
    <div class="container px-5 my-5">

        <div class="row gx-5 justify-content-center mb-4">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="fw-bolder">Administración de Usuarios</h2>
            </div>
        </div>

        <div class="mb-3 text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearModal">
                Crear Usuario
            </button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->correo }}</td>
                        <td>
                            <button
                                class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#editarModal"
                                data-id="{{ $usuario->id }}"
                                data-nombre="{{ $usuario->nombre }}"
                                data-apellido="{{ $usuario->apellido }}"
                                data-correo="{{ $usuario->correo }}"
                            >
                                Editar
                            </button>

                            <button
                                class="btn btn-danger btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#eliminarModal"
                                data-id="{{ $usuario->id }}"
                            >
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</section>

@include('usuarios.modales')
@endsection
