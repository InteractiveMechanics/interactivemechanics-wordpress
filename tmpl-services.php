<?php /* Template Name: Services Template */ ?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php if( have_rows('header') ): ?>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                    <?php while ( have_rows('header') ) : the_row(); ?>
                        <h4 class="text-center"><?php the_sub_field('title'); ?></h4>
                        <h3 class="text-center"><?php the_sub_field('subtitle'); ?></h3>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php if( have_rows('video') ): ?>
    <section class="full-image full-video">
        <?php while ( have_rows('video') ) : the_row(); ?>
            <div class="container">
                <h1><?php the_sub_field('title'); ?></h1>
                <?php include('svgs/hammer.php'); ?>
            </div>
            <?php if (detectmobile() == false): ?>
                <video autoplay preload="auto" loop="true" class="fadeIn">
                    <source src="<?php bloginfo('template_directory'); ?>/videos/<?php the_sub_field('video'); ?>.webm" type="video/webm">
                    <source src="<?php bloginfo('template_directory'); ?>/videos/<?php the_sub_field('video'); ?>.ogv" type="video/ogv">
                    <source src="<?php bloginfo('template_directory'); ?>/videos/<?php the_sub_field('video'); ?>.mp4" type="video/mp4">
                </video>
                <figcaption>Made with Glass</figcaption>
            <?php else: ?>
                <img src="<?php bloginfo('template_directory'); ?>/videos/<?php the_sub_field('video'); ?>.jpg" class="video-fallback" />
            <?php endif; ?>
        <?php endwhile; ?>
    </section>
    <?php endif; ?>
    <?php if( $post->post_name === 'what-we-do' ){
            include('includes/inc-services-whatwedo.php');
        } elseif( $post->post_name === 'workshops' ){
            include('includes/inc-services-workshops.php');
        }
    ?>
<?php endwhile; endif; ?>	
<?php get_footer(); ?>
