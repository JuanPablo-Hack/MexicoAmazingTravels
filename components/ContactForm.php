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
                        <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required" />
                        <label class="form-label" for="contact-your-name-2">Nombre</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required" />
                        <label class="form-label" for="contact-email-2">E-mail</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric" />
                        <label class="form-label" for="contact-phone-2">Teléfono</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <select name="destino" class="form-input" data-constraints="@Selected">
                            <option value="">Seleccion un destino</option>
                            <option value="">Oaxaca</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-wrap">
                        <select name="paquete" class="form-input" data-constraints="@Selected">
                            <option value="">Selecciona un paquete</option>
                            <option value="">Básico</option>
                            <option value="">Familiar y emocionante</option>
                            <option value="">Con tiempo para deleitarse</option>
                            <option value="">Aventura y Cultura</option>
                            <option value="">Playas inolvidables</option>
                            <option value="">Especial y a tu medida</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="number" name="numero_adultos" data-constraints="@Numeric  @Required" />
                        <label class="form-label" for="contact-phone-2">Número de adultos</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" type="number" name="numero_niños" data-constraints="@Numeric  @Required" />
                        <label class="form-label" for="contact-phone-2">Número de niños</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Fecha de inicio</label>
                    <div class="form-wrap">
                        <input class="form-input" type="date" name="fecha_inicio" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Fecha de fin</label>
                    <div class="form-wrap">
                        <input class="form-input" type="date" name="fecha_fin" required />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">Mensaje</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                    </div>
                </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">
                Enviar Mensaje
            </button>
        </form>
    </div>
</section>
<script src="assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="assets/js/reservarForm.js"></script>