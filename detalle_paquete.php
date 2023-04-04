<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <?php include "static/head.php" ?>
    <link rel="stylesheet" href="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/css/style.css" />
</head>

<body>
    <?php include "components/Loader.php" ?>
    <div class="page">
        <?php include "static/header.php"; ?>
        <?php
        switch ($_GET['tipo_paquete']) {
            case 'basico':
                include 'components/PaqueteBasicoChiapas.php';
                break;
            case 'tiempo':
                include 'components/PaqueteTiempoChiapas.php';
                break;
            case 'aventura':
                include 'components/PaqueteAventuraChiapas.php';
                break;
        }
        ?>
        <?php include "static/footer.php"; ?>
    </div>
    <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/popper.js"></script>
    <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/bootstrap.min.js"></script>
    <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/owl.carousel.min.js"></script>
    <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/main.js"></script>
</body>

</html>