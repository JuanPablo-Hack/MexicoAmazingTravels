<?php 
function confirmarReservacion($id){
    include '../config/DataBase.php';
    $SQL = "UPDATE `reservaciones` SET `estado` = '2' WHERE `reservaciones`.`id` = $id";
    $result = $conexion -> query($SQL);
    if(!$result){echo 2;}else{echo 1;}
}
function cancelarReservacion($id){
    include '../config/DataBase.php';
    $SQL = "UPDATE `reservaciones` SET `estado` = '3' WHERE `reservaciones`.`id` = $id";
    $result = $conexion -> query($SQL);
    if(!$result){echo 2;}else{echo 1;}
}
function altaReservacion($datos){
        include '../config/DataBase.php';
        $SQL = "INSERT INTO `reservaciones` (`nombre`, `correo`, `tel`, `pais`, `ciudad`, `num_adultos`, `num_niños`, `id_destinos`, `id_paquetes`, `fecha_reservadas`, `estado`) VALUES ('$datos[0]', '$datos[1]', '$datos[4]', '$datos[2]', '$datos[3]', '$datos[5]', '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '1')";
        $result = $conexion -> query($SQL);
        if(!$result){echo 2;}else{echo 1;}
}

?>