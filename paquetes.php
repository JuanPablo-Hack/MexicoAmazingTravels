<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <?php include "static/head.php" ?>
    <link rel="stylesheet" href="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
</head>

<body>
    <?php include "components/Loader.php" ?>
    <div class="page">
        <!-- TODO: Poner el header aquí -->
        <?php
        switch ($_GET['destino']) {
            case 'chiapas':
                include 'components/PaquetesChiapas.php';
                break;
        }
        ?>
        <?php
        include 'components/Itinerarios.php';
        include "static/footer.php";
        ?>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/popper.js"></script>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/bootstrap.min.js"></script>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/owl.carousel.min.js"></script>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </div>
</body>

</html>