<?php
include 'config/DataBase.php';
$sql = 'SELECT * FROM paquetes';
$result = mysqli_query($conexion, $sql);
$sql2 = 'SELECT * FROM destinos';
$result2 = mysqli_query($conexion, $sql2);
?>
<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <article class="title-classic">
            <div class="title-classic-title">
                <h3>Reserve</h3>
            </div>
            <div class="title-classic-text">
                <p>
                     To book successfully please answer this
                     form with your information to contact you.
                </p>
            </div>
        </article>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" id="FormReservar">
            <div class="row row-14 gutters-14">
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="datos[]" data-constraints="@Required" placeholder="Name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="datos[]" data-constraints="@Email @Required" placeholder="E-mail" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Country of origin" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="City" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="datos[]" data-constraints="@Numeric" placeholder="Phone number" />
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_adultos" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Adult Numbers-</option>
                        <option value="1">Adults 1</option>
                        <option value="2">Adults 2</option>
                        <option value="3">Adults 3</option>
                        <option value="4">Adults 4</option>
                        <option value="5">Adults 5</option>
                        <option value="6">Adults 6</option>
                        <option value="7">Adults 7</option>
                        <option value="8">Adults 8</option>
                        <option value="9">Adults 9</option>
                        <option value="10">Adults 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_niños" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Children's Numbers-</option>
                        <option value="0">Sin Children</option>
                        <option value="1">Children 1</option>
                        <option value="2">Children 2</option>
                        <option value="3">Children 3</option>
                        <option value="4">Children 4</option>
                        <option value="5">Children 5</option>
                        <option value="6">Children 6</option>
                        <option value="7">Children 7</option>
                        <option value="8">Children 8</option>
                        <option value="9">Children 9</option>
                        <option value="10">Children 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input-total" type="text" readonly placeholder="Total people" id="totalPersonas" style="background-color: #E8B11F; color: white;" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected" id="destinoSeleccionado">
                            <option value="">-Select a destination-</option>
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
                            <option value="0">-Select a package-</option>
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
                        <option selected>-Available dates-</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="form-wrap" id="cuposdisponibles">
                        <input class="form-input-total" type="number" readonly placeholder="Space available: " id="totalPersonas" style="background-color: #E8B11F; color: white;" />
                    </div>
                </div>
            </div>       
            <div class="row row-14 gutters-14">
                <div class="col-md-4">
                    <div class="button  button-pipaluk" style="background-color: #098CC1; color:white; display: block;
    width: 100%;
    min-height: 60px;
    padding: 17px 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;" onclick="Terms()">
                        Accept Terms
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="button  button-pipaluk" style="background-color: #098CC1; color:white; display: block;
    width: 100%;
    min-height: 60px;
    padding: 17px 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;" onclick="aceptarTerminosCalcUSA()">
                        Calculate Price                    
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="button  button-pipaluk" style="background-color: #098CC1; color:white;display: block;
    width: 100%;
    min-height: 60px;
    padding: 17px 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;" type="submit">
                        Reserve now
                    </button>
                </div> 
            </div>         
        </form>
        <div id="formCalcular">
            
        </div>
    </div>
</section>

<script src="assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="assets/js/calculosFormUSA.js"></script>
<script src="assets/js/reservarFormUSA.js"></script>