<?php
function obtenerReservaciones()
{
    include "../config/DataBase.php";
    $SQL = "SELECT * FROM reservaciones";
    $result = $conexion->query($SQL);
    return $result;
}
function obtenerPaquete($id)
{
    include "../config/DataBase.php";
    $SQL = "SELECT nombre FROM paquetes WHERE id=$id";
    $result = $conexion->query($SQL);
    $datos =  $result->fetch_assoc();
    return $datos['nombre'];
}

function obtenerDestino($id)
{
    include "../config/DataBase.php";
    $SQL = "SELECT nombre FROM destinos WHERE id=$id";
    $result = $conexion->query($SQL);
    $datos =  $result->fetch_assoc();
    return $datos['nombre'];
}

function obtenerEstado($id)
{
    include "../config/DataBase.php";
    $SQL = "SELECT nombre FROM estados WHERE id=$id";
    $result = $conexion->query($SQL);
    $datos =  $result->fetch_assoc();
    return $datos['nombre'];
}
function obtenerPaquetePrecio($id)
{
    include "../config/DataBase.php";
    $SQL = "SELECT precio FROM paquetes WHERE id=$id";
    $result = $conexion->query($SQL);
    $datos =  $result->fetch_assoc();
    return $datos['precio'];
}
