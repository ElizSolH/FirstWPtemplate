<?php get_header(); ?>
<div class="header-page blog">
        <div class="row">
            <div class="col-12 col-sm-9 col-md-9 box-header">
                <h1 class="title-page"><?php the_title();?></h1>
            </div>

        </div>

    </div>
    <section class="page-cat row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-12 col-sm-4 col-entry">
            <div class="row justify-content-center entry-page">
                <div class="col-12 image-entry">
                    <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?></a>
                </div>
                <div class="col-12 title-entry">
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                </div>
                <div class="post-date">
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                <div class="col-12 desc-entry">
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="col-lg-8 col-md-10 col-12 more-entry">
                    <a href="<?php the_permalink();?>" class="text-center">Conoce más >></a>
                </div>
            </div>
        </div>
        <?php endwhile; else: ?>
            <div class="col-12 col-sm-4 col-entry">
            <div class="row justify-content-center entry-page">
                <div class="col-12 title-entry">
                    <a href="#">El Post que buscas no existe</a>
                </div>
                <div class="col-12 desc-entry">
                    <p>Revisa que la URL que hayas ingresado sea correcta</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>

<section class="row paginacion">
    <div class="col-md-12">
    <?php wp_pagenavi(); ?>
    </div>
</section>
<?php get_footer(); ?>