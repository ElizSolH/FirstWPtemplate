<?php get_header(); ?>
<div class="header-page head-404" style="background-image: url('<?php bloginfo('template_url'); ?>/img/identity/fondo.bmp');">
        <div class="row">
            <div class="col-12 col-sm-9 col-md-9 box-header">
                <h1 class="title-page">Error 404</h1>
            </div>
        </div>
    </div>
    <div class="row page-404">
        <section class="content-404 col-12">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h3>¡Ups! La página que buscas no existe.</h3>
                    <p>Es probable que la página que buscas haya sido eliminada u oculta temporalmente. Te recomendamos revisar la dirección URL.</p>
                </div>
                <div class="col-4">
                    <img src="<?php bloginfo('template_url'); ?>/img/identity/404.png" class="img-fluid w-100" alt="404">
                </div>
            </div>
        </section>

    </div>
    <?php get_footer(); ?>