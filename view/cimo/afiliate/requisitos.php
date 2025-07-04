<?php 
    session_start();
    include_once(__DIR__ .'../../../config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Requisitos - CIMO</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/logocimo.ico" />
    <link href="../../css/styles.css" rel="stylesheet" />
    <link href="../../css/navegacion.css" rel="stylesheet" />
</head>
<body>
<?php include_once(__DIR__ .'../../../layout/barra_navegacion.php'); ?>
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center">Requisitos para Afiliarse</h2>
        <ul class="list-group mt-4">
            <li class="list-group-item">Título profesional</li>
            <li class="list-group-item">Copia de cédula y papeleta</li>
            <li class="list-group-item">Currículum Vitae</li>
            <li class="list-group-item">Comprobante de pago</li>
        </ul>
    </div>
</section>
<?php include_once(__DIR__ .'../../../layout/pie_pagina.php'); ?>
</body>
</html>
