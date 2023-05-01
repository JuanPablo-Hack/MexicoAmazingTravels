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
function altaReservacion(){
    include '../config/DataBase.php';
    $SQL = "INSERT INTO `reservaciones` (`nombre`, `correo`, `tel`, `pais`, `ciudad`, `num_adultos`, `num_niños`, `id_destinos`, `id_paquetes`, `fecha_reservadas`, `estado`) VALUES ('Edgar Aarón Munguía Salinas', 'edgar@gmail.com', '3141317510', 'México', 'Manzanillo,Colima', '4', '0', '1', '4', '2023-05-16', '1')";
    $result = $conexion -> query($SQL);
    if(!$result){echo 2;}else{echo 1;}
}

?>