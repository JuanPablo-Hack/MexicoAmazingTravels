<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <?php include "static/head.php" ?>
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
                            <?php include "static/menu_lenguagues.php" ?>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">Services</a>
                                    </li>
                                    <li class="rd-nav-item">
                                        <a class="rd-nav-link" href="destinos.php">Destinations</a>
                                    </li>
                                    <li class="rd-nav-item">
                                        <a class="rd-nav-link" href="experiencias.php">Experiences</a>
                                    </li>
                                    <li class="rd-nav-item active">
                                        <a class="rd-nav-link" href="contact-us.php">Reservations</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- TODO: Poner el formulario de calcular precio a la hora de mandar llamar el calcular el precio -->
        <?php include "components/ContactForm.php" ?>
        <?php include "static/footer.php"; ?>
    </div>
</body>

</html>