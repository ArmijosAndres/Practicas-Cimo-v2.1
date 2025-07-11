<?php 
    session_start();
    include_once(__DIR__ .'/config/config.php');
    include_once(__DIR__ .'/config/conexion.php');
    require_once __DIR__ .'/models/carrusel/mostrar_carrusel.php';
    require_once 'models/aplicaciones/mostrar_aplicaciones.php';
    

    $tablaCarrusel = new TablaCarrusel();
    $tablaAplicaciones = new TablaAplicaciones();
    require_once 'models/noticias/mostrar_noticias.php';

    $tablaNoticias = new TablaNoticias(); 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cimo</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/logocimo.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Navegacion CSS -->
        <link href="programacion_php/cimo_v2.1-main/css/navegacion.css" rel="stylesheet" />
        <!-- Carrousel CSS -->
        <link href="programacion_php/cimo_v2.1-main/css/carrousel.css" rel="stylesheet" />
         <!-- Font Awesome -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include_once(__DIR__ .'/layout/barra_navegacion.php'); ?>
            <!-- Header-->
            <?php include_once(__DIR__ .'/layout/cabecera.php'); ?>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Nuestras Noticias!</h2>
                                <p class="lead fw-normal text-muted mb-5">Mantente informado con las últimas 
                                    noticias y actualizaciones de nuestro blog.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <?php $tablaNoticias->mostrarNoticiasMiniCard(); ?>
                    </div>
                </div>
            </section>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Conoce nuestras bacantes</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <?php $tablaAplicaciones->mostrarAplicacionesMiniCard(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <!-- Llamado a la acción-->
                    <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Únite a nuestra portal de Noticias.</div>
                                <div class="text-white-50">Suscríbete a nuestro boletín para las últimas actualizaciones.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Dirección de correo..." aria-label="Dirección de correo..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Suscribirse</button>
                                </div>
                                <div class="small text-white-50">Nos importa la privacidad y nunca compartiremos tus datos.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php include_once(__DIR__ .'/layout/pie_pagina.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Scripts de carrousel -->
        <script src="js/carrousel.js"></script>
    </body>
</html>
