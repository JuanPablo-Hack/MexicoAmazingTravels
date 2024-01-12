<section class="section section-sm section-fluid bg-default">
    <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
        <div class="owl-item">
            <article class="thumbnail thumbnail-mary" onclick="cambiar_destino()">
                <div class="thumbnail-mary-figure">
                    <img src="assets/images/oaxaca_destinos.jpg" alt="" width="420px" height="250px" />
                </div>
                <div class="thumbnail-mary-caption">
                </div>
            </article>
            <div class="thumbnail-mary-description">
                <h5 class="thumbnail-mary-project">
                    <a href="#">Oaxaca</a>
                </h5>
                <span class="thumbnail-mary-decor"></span>
                <h5 class="thumbnail-mary-time"></h5>
            </div>
        </div>
       
    </div>
</section>
<script>
    const cambiar_destino = () => {
        setTimeout(function() {
            window.location.href = "paquetes.php?destino=chiapas";
        }, 0);
    };
</script>