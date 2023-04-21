<footer>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 col-7">
          <img alt="logo" id="LogoFooter" class="img-fluid" src="<?php 
          bloginfo('url'); ?>/">
          <img alt="logo" id="Logo" class="img-fluid" src="<?php 
          //Verificar que exista compatibilidad con logos personaliazados
            if( function_exists( 'the_custom_logo' ) ) {
          //Verificar que esté configurado el logo en el personalizador de WordPress
            if(has_custom_logo()) {
          //Si está configurado, mostrar logo personalizado
            the_custom_logo();
            }
          // Sino, mostrar el logo predeterminado.
          else {
            echo get_template_directory_uri().'/img/identity/logos-para-empresas.png';
          }
        } 
        ?>" />
        </div>
      </div>
    </div>
  </footer>

  <section class="overlay-menu">
    <div class="container">
      <div class="row">
        <div class="main-menu">
          <?php wp_nav_menu(array(
						'container' => false,
						'menu_class' => '',
						'items_wrap' => '<ul>%3$s</ul>',
						'theme_location' => 'menu-top'
					));	?>
        </div>
      </div>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

  <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>

  <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>