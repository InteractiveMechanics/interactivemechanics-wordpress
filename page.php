<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4 class="text-center"><?php the_title(); ?></h4>
                    <h3 class="text-center"><?php the_content(); ?></h3>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>	
<?php get_footer(); ?>
