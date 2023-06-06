<?php
include '../controllers/Selects.php'
?>
<div class="row row-sm mg-b-20">
    <div class="az-content-label mg-b-5">Tabla de Reservaciones</div>
    <div class="table-responsive">
        <table class="table mg-b-0" id="hidden-table-info">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>TELEFONO</th>
                    <th>TOTAL A PAGAR</th>
                    <th class="hidden_info">Número de Adultos</th>
                    <th class="hidden_info">Número de Niños</th>
                    <th class="hidden_info">Destino</th>
                    <th class="hidden_info">Paquete</th>
                    <th class="hidden_info">Fecha Seleccionada</th>
                    <th class="hidden_info">Día de la reservación</th>
                    <th class="hidden_info">País</th>
                    <th class="hidden_info">Ciudad</th>
                    <th class="hidden_info">Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $datos = obtenerReservaciones();
                while ($mostrar = mysqli_fetch_assoc($datos)) {
                ?>
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['tel'] ?></td>
                        <td><?php $total =  obtenerPaquetePrecio($mostrar['id_paquetes']) * ($mostrar['num_adultos'] + $mostrar['num_niños']);
                            echo '$' . number_format($total, 2, '.') ?></td>
                        <td class="hidden_info"><?php echo $mostrar['num_adultos'] ?></td>
                        <td class="hidden_info"><?php echo $mostrar['num_niños'] ?></td>
                        <td class="hidden_info"><?php echo obtenerDestino($mostrar['id_destinos']) ?></td>
                        <td class="hidden_info"><?php echo obtenerPaquete($mostrar['id_paquetes']) ?></td>
                        <td class="hidden_info"><?php echo $mostrar['fecha_reservadas'] ?></td>
                        <td class="hidden_info"><?php echo $mostrar['creado'] ?></td>
                        <td class="hidden_info"><?php echo $mostrar['pais'] ?></td>
                        <td class="hidden_info"><?php echo $mostrar['ciudad'] ?></td>
                        <td class="hidden_info"><?php echo obtenerEstado($mostrar['estado']) ?></td>
                        <td>
                            <button class="btn btn-success btn-xs" title="Editar Cliente"><i class="far fa-arrow-alt-circle-down"></i></button>
                            <a class="btn btn-danger btn-xs" title="Eliminar Cliente"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>