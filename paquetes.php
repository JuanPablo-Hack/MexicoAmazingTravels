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
        <header class="section page-header">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-panel">
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="index.php"><img src="assets/images/logo-default-450x37.png" alt="" width="225" height="18" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-aside-right rd-navbar-collapse">
                                <div class="languagewrapper">
                                    <div class="languagemenu">
                                        <!-- TODO:Cambiar la bandera de inglaterra y poner la de españa -->
                                        <a href="./gr/"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/64/Germany_flat.png" alt="Deutsch" class="flag"></a>
                                        <a href="./es/"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/64/Spain_flat.png" alt="English" class="flag"></a>
                                        <a href="./fr/"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/64/France_flat.png" alt="Français" class="flag"></a>
                                        <a href="./it/"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/64/Italy_flat.png" alt="Italiano" class="flag"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item "><a class="rd-nav-link" href="index.php">Inicio</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">Servicios</a>
                                    </li>
                                    <li class="rd-nav-item active">
                                        <a class="rd-nav-link" href="destinos.php">Destinos</a>
                                    </li>
                                    <li class="rd-nav-item">
                                        <a class="rd-nav-link" href="experiencias.php">Experiencias</a>
                                    </li>
                                    <li class="rd-nav-item">
                                        <a class="rd-nav-link" href="contact-us.php">Reservaciones</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <?php
        switch ($_GET['destino']) {
            case 'chiapas':
                include 'components/PaquetesChiapas.php';
                break;
        }
        ?>
        <?php include "static/footer.php"; ?>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/popper.js"></script>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/bootstrap.min.js"></script>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/owl.carousel.min.js"></script>
        <script src="https://mexicolu.gruposoca.com.mx/destinos/oaxaca/caroussel/js/main.js"></script>
    </div>
</body>

</html>