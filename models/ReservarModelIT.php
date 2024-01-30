<?php
include '../controllers/ReservacionController.php';
include '../controllers/SendMailIT.php';
switch ($_POST['accion']) {
    case 'alta':
        mandarReservacionVentas($_POST['datos']);
        altaReservacion($_POST['datos']);
        mandarConfirmacionReservacion($_POST['datos']);
        break;
    case 'confirmar':
        break;
    case 'cancelar':
        break;   
}

?>