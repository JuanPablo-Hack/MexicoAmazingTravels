<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "static/head.php" ?>
</head>

<body>
    <?php include "static/header.php" ?>
    <div class="az-content az-content-dashboard">
        <div class="container">
            <div class="az-content-body">
                <?php include "components/NavPanel.php" ?>
                <?php include "components/TablaReservaciones.php" ?>
                <?php include "components/PanelStats.php" ?>
            </div>
        </div>
    </div>
    <?php include "static/footer.php" ?>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="assets/js/tablaReservaciones.js"></script>
</body>

</html>