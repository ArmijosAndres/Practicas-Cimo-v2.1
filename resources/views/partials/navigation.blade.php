<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation" aria-label="Navegación principal">
    <div class="container px-5">
        {{-- Logo y marca --}}
        <img 
            src="{{ asset('assets/img/logocimo.ico') }}" 
            alt="Logo CIMO" 
            class="navbar-logo"
            width="40"
            height="40"
        >
        <a class="navbar-brand" href="{{ route('inicio') }}">
            {{ config('CIMO') }}
        </a>

        {{-- Botón hamburguesa --}}
        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Alternar navegación"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menú principal --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                {{-- Inicio --}}
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" 
                        href="{{ route('inicio') }}"
                        {{ request()->routeIs('inicio') ? 'aria-current="page"' : '' }}
                    >
                        Inicio
                    </a>
                </li>

                {{-- CIMO --}}
                <li class="nav-item dropdown">
                    <a 
                        class="nav-link dropdown-toggle" 
                        id="navbarDropdownCimo" 
                        href="#" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                    >
                        CIMO
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownCimo">
                        <li>
                            <a class="dropdown-item" href="{{ route('cimo.quienes_somos') }}">
                                Quiénes Somos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('cimo.mision') }}">
                                Misión
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('cimo.vision') }}">
                                Visión
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Afíliate --}}
                <li class="nav-item dropdown">
                    <a 
                        class="nav-link dropdown-toggle" 
                        id="navbarDropdownAfiliate" 
                        href="#" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                    >
                        Afíliate
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAfiliate">
                        <li>
                            <a class="dropdown-item" href="{{ route('cimo.afiliate.beneficios') }}">
                                Beneficios
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('cimo.afiliate.requisitos') }}">
                                Requisitos
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('cimo.afiliate.pagar') }}">
                                Pagar
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Bolsa de Empleo --}}
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('empleos.*') ? 'active' : '' }}" 
                        href="{{ route('empleos.index') }}"
                    >
                        Bolsa de Empleo
                    </a>
                </li>

                {{-- Noticias --}}
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('noticias.*') ? 'active' : '' }}" 
                        href="{{ route('noticias.index') }}"
                    >
                        Noticias
                    </a>
                </li>

                {{-- Contacto --}}
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" 
                        href="{{ route('contacto') }}"
                    >
                        Contacto
                    </a>
                </li>

                {{-- Socios --}}
                <li class="nav-item dropdown">
                    <a 
                        class="nav-link dropdown-toggle" 
                        id="navbarDropdownSocios" 
                        href="#" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                    >
                        Socios
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownSocios">
                        <li>
                            <a class="dropdown-item" href="https://cimo.com.ec/" target="_blank" rel="noopener noreferrer">
                                Ing. Gabriel Encalada
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://cimo.com.ec/" target="_blank" rel="noopener noreferrer">
                                Ing. Cristian Arias
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://cimo.com.ec/" target="_blank" rel="noopener noreferrer">
                                Ing. Marlon Hernández
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a 
                                class="dropdown-item" 
                                href="https://cimo.com.ec/" 
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Ver todos los socios
                                <i class="bi bi-box-arrow-up-right ms-1"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Convenios --}}
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('convenios') ? 'active' : '' }}" 
                        href="{{ route('convenios') }}"
                    >
                        Convenios
                    </a>
                </li>

                {{-- Capacitaciones --}}
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('capacitaciones.*') ? 'active' : '' }}" 
                        href="{{ route('capacitaciones.index') }}"
                    >
                        Capacitaciones
                    </a>
                </li>

                {{-- Peritajes --}}
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('peritajes') ? 'active' : '' }}" 
                        href="{{ route('peritajes') }}"
                    >
                        Peritajes
                    </a>
                </li>

                {{-- Menús de administración --}}
                @auth
                    {{-- Administrar Noticias --}}
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle" 
                            id="navbarDropdownNoticia" 
                            href="#" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                        >
                            Administrar Noticias
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownNoticia">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.noticias.index') }}">
                                    Crear/Editar Noticias
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Administrar Empleo --}}
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle" 
                            id="navbarDropdownEmpleoAdmin" 
                            href="#" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                        >
                            Administrar Empleo
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownEmpleoAdmin">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.empleos.index') }}">
                                    Crear Empleo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.aplicaciones.index') }}">
                                    Administrar Aplicaciones
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Administrar Usuarios --}}
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle" 
                            id="navbarDropdownUsuarios" 
                            href="#" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                        >
                            Administrar Usuarios
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUsuarios">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.usuarios.index') }}">
                                    Gestionar Usuarios
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Administrar Carrusel --}}
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle" 
                            id="navbarDropdownCarrusel" 
                            href="#" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                        >
                            Administrar Carrusel
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownCarrusel">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.carrusel.index') }}">
                                    Imágenes Carrusel
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Cerrar Sesión --}}
                    <li class="nav-item">
                        <a 
                            class="nav-link" 
                            href="#" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        >
                            Cerrar Sesión
                        </a>
                        <form 
                            id="logout-form" 
                            action="{{ route('logout') }}" 
                            method="POST" 
                            style="display: none;"
                        >
                            @csrf
                        </form>
                    </li>
                @else
                    {{-- Login --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-person-circle me-1"></i>
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>