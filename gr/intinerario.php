<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
    <?php include "static/head.php" ?>
    <style>
        h1 {
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        .tbl-header {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .tbl-content {
            height: 300px;
            overflow-x: auto;
            margin-top: 0px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        th {
            padding: 20px 15px;
            text-align: left;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
        }

        td {
            padding: 15px;
            text-align: left;
            vertical-align: middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border: solid 5px rgba(255, 255, 255, 0.3);
        }


        /* demo styles */

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

        body {
            background: -webkit-linear-gradient(left, #007882, #86B5B9);
            background: linear-gradient(to right, #007882, #86B5B9);
            font-family: 'Roboto', sans-serif;
        }

        section {
            margin: 50px;
        }
    </style>
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
                                    <a class="brand" href="index.php"><img src="../assets/images/logo.png" alt="" width="225" height="18" /></a>
                                </div>
                            </div>
                            <?php include "static/menu_lenguagues.php" ?>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Heim</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">Dienstleistungen</a>
                                    </li>
                                    <li class="rd-nav-item active">
                                        <a class="rd-nav-link" href="destinos.php">Reiseziele</a>
                                    </li>
                                    <li class="rd-nav-item">
                                        <a class="rd-nav-link" href="experiencias.php">Erfahrungen</a>
                                    </li>
                                    <li class="rd-nav-item">
                                        <a class="rd-nav-link" href="contact-us.php">Reservierungen</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <?php
        include "./components/Itinerarios.php";
        seleccionarIntinerario($_GET['paquete']);
        echo '<a class="button button-lg button-danger button-ujarak" style="background-color:red; color:white;" href="paquetes.php?destino=chiapas">Geh zurück</a> <br><br><br>';
        include "static/footer.php"; ?>
    </div>
</body>

</html>