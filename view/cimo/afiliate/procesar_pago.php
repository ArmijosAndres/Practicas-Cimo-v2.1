<?php 
    session_start();
    include_once(__DIR__ .'../../../config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Procesar Pago - CIMO</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/logocimo.ico" />
    <link href="../../css/styles.css" rel="stylesheet" />
    <link href="../../css/navegacion.css" rel="stylesheet" />
</head>
<body>
<?php include_once(__DIR__ .'../../../layout/barra_navegacion.php'); ?>
<section class="py-5">
    <div class="container px-5 my-5 text-center">
        <h2 class="fw-bolder">¡Gracias por enviar tu comprobante!</h2>
        <p class="lead mt-3">Tu información ha sido registrada de manera visual. Esta página no guarda archivos aún.</p>
    </div>
</section>
<?php include_once(__DIR__ .'../../../layout/pie_pagina.php'); ?>
</body>
</html>
