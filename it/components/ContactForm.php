<?php
include '../config/DataBase.php';
$sql = "SELECT * FROM paquetes";
$result = mysqli_query($conexion, $sql);
$sql2 = "SELECT * FROM destinos";
$result2 = mysqli_query($conexion, $sql2);
?>
<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <article class="title-classic">
            <div class="title-classic-title">
                <h3>Riserva</h3>
            </div>
            <div class="title-classic-text">
                <p>
                    Per prenotare con successo, per favore rispondi a questo
                    form con i tuoi dati per poterti ricontattare.

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
                        <input class="form-input" id="contact-phone-2" type="text" name="datos[]" data-constraints="@Numeric" placeholder="Numero di telefono" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected">
                            <option value="">-Seleziona una destinazione-</option>
                            <?php
                            while ($Row1 = mysqli_fetch_array($result2)) {
                            ?>
                                <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected" id="paquteSeleccionado">
                            <option value="0">-Seleziona un pacchetto-</option>
                            <?php
                            while ($Row1 = mysqli_fetch_array($result)) {
                            ?>
                                <option value=<?php echo $Row1['id']; ?>><?php echo $Row1['nombre']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" onchange="cuposDisponibles()">
                        <option value="">-Seleziona una data disponibile-</option>
                        <option value="2023-05-09">3 de Marzo - 8 de Marzo</option>
                        <option value="2023-05-09">3 de Marzo - 8 de Marzo</option>
                        <option value="2023-05-09">3 de Marzo - 8 de Marzo</option>
                    </select>
                </div>
                <!-- TODO: Poner calcular precio en el idioma que es kevin   -->
                <div class="col-md-3" id="cuposdisponibles" style="display: none;">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="datos[]" placeholder="Spazio disponibile" />
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_adultos">
                        <option selected disabled>-Numero di adulti-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected" id="numero_niños" onchange="calcularPersonas()">
                        <option selected disabled>-Numero di bambini-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input-total" type="number" readonly placeholder="Totale persone" id="totalPersonas" style="background-color: #01b3a7; color: white;" />
                    </div>
                </div>
            </div>
            <div class="contedor_botones">
                <button class="button button-danger button-pipaluk" style="background-color: #151515; color:white;" onclick="calcularFormulario()">
                    Calcola prezzo
                </button>
                <button class="button button-primary button-pipaluk" type="submit">
                    Prenota ora
                </button>
            </div>

        </form>
    </div>
</section>

<script src="../assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/reservarForm.js"></script>
<script src="../assets/js/calculosForm.js"></script>