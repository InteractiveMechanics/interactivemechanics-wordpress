<?php get_header(); ?>
<section class="news">
    <div class="container">
        <?php $count = 0; ?>
        <?php if (have_posts()) : 
            echo '<div class="row">';
            while (have_posts()) : the_post(); ?>
                <div class="col-sm-6 col-md-4">
                    <?php include('includes/inc-newsitem.php'); ?>
                </div>
                <?php 
                    $count++; 
                    if($count % 2 === 0){ echo '<div class="clearfix visible-sm-block"></div>'; }
                    if($count % 3 === 0){ echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; }
                ?>
        <?php endwhile; echo '</div>'; ?>
        <?php post_navigation(); ?>
        <?php else : ?>
		    <h2><?php _e('Nothing Found','html5reset'); ?></h2>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
