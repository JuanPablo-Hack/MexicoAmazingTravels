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
        <!-- TODO: Hacer que el formulario despliegue los destinos y paquetes de la base de datos, hacer que todos los names sean un array llamados datos -->
        <!-- TODO: Tenemos que hacer un tabla de admnistración de las reservaciones para saber los datos personales de los clientes, el total de personas y la cantidad que se tiene que pagar para la verificación de las cuentas y del saldo a favor de las reservaciones, esta tabla se tiene que exportar en excel o pdf -->
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global"
            data-form-type="contact" id="FormReservar">
            <div class="row row-14 gutters-14">
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="name"
                            data-constraints="@Required" placeholder="Ingresa tu nombre" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="email"
                            data-constraints="@Email @Required" placeholder="Ingresa tu correo" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="pais" data-constraints="@Required"
                            placeholder="Ingresa tu país" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="text" name="ciudad" data-constraints="@Required"
                            placeholder="Ingresa tu ciudad" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="phone"
                            data-constraints="@Numeric" placeholder="Ingresa tu número de telefono" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="number" name="numero_adultos"
                            data-constraints="@Numeric  @Required" id="numero_adultos"
                            placeholder="Ingresa la cantidad de adultos" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="number" name="numero_niños"
                            data-constraints="@Numeric  @Required" id="numero_niños"
                            placeholder="Ingresa número de niños" onchange="calcularPersonas()" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="number" readonly placeholder="Número total de personas"
                            id="totalPersonas" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <select name="destino" class="form-input" data-constraints="@Selected">
                            <option value="">Seleccion un destino</option>
                            <option value="Oaxaca">Oaxaca</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <select name="paquete" class="form-input" data-constraints="@Selected" id="paquteSeleccionado">
                            <option value="">Selecciona un paquete</option>
                            <option value="Basico">Básico</option>
                            <option value="Familiar">Familiar y emocionante</option>
                            <option value="Tiempo">Con tiempo para deleitarse</option>
                            <option value="Aventura">Aventura y Cultura</option>
                            <option value="Playas">Playas inolvidables</option>
                            <option value="Especial">Especial y a tu medida</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <select name="paquete" class="form-input" data-constraints="@Selected">
                        <option value="">Fechas disponibles</option>
                        <option value="">3 de Marzo - 8 de Marzo</option>
                        <option value="">3 de Marzo - 8 de Marzo</option>
                        <option value="">3 de Marzo - 8 de Marzo</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Seleccione la fecha</label>
                    <div class="form-wrap">
                        <input class="form-input" type="date" name="fecha_inicio" required />
                    </div>
                </div>
            </div>
            <div class="button button-primary button-pipaluk" onclick="calcularFormulario()">
                Calcular Precio
            </div>
            <button class="button button-primary button-pipaluk" type="submit">
                Reservar Ahora
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
<script src="assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="assets/js/reservarForm.js"></script>
<script src="assets/js/calculosForm.js"></script>