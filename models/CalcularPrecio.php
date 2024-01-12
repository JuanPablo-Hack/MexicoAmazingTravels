<?php
$id_destino = $_POST['id_destino'];
$id_paquete = $_POST['id_paquete'];
$id_viaje = $_POST['id_viaje'];
$totalPersonas = $_POST['totalPersonas'];

include '../config/DataBase.php';

function obtenerDestino($id, $conexion)
{
    $sql = "SELECT nombre FROM destinos WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    return $fila['nombre'];
}

function obtenerPaquete($id, $conexion)
{
    $sql = "SELECT nombre FROM paquetes WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    return $fila['nombre'];
}

function obtenerViaje($id, $conexion)
{
    $sql = "SELECT fecha_disponible FROM viajes WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    return $fila['fecha_disponible'];
}

function obtenerPrecioPaquete($id, $conexion)
{
    $sql = "SELECT precio FROM paquetes WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    return $fila['precio'];
}
$totalPagar =  obtenerPrecioPaquete($id_paquete, $conexion) * $_POST['totalPersonas'];
echo '<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <div id="contenedor_calcular">
            <article class="title-classic">
                <div class="title-classic-title">
                    <h3>Calculo de Precio</h3>
                </div>
                <div class="title-classic-text">
                    <p>
                        Te damos aqui el precio total de lo que se debe de pagar.
                    </p>
                </div>
            </article>
            <div class="row row-14 gutters-14">
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" readonly value="Número de Adultos:  ' .
    $totalPersonas .
    '" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" readonly value="Destino: ' .
    obtenerDestino($id_destino, $conexion) .
    '" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" readonly value="Paquete:   ' .
    obtenerPaquete($id_paquete, $conexion) .
    '" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" readonly value="Fecha seleccionada: ' .
    obtenerViaje($id_viaje, $conexion) .
    '" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" readonly value="Precio por persona: $ ' .
    obtenerPrecioPaquete($id_paquete, $conexion) .
    ' USD" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" readonly value="Total: $ ' .
    $totalPagar .
    ' USD" />
                    </div>
                </div>
            </div>
        </div>
</section>';
?>
