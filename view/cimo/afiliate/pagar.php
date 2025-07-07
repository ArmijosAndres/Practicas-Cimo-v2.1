<?php 
    session_start();
    include_once(__DIR__ .'/../../../config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Pagar Afiliación - CIMO</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/logocimo.ico" />
    <link href="programacion_php/cimo_v2.1-main/css/styles.css" rel="stylesheet" />
    <link href="programacion_php/cimo_v2.1-main/css/navegacion.css" rel="stylesheet" />
</head>
<body>
<?php include_once(__DIR__ .'/../../../layout/barra_navegacion.php'); ?>
<section class="py-5">
    <div class="container px-5 my-5">
        <h2 class="fw-bolder text-center">Sube tu comprobante de pago</h2>
        <form action="procesar_pago.php" method="POST" enctype="multipart/form-data" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Nombre completo</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Comprobante (imagen)</label>
                <input type="file" name="comprobante" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>
<?php include_once(__DIR__ .'/../../../layout/pie_pagina.php'); ?>
</body>
</html>
