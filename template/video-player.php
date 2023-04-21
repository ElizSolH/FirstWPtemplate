<?php
/*
Template Name: Video Player
*/
?>
<?php get_header(); ?>
<section class="page row justify-content-center" id="page-video">
    <div class="col-12 col-header">
      <div class="title-page row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-8">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-10">
    <?php the_content(); ?>
    </div>
</section>
    <!--contact-box------------->
    <section class="comentarios col-sm-12">
        <?php if ( !function_exists('dynamic_sidebar') OR !dynamic_sidebar('Footer entry') ) : endif; ?>
	</section>
  <?php get_footer(); ?>