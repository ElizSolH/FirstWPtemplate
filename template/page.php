<?php
/*
Template Name: Estándar
*/
?>
<?php get_header(); ?>
    <section class="page row justify-content-center" id="page-content">
      <div class="col-8">
        <div class="col-12 col-header">
            <div class="title-page">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="breadcrumbs col-10" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php
            if(function_exists('bcn_display'))
            {
            bcn_display();
            }?>
        </div>
        <div class="col-10 col-content">
            <div class="row">
                <div class="col-12">
                <?php the_content(); ?>
                </div>
            </div>
        </div>
      </div>
      <div class="col-4 sidebar">
      <?php get_sidebar(); ?>
      </div>
    </section>
    <?php get_footer(); ?>