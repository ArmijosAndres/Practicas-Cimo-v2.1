{{-- resources/views/layouts/auth.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description', 'Colegio de Ingenieros Mecánicos de El Oro - CIMO')">
    <meta name="author" content="CIMO">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo', 'CIMO')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logocimo.ico') }}">

    {{-- Bootstrap Icons --}}
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" 
        rel="stylesheet"
        crossorigin="anonymous"
    >

    {{-- Estilos propios --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    {{-- Estilos adicionales por página --}}
    @stack('styles')
</head>
<body class="m-0 p-0" style="background: #1a1a2e;">

    {{-- Contenido principal (sin header, sin footer, sin alertas) --}}
    @yield('contenido')

    {{-- Bootstrap JS --}}
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        crossorigin="anonymous"
    ></script>

    {{-- Scripts adicionales por página --}}
    @stack('scripts')
</body>
</html>