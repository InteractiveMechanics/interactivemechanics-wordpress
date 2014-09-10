<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                    <h4 class="text-center"><?php the_title(); ?></h4>
                    <h3 class="text-center"><?php echo get_the_content(); ?></h3>
                    <hr class="divider">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                    <?php echo do_shortcode('[contact-form-7 id="40" title="Default Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>	
<?php get_footer(); ?>
