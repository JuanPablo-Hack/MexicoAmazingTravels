<?php
include '../config/DataBase.php';
$sql = 'SELECT * FROM paquetes';
$result = mysqli_query($conexion, $sql);
$sql2 = 'SELECT * FROM destinos';
$result2 = mysqli_query($conexion, $sql2);
?>
<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <article class="title-classic">
            <div class="title-classic-title">
                <h3>Reservar</h3>
            </div>
            <div class="title-classic-text">
                <p>
                    Para reservar con éxito por favor responde este
                    formulario con tu información para poder contactarte.
                </p>
            </div>
        </article>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" id="FormReservar">
            <div class="row row-14 gutters-14">
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="datos[]" data-constraints="@Required" placeholder="Nombre" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="datos[]" data-constraints="@Email @Required" placeholder="Correo" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="País de Origen" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Ciudad" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="datos[]" data-constraints="@Numeric" placeholder="Número de telefono" />
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_adultos" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Números de Adultos-</option>
                        <option value="1">Adultos 1</option>
                        <option value="2">Adultos 2</option>
                        <option value="3">Adultos 3</option>
                        <option value="4">Adultos 4</option>
                        <option value="5">Adultos 5</option>
                        <option value="6">Adultos 6</option>
                        <option value="7">Adultos 7</option>
                        <option value="8">Adultos 8</option>
                        <option value="9">Adultos 9</option>
                        <option value="10">Adultos 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_niños" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Números de Niños-</option>
                        <option value="0">Sin niños</option>
                        <option value="1">Niños 1</option>
                        <option value="2">Niños 2</option>
                        <option value="3">Niños 3</option>
                        <option value="4">Niños 4</option>
                        <option value="5">Niños 5</option>
                        <option value="6">Niños 6</option>
                        <option value="7">Niños 7</option>
                        <option value="8">Niños 8</option>
                        <option value="9">Niños 9</option>
                        <option value="10">Niños 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input-total" type="text" readonly placeholder="Total de personas" id="totalPersonas" style="background-color: #E8B11F; color: white;" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected" id="destinoSeleccionado">
                            <option value="">-Seleccion un destino-</option>
                            <?php while (
                                $Row1 = mysqli_fetch_array($result2)
                            ) { ?>
                                <option value=<?php echo $Row1[
                                    'id'
                                ]; ?>><?php echo $Row1['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected" id="paquteSeleccionado" onchange="fechasDisponibles()">
                            <option value="0">-Selecciona un paquete-</option>
                            <?php while (
                                $Row1 = mysqli_fetch_array($result)
                            ) { ?>
                                <option value=<?php echo $Row1[
                                    'id'
                                ]; ?>><?php echo $Row1['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" disabled id="fechas_disponibles" onchange="cuposDisponibles()">
                        <option selected>-Fechas disponibles-</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="form-wrap" id="cuposdisponibles">
                        <input class="form-input-total" type="number" readonly placeholder="Cupos disponibles: " id="totalPersonas" style="background-color: #E8B11F; color: white;" />
                    </div>
                </div>
            </div>       
            <div class="row row-14 gutters-14">
                <div class="col-md-4">
                    <a class="button  button-pipaluk" style="background-color: #098CC1; color:white;" onclick="aceptarTerminos()">
                        Aceptar Términos
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="button  button-pipaluk" style="background-color: #098CC1; color:white;" onclick="calcularFormulario()">
                        Calcular Precio
                    </a>
                </div>
                <div class="col-md-4">
                    <button class="button  button-pipaluk" style="background-color: #098CC1; color:white;" type="submit">
                        Reservar Ahora
                    </button>
                </div> 
            </div>         
        </form>
        <div id="formCalcular">
            
        </div>
    </div>
</section>

<script src="../assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/reservarForm.js"></script>
<script src="../assets/js/calculosForm.js"></script>