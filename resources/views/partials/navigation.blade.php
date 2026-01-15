<nav class="navbar navbar-expand-lg" role="navigation" aria-label="Navegación principal">
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
                            <a class="dropdown-item" href="https://proyecto-vinculacion-eight.vercel.app/" target="_blank" rel="noopener noreferrer">
                                Ing. Gabriel Encalada
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://proyecto-vinculacion-eight.vercel.app/" target="_blank" rel="noopener noreferrer">
                                Ing. Cristian Arias
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://proyecto-vinculacion-eight.vercel.app/" target="_blank" rel="noopener noreferrer">
                                Ing. Marlon Hernández
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a 
                                class="dropdown-item"
                                href="https://proyecto-vinculacion-eight.vercel.app/"
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

                {{-- MENÚ ÚNICO DE ADMINISTRACIÓN --}}
                @auth
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle text-warning" 
                            id="navbarDropdownAdmin" 
                            href="#" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false"
                        >
                            <i class="bi bi-gear-fill me-1"></i>
                            Administración
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAdmin">
                            {{-- Sección Noticias --}}
                            <li>
                                <h6 class="dropdown-header">
                                    <i class="bi bi-newspaper me-1"></i>
                                    Noticias
                                </h6>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.noticias.index') }}">
                                    <i class="bi bi-pencil-square me-2"></i>
                                    Crear/Editar Noticias
                                </a>
                            </li>
                            
                            <li><hr class="dropdown-divider"></li>
                            
                            {{-- Sección Empleos --}}
                            <li>
                                <h6 class="dropdown-header">
                                    <i class="bi bi-briefcase me-1"></i>
                                    Empleos
                                </h6>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.empleos.index') }}">
                                    <i class="bi bi-plus-circle me-2"></i>
                                    Gestionar Empleos
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.aplicaciones.index') }}">
                                    <i class="bi bi-file-earmark-person me-2"></i>
                                    Ver Aplicaciones
                                </a>
                            </li>
                            
                            <li><hr class="dropdown-divider"></li>
                            
                            {{-- Sección Usuarios --}}
                            <li>
                                <h6 class="dropdown-header">
                                    <i class="bi bi-people me-1"></i>
                                    Usuarios
                                </h6>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.usuarios.index') }}">
                                    <i class="bi bi-person-gear me-2"></i>
                                    Gestionar Usuarios
                                </a>
                            </li>
                            
                            <li><hr class="dropdown-divider"></li>
                            
                            {{-- Sección Carrusel --}}
                            <li>
                                <h6 class="dropdown-header">
                                    <i class="bi bi-images me-1"></i>
                                    Carrusel
                                </h6>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.carrusel.index') }}">
                                    <i class="bi bi-image me-2"></i>
                                    Imágenes Carrusel
                                </a>
                            </li>
                            
                            <li><hr class="dropdown-divider"></li>
                            
                            {{-- Cerrar Sesión --}}
                            <li>
                                <a 
                                    class="dropdown-item text-danger" 
                                    href="#" 
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                    <i class="bi bi-box-arrow-right me-2"></i>
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
                        </ul>
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