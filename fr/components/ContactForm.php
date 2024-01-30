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
                <h3>Reserver</h3>
            </div>
            <div class="title-classic-text">
                <p>
                     Pour réserver avec succès, veuillez répondre à ceci
                     formulaire avec vos informations pour vous contacter.
                </p>
            </div>
        </article>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" id="FormReservar">
            <div class="row row-14 gutters-14">
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="datos[]" data-constraints="@Required" placeholder="Nom" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="datos[]" data-constraints="@Email @Required" placeholder="Mail" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Pays d'origine" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Ville" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="datos[]" data-constraints="@Numeric" placeholder="Numéro de téléphone" />
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_adultos" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Numéros adultes-</option>
                        <option value="1">Adultes 1</option>
                        <option value="2">Adultes 2</option>
                        <option value="3">Adultes 3</option>
                        <option value="4">Adultes 4</option>
                        <option value="5">Adultes 5</option>
                        <option value="6">Adultes 6</option>
                        <option value="7">Adultes 7</option>
                        <option value="8">Adultes 8</option>
                        <option value="9">Adultes 9</option>
                        <option value="10">Adultes 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_niños" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Numéros d'enfants-</option>
                        <option value="0">Sin enfants</option>
                        <option value="1">Enfants 1</option>
                        <option value="2">Enfants 2</option>
                        <option value="3">Enfants 3</option>
                        <option value="4">Enfants 4</option>
                        <option value="5">Enfants 5</option>
                        <option value="6">Enfants 6</option>
                        <option value="7">Enfants 7</option>
                        <option value="8">Enfants 8</option>
                        <option value="9">Enfants 9</option>
                        <option value="10">Enfants 10</option>
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
                            <option value="">-Choisissez une destination-</option>
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
                            <option value="0">-Sélectionnez un forfait-</option>
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
                        <option selected>-Dates disponibles-</option>
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
                    <a class="button  button-pipaluk" style="background-color: #098CC1; color:white; display: block;
    width: 100%;
    min-height: 60px;
    padding: 17px 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;" onclick="aceptarTerminos()">
                        Accepter les termes
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="button  button-pipaluk" style="background-color: #098CC1; color:white; display: block;
    width: 100%;
    min-height: 60px;
    padding: 17px 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;" onclick="aceptarTerminosCalc()">
                        Calculer le prix
                    </a>
                </div>
                <div class="col-md-4">
                    <button class="button  button-pipaluk" style="background-color: #098CC1; color:white;display: block;
    width: 100%;
    min-height: 60px;
    padding: 17px 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;" type="submit">
                        Réservez maintenant
                    </button>
                </div> 
            </div>         
        </form>
        <div id="formCalcular">
            
        </div>
    </div>
</section>

<script src="../assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/reservarFormFR.js"></script>
<script src="../assets/js/calculosFormfr.js"></script>