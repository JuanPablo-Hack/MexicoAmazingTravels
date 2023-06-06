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
            background: -webkit-linear-gradient(left, #25c481, #25b7c4);
            background: linear-gradient(to right, #25c481, #25b7c4);
            font-family: 'Roboto', sans-serif;
        }

        section {
            margin: 50px;
        }
    </style>
</head>

<body>
    <?php include "components/Loader.php" ?>
    <div class="page">k
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
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
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
        <section>
            <h1>Itinerario</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <th>Día 1</th>
                        <th>Día 2</th>
                        <th>Día 3</th>
                        <th>Día 4</th>
                        <th>Día 5</th>
                        <th>Día 6</th>
                        <th>Día 7</th>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>Recepción</li>
                                    <li>Comida de bienvenida</li>
                                    <li>Tour por el Centro Histórico</li>
                                    <li>Mercado de la Ciudad</li>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <!-- TODO: Que se ponga todos los itinerarios conforme a la varibles de los paquetes metodo GET -->
        <a class="button button-lg button-primary button-ujarak" style="background-color:#C11709;" href="paquetes.php">Regresar</a> <br> <br>
        <?php include "static/footer.php"; ?>
    </div>
</body>

</html>