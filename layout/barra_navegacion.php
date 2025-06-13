<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <img src="<?php echo BASE_URL; ?>/assets/img/logocimo.ico" alt="Logo" class="navbar-logo">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php">Cimo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php">Inicio</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownCimo" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CIMO</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownCimo">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/cimo/quienes_somos.php">Quiénes Somos</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/cimo/mision.php">Misión</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/cimo/vision.php">Visión</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownAfiliate" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Afíliate</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAfiliate">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/afiliate/beneficios.php">Beneficios</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/afiliate/requisitos.php">Requisitos</a></li>
                        <li><hr class="dropdown-divider"></li> <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/afiliate/pagar.php">Pagar</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/view/aplicaciones/aplicar_Bacante.php">Bolsa de Trabajo</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/view/noticias/noticias.php">Noticias</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/view/contacto/contacto.php">Contacto</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownSocios" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Socios</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownSocios">
                        <?php
                        // ESTO ES UN EJEMPLO DE CÓDIGO PHP
                        // NECESITARÁS UNA FUNCIÓN EN TU MODELO PARA OBTENER LOS SOCIOS
                        // Y UN CONTROLADOR PARA PASARLOS A LA VISTA.
                        // SI NO ESTÁS CONECTADO A DB, ESTO ES MÁS COMPLICADO.

                        // Supongamos que tienes una función o array con socios
                        // $socios = obtenerSociosDeLaBaseDeDatos();
                        // O para empezar, puedes hardcodear algunos:
                        $socios_ejemplo = [
                            ['nombre_completo' => 'Nombre y Apellidos 1', 'url_perfil' => BASE_URL . '/view/socios/perfil_socio1.php'],
                            ['nombre_completo' => 'Nombre y Apellidos 2', 'url_perfil' => BASE_URL . '/view/socios/perfil_socio2.php'],
                            ['nombre_completo' => 'Nombre y Apellidos 3', 'url_perfil' => BASE_URL . '/view/socios/perfil_socio3.php'],
                            // ... y así sucesivamente
                        ];

                        if (!empty($socios_ejemplo)) {
                            foreach ($socios_ejemplo as $socio) {
                                echo '<li><a class="dropdown-item" href="' . $socio['url_perfil'] . '">' . $socio['nombre_completo'] . '</a></li>';
                            }
                        } else {
                            echo '<li><a class="dropdown-item" href="#">No hay socios disponibles</a></li>';
                        }
                        ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/socios/listado_socios.php">Ver todos los socios</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/view/convenios/convenios.php">Convenios</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/view/capacitaciones/capacitaciones.php">Capacitaciones</a></li>

                <?php if (isset($_SESSION['usuario'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownNoticia" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrar Noticias</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownNoticia">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/noticias/admin_Noticias.php">Crear/Editar Noticias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownEmpleoAdmin" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrar Empleo</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownEmpleoAdmin">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/empleos/admin_Empleos.php">Crear Empleo</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/aplicaciones/admin_Aplicaciones.php">Administrar Aplicaciones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownUsuarios" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrar Usuarios</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUsuarios">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/usuarios/admin_Usuarios.php">Gestionar Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownCarrusel" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrar Carrusel</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownCarrusel">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/view/carrusel/admin_Carrusel.php">Imágenes Carrusel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/models/usuario/logout.php">Cerrar Sesión</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>