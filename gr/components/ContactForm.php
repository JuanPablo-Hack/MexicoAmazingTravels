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
                <h3>Jetzt buchen</h3>
            </div>
            <div class="title-classic-text">
                <p>
                    Um erfolgreich zu buchen, beantworten Sie bitte diese Frage
                    Formular mit Ihren Daten aus, um mit Ihnen in Kontakt treten zu können.
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
                        <input class="form-input" id="contact-email-2" type="email" name="datos[]" data-constraints="@Email @Required" placeholder="Email" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="datos[]" data-constraints="@Required" placeholder="Land" />
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
                    <div class="form-wrap">
                        <input class="form-input" type="number" name="datos[]" data-constraints="@Numeric  @Required" id="numero_adultos" placeholder="Anzahl Erwachsene" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="number" name="datos[]" data-constraints="@Numeric  @Required" id="numero_niños" placeholder="Anzahl der Kinder" onchange="calcularPersonas()" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="number" readonly placeholder="Total Leute" id="totalPersonas" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected">
                            <option value="">-Wähle ein Reiseziel-</option>
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
                <div class="col-md-4">
                    <div class="form-wrap">
                        <select name="datos[]" class="form-input" data-constraints="@Selected" id="paquteSeleccionado">
                            <option value="0">-Wählen Sie ein Paket aus-</option>
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
                <div class="col-md-4">
                    <select name="datos[]" class="form-input" data-constraints="@Selected">
                        <option value="">Verfügbare Termine</option>
                        <option value="2023-05-09">3 de Marzo - 8 de Marzo</option>
                        <option value="2023-05-09">3 de Marzo - 8 de Marzo</option>
                        <option value="2023-05-09">3 de Marzo - 8 de Marzo</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Wählen Sie das Datum aus</label>
                    <div class="form-wrap">
                        <input class="form-input" type="date" name="datos[]" required />
                    </div>
                </div>
            </div>
            <div class="button button-primary button-pipaluk" onclick="calcularFormulario()">
                Preis berechnen
            </div>
            <button class="button button-primary button-pipaluk" type="submit">
                Jetzt reservieren
            </button>
        </form>
    </div>
</section>
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-6">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link">
                            <a href="tel:#">+1 323-913-4688</a>
                        </p>
                        <p class="box-contacts-link">
                            <a href="tel:#">+1 323-888-4554</a>
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-6">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link">
                            <a href="mailto:#info@mexicoamazingtravels.com">info@mexicoamazingtravels.com</a>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<script src="../assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../assets/js/reservarForm.js"></script>
<script src="../assets/js/calculosForm.js"></script>