<?php get_header(); ?>
<div class="header-page blog-entry">
        <div class="row">
            <div class="col-12 col-sm-9 col-md-9 box-header">
                <h1 class="title-page">Blog</h1>
            </div>
        </div>
    </div>
    <div class="row single-page">
        <section class="col-md-8">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php
            if(function_exists('bcn_display'))
            {
            bcn_display();
            }?>
            </div>
            <div class="single-post">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post-image">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                </div>
                <div class="post-content">
                    <div class="post-title">
                        <h2><a class="title-link"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="post-date">
                        <p><?php the_date(); ?></p>
                    </div>
                    <div class="post-categories">
                        <?php the_category();?>
                    </div>
                    <div class="post-text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <section class="comentarios col-sm-12">
                    <?php if ( !function_exists('dynamic_sidebar') OR !dynamic_sidebar('Footer entry') ) : endif; ?>
				</section>
                    <?php endwhile; else: ?>
            <div class="single-post">
                <div class="post-content">
                    <div class="post-title">
                        <h2><a class="title-link">El Post que buscas no existe</a></h2>
                    </div>
                    <div class="post-text">
                        <p>
                        Revisa que la URL que hayas ingresado sea correcta
                        </p>
                    </div>
                </div>

            </div>
            <?php endif; ?>
            
            <div class="row paginacion">
				<div class="col-md-12">
					<div class="pagination"><?php wp_pagenavi(); ?></div>
				</div>
            </div>
        </section>
            <?php get_sidebar(); ?>

    </div>
    <?php get_footer(); ?>