<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            {{-- Columna de texto --}}
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">
                        Colegio de Ingenieros Mecánicos de El Oro (CIMO)
                    </h1>
                    <p class="lead fw-normal text-white-50 mb-4">
                        El Colegio de Ingenieros Mecánicos de El Oro tiene como finalidad 
                        agrupar a los profesionales de la Ingeniería Mecánica y afines, 
                        para promover el desarrollo de la profesión y contribuir al 
                        desarrollo del país.
                    </p>

                    {{-- Redes sociales --}}
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a 
                            class="btn btn-primary btn-lg px-4 me-sm-3" 
                            href="https://www.facebook.com/share/15gyKmLzJt/" 
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Visitar página de Facebook"
                        >
                            <i class="fab fa-facebook-f" aria-hidden="true"></i> 
                            Facebook
                        </a>
                        <a 
                            class="btn btn-danger btn-lg px-4" 
                            href="https://www.instagram.com/presidencia.cimo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" 
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Visitar página de Instagram"
                        >
                            <i class="fab fa-instagram" aria-hidden="true"></i> 
                            Instagram
                        </a>
                    </div>
                </div>
            </div>

            {{-- Columna de carrusel --}}
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                @if(isset($imagenesCarrusel) && $imagenesCarrusel->isNotEmpty())
                    <div 
                        id="carouselPrincipal" 
                        class="carousel slide" 
                        data-bs-ride="carousel"
                        aria-label="Carrusel de imágenes principales"
                    >
                        {{-- Indicadores --}}
                        <div class="carousel-indicators">
                            @foreach($imagenesCarrusel as $index => $imagen)
                                <button 
                                    type="button" 
                                    data-bs-target="#carouselPrincipal" 
                                    data-bs-slide-to="{{ $index }}" 
                                    class="{{ $index === 0 ? 'active' : '' }}" 
                                    aria-current="{{ $index === 0 ? 'true' : 'false' }}" 
                                    aria-label="Diapositiva {{ $index + 1 }}"
                                ></button>
                            @endforeach
                        </div>

                        {{-- Imágenes --}}
                        <div class="carousel-inner">
                            @foreach($imagenesCarrusel as $index => $imagen)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img 
                                        src="{{ asset('uploads/carrusel/' . $imagen->imagen) }}" 
                                        class="d-block w-100 rounded" 
                                        alt="{{ $imagen->titulo ?? 'Imagen ' . ($index + 1) }}"
                                        loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                    >
                                    @if($imagen->titulo || $imagen->descripcion)
                                        <div class="carousel-caption d-none d-md-block">
                                            @if($imagen->titulo)
                                                <h5>{{ $imagen->titulo }}</h5>
                                            @endif
                                            @if($imagen->descripcion)
                                                <p>{{ $imagen->descripcion }}</p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        {{-- Controles --}}
                        <button 
                            class="carousel-control-prev" 
                            type="button" 
                            data-bs-target="#carouselPrincipal" 
                            data-bs-slide="prev"
                            aria-label="Diapositiva anterior"
                        >
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button 
                            class="carousel-control-next" 
                            type="button" 
                            data-bs-target="#carouselPrincipal" 
                            data-bs-slide="next"
                            aria-label="Siguiente diapositiva"
                        >
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                @else
                    {{-- Fallback si no hay imágenes --}}
                    <div class="bg-light rounded p-5">
                        <img 
                            src="{{ asset('assets/img/logocimo.ico') }}" 
                            alt="Logo CIMO" 
                            class="img-fluid"
                            width="200"
                            height="200"
                        >
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>