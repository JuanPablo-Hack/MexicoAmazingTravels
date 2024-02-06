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
                 <h3>Buch</h3>
             </div>
             <div class="title-classic-text">
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
                        <input class="form-input" id="contact-your-name-2" type="text" name="datos[]" data-constraints="@Required" placeholder="Name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="datos[]" data-constraints="@Email @Required" placeholder="Post" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Herkunftsland" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Stadt" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="datos[]" data-constraints="@Numeric" placeholder="Telefonnummer" />
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_adultos" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Zahlen für Erwachsene-</option>
                        <option value="1">Erwachsene 1</option>
                        <option value="2">Erwachsene 2</option>
                        <option value="3">Erwachsene 3</option>
                        <option value="4">Erwachsene 4</option>
                        <option value="5">Erwachsene 5</option>
                        <option value="6">Erwachsene 6</option>
                        <option value="7">Erwachsene 7</option>
                        <option value="8">Erwachsene 8</option>
                        <option value="9">Erwachsene 9</option>
                        <option value="10">Erwachsene 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_niños" onchange="calcularPersonas()">
                        <option selected disabled value="0">-Zahlen für Kinder-</option>
                        <option value="0">Ohne Kinder</option>
                        <option value="1">Kinder 1</option>
                        <option value="2">Kinder 2</option>
                        <option value="3">Kinder 3</option>
                        <option value="4">Kinder 4</option>
                        <option value="5">Kinder 5</option>
                        <option value="6">Kinder 6</option>
                        <option value="7">Kinder 7</option>
                        <option value="8">Kinder 8</option>
                        <option value="9">Kinder 9</option>
                        <option value="10">Kinder 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input-total" type="text" readonly placeholder="Total Leute" id="totalPersonas" style="background-color: #E8B11F; color: white;" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected" id="destinoSeleccionado">
                            <option value="">-Wähle ein Reiseziel-</option>
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
                            <option value="0">-Wählen Sie ein Paket aus-</option>
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
                        <option selected>-Verfügbare Termine-</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="form-wrap" id="cuposdisponibles">
                        <input class="form-input-total" type="number" readonly placeholder="Platz verfügbar: " id="totalPersonas" style="background-color: #E8B11F; color: white;" />
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
                        Die Bedingungen akzeptieren
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="button  button-pipaluk" style="background-color: #098CC1; color:white; display: block;
    width: 100%;
    min-height: 60px;
    padding: 17px 22px;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;" onclick="calcularFormulario()">
                        Preis berechnen
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
                       Jetzt reservieren
                    </button>
                </div> 
            </div>         
        </form>
        <div id="formCalcular">
            
        </div>
    </div>
</section>

<script src="../assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/reservarFormGR.js"></script>
<script src="../assets/js/calculosFormGR.js"></script>