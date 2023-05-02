<?php
session_start();
include '../config/DataBase.php';
$correo = $_POST['email'];
$password = sha1($_POST['password']);
$sql = "SELECT * FROM admin WHERE email='$correo' and contra='$password'";
$resultado = $conexion->query($sql);
if (!$resultado) {
    header("Location: ../admin/login.php");
} else {
    $row = mysqli_fetch_assoc($resultado);
    $_SESSION['user'] = $row['id'];
    header("Location: ../admin/index.php");
}
