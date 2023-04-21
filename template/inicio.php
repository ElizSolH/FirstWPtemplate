<?php
/*
Template Name: Inicio
*/
?>
<?php get_header(); ?>
  <div id="top-container">
    <div class="top-overlay"></div>
    <div class="top-content">
      <div class="inner">
        <div class="content-text">
          <p>Próximamente...</p>
          <h2>School Voca-On</h2>
        </div>
        <div class="scroll-icon">
          <a class="scrollTo" data-scrollTo="series" href="#"><img src="<?php bloginfo('template_url'); ?>/img/scroll-icon.png" alt=""></a>
        </div>
      </div>
    </div>
    <video autoplay loop muted>
      <source src="<?php bloginfo('template_url'); ?>/video/prev.mp4" type="video/mp4" />
    </video>
  </div>


  <div class="grid-series" id="series">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">PROYECTOS</h2>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="series-item">
            <div class="thumb">
              <a href="https://okashi-melodii.com/?page_id=2167">
                <div class="hover-effect">
                  <div class="hover-content">
                    <h5>School Voca-On</h5>
                    <p>Próximamente...</p>
                  </div>
                </div>
              </a>
              <div class="image">
                <img src="<?php bloginfo('template_url'); ?>/img/SVO/svo-first.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="series-item">
            <div class="thumb">
              <a href="#">
                <div class="hover-effect">
                  <div class="hover-content">
                    <h5>Virtual Life</h5>
                    <p>En desarrollo...</p>
                  </div>
                </div>
              </a>
              <div class="image">
                <img src="<?php bloginfo('template_url'); ?>/img/identity/working.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="series-item">
            <div class="thumb">
              <a href="#">
                <div class="hover-effect">
                  <div class="hover-content">
                    <h5>Sin título</h5>
                    <p>En desarrollo...</p>
                  </div>
                </div>
              </a>
              <div class="image">
                <img src="<?php bloginfo('template_url'); ?>/img/identity/working.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="contact">
    <!--contact-box------------->
    <div class="contact-box">
      <!--heading---------->
      <div class="c-heading">
        <h1>Contáctanos</h1>
        <p>¿Dudas? ¿Comentarios? ¿Quieres pertenecer al equipo? Escríbenos y nos pondremos en contacto contigo.</p>
      </div>
      <!--inputs------------------>
      <div class="c-inputs">
      <?php if ( !function_exists('dynamic_sidebar') OR !dynamic_sidebar('Inicio') ) : endif; ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>