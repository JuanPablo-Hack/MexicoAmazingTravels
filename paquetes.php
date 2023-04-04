<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <?php include "static/head.php" ?>
</head>

<body>
    <?php include "components/Loader.php" ?>
    <div class="page">
        <?php include "static/header.php" ?>
        <?php
        switch ($_GET['destino']) {
            case 'chiapas':
                include 'components/PaquetesChiapas.php';
                break;
        }
        ?>
        <?php include "static/footer.php" ?>
    </div>
</body>

</html>