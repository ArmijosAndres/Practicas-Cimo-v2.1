<?php 
    session_start();
    include_once(__DIR__ .'../../../config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registro de Oferta de Peritaje - CIMO</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/img/logocimo.ico" />
    <link href="../../css/styles.css" rel="stylesheet" />
    <link href="../../css/navegacion.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <?php include_once(__DIR__ .'../../../layout/barra_navegacion.php'); ?>

    <section class="py-5">
        <div class="container px-5 my-5">
            <h2 class="fw-bolder text-center mb-4">Formulario de Registro de Peritaje</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nombre completo del ingeniero</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Especialidad en peritaje</label>
                    <input type="text" name="especialidad" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ubicación / Provincia</label>
                    <input type="text" name="ubicacion" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Teléfono de contacto</label>
                    <input type="tel" name="telefono" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción del servicio de peritaje</label>
                    <textarea name="descripcion" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Adjuntar documento de respaldo (opcional)</label>
                    <input type="file" name="archivo" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Registrar Oferta</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php include_once(__DIR__ .'../../../layout/pie_pagina.php'); ?>
</body>
</html>