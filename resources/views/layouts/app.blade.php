{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description', 'Colegio de Ingenieros Mecánicos de El Oro - CIMO')">
    <meta name="author" content="CIMO">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('titulo', config('CIMO'))</title>
    
    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logocimo.ico') }}">
    
    {{-- Preconnect para mejor performance --}}
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    {{-- Bootstrap Icons --}}
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" 
        rel="stylesheet"
        crossorigin="anonymous"
    >
    
    {{-- Font Awesome --}}
    <link 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
        rel="stylesheet"
        crossorigin="anonymous"
    >
    
    {{-- Estilos propios --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carrousel.css') }}" rel="stylesheet">
    
    {{-- Estilos adicionales por página --}}
    @stack('styles')
</head>
<body class="d-flex flex-column h-100">
    {{-- Pantalla de carga --}}
    @include('partials.loading_screen')
    
    <main class="flex-shrink-0">
        {{-- Navegación --}}
        @include('partials.navigation')
        
        {{-- Cabecera (solo en páginas que lo necesiten) --}}
        @yield('header')
        
        {{-- Alertas globales --}}
        @if(session('success'))
            <div class="container px-5 mt-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            </div>
        @endif
        
        @if(session('error'))
            <div class="container px-5 mt-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            </div>
        @endif
        
        @if(session('warning'))
            <div class="container px-5 mt-4">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    {{ session('warning') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            </div>
        @endif
        
        {{-- Contenido principal --}}
        @yield('contenido')
    </main>
    
    {{-- Footer --}}
    @include('partials.footer')
    
    {{-- Scripts base --}}
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        crossorigin="anonymous"
    ></script>
    <script 
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>
    
    {{-- Scripts propios --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/carrousel.js') }}"></script>
    
    {{-- Scripts adicionales por página --}}
    @stack('scripts')
</body>
</html>