<?php
session_start();
// TODO: Terminar el login y tambien la validación de sesiones
include 'conexion.php';
login($conexion, $_POST['correo'], sha1($_POST['contra']));
function login($conexion, $user, $password)
{
    $sql = "SELECT * FROM trabajador WHERE correo='$user' and pwd='$password'";
    $resultado = $conexion->query($sql);
    
}
?>