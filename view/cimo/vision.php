<?php 
    session_start();
    include_once(__DIR__ .'../../../config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Visión - CIMO</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/logocimo.ico" />
    <link href="../../css/styles.css" rel="stylesheet" />
    <link href="../../css/navegacion.css" rel="stylesheet" />
</head>
<body>
<?php include_once(__DIR__ .'../../../layout/barra_navegacion.php'); ?>
<section class="py-5">
    <div class="container px-5 my-5">
        <h1 class="fw-bolder text-center">Visión</h1>
        <p class="lead mt-4 text-justify">
            Ser una institución líder en la representación técnica y profesional de la ingeniería mecánica en el Ecuador, con impacto nacional e internacional.
        </p>
    </div>
</section>
<?php include_once(__DIR__ .'../../../layout/pie_pagina.php'); ?>
</body>
</html>
