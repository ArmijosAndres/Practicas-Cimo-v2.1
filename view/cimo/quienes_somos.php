<?php 
    session_start();
    include_once(__DIR__ .'../../../config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Quiénes Somos - CIMO</title>
        <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>/assets/img/logocimo.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="../../css/styles.css" rel="stylesheet" />
        <link href="../../css/navegacion.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <?php include_once(__DIR__ .'../../../layout/barra_navegacion.php'); ?>

            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">¿Quiénes Somos?</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <p class="lead text-justify">
                                Somos el Colegio de Ingenieros Mecánicos de El Oro, una institución comprometida con el desarrollo, formación y representación de los ingenieros mecánicos en la provincia.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include_once(__DIR__ .'../../../layout/pie_pagina.php'); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>
