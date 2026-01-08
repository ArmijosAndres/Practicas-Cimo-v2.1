@extends('layouts.app')

@section('title', 'Administración de Noticias')

@section('content')
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center mb-4">Administración de Noticias</h2>

        <div class="mb-3 text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearModal">
                Crear Noticia
            </button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticias as $noticia)
                    <tr>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->fecha }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#editarModal"
                                data-id="{{ $noticia->id }}"
                                data-titulo="{{ $noticia->titulo }}"
                                data-descripcion="{{ $noticia->descripcion }}"
                                data-fecha="{{ $noticia->fecha }}">
                                Editar
                            </button>

                            <button class="btn btn-danger btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#eliminarModal"
                                data-id="{{ $noticia->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@include('noticias.modales')
@endsection
