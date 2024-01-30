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
            <div class="titolo-classico-titolo">
                  <h3>Libro</h3>
              </div>
              <div class="titolo-testo-classico">
                  <p>
                      Um erfolgreich zu buchen, beantworten Sie bitte diese Frage
                      Formular mit Ihren Daten aus, um Kontakt mit Ihnen aufzunehmen.
                  </p>
              </div>
        </article>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" id="FormReservar">
            <div class="row row-14 gutters-14">
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="datos[]" data-constraints="@Required" placeholder="Nome" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="datos[]" data-constraints="@Email @Required" placeholder="Posta" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Paese di origine" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Città" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="datos[]" data-constraints="@Numeric" placeholder="NNumero di telefono" />
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_adultos" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Numeri per adulti-</option>
                        <option value="1">Adulti 1</option>
                        <option value="2">Adulti 2</option>
                        <option value="3">Adulti 3</option>
                        <option value="4">Adulti 4</option>
                        <option value="5">Adulti 5</option>
                        <option value="6">Adulti 6</option>
                        <option value="7">Adulti 7</option>
                        <option value="8">Adulti 8</option>
                        <option value="9">Adulti 9</option>
                        <option value="10">Adulti 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_niños" onchange="calcularPersonas()">
                        <option selected disabled value="0">-I numeri dei bambini-</option>
                        <option value="0">Senza bambini</option>
                        <option value="1">Bambini 1</option>
                        <option value="2">Bambini 2</option>
                        <option value="3">Bambini 3</option>
                        <option value="4">Bambini 4</option>
                        <option value="5">Bambini 5</option>
                        <option value="6">Bambini 6</option>
                        <option value="7">Bambini 7</option>
                        <option value="8">Bambini 8</option>
                        <option value="9">Bambini 9</option>
                        <option value="10">Bambini 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input-total" type="text" readonly placeholder="Persone totali" id="totalPersonas" style="background-color: #E8B11F; color: white;" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected" id="destinoSeleccionado">
                            <option value="">-Seleziona una destinazione-</option>
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
                            <option value="0">-Seleziona un pacchetto-</option>
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
                        <option selected>-Date disponibili-</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="form-wrap" id="cuposdisponibles">
                        <input class="form-input-total" type="number" readonly placeholder="Spazio disponibile: " id="totalPersonas" style="background-color: #E8B11F; color: white;" />
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
                       Accetta i termini
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
                        Calcola il prezzo
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
                        Prenota ora
                    </button>
                </div> 
            </div>         
        </form>
        <div id="formCalcular">
            
        </div>
    </div>
</section>

<script src="../assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/reservarFormIT.js"></script>
<script src="../assets/js/calculosFormIT.js"></script>