<?php
function confirmarReservacion($id)
{
    include '../config/DataBase.php';
    $SQL = "UPDATE `reservaciones` SET `estado` = '2' WHERE `reservaciones`.`id` = $id";
    $result = $conexion->query($SQL);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function cancelarReservacion($id)
{
    include '../config/DataBase.php';
    $SQL = "UPDATE `reservaciones` SET `estado` = '3' WHERE `reservaciones`.`id` = $id";
    $result = $conexion->query($SQL);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
}
function altaReservacion($datos)
{
    include '../config/DataBase.php';
    $SQL = "INSERT INTO `reservaciones` (`nombre`, `correo`, `tel`, `pais`, `ciudad`, `num_adultos`, `num_niños`, `id_destinos`, `id_paquetes`, `id_viaje`, `estado`) VALUES ('$datos[0]', '$datos[1]', '$datos[4]', '$datos[2]', '$datos[3]', '$datos[5]', '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '1')";
    $result = $conexion->query($SQL);
    if (!$result) {
        echo 2;
    } else {
        echo 1;
    }
    $total_personas = $datos[5] + $datos[6];
    actualizarCuposDisponibles($datos[9], $total_personas);
}

function actualizarCuposDisponibles($id, $cantidad_personas)
{
    include '../config/DataBase.php';
    $cupos_restantes = obtenerCuposDisponibles($id) - $cantidad_personas;
    $SQL = "UPDATE viajes SET cupos_disponibles = '$cupos_restantes' WHERE id = $id";
    $result = $conexion->query($SQL);
}

function obtenerCuposDisponibles($id)
{
    include '../config/DataBase.php';
    $SQL = "SELECT cupos_disponibles FROM viajes WHERE id = '$id'";
    $result = $conexion->query($SQL);
    $row = $result->fetch_assoc();
    return $row['cupos_disponibles'];
}

?>
