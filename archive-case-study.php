<?php get_header(); ?>
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h4 class="text-center">Case Studies</h4>
                <h3 class="text-center">Our projects balance technology, creative design, and interactivity for a range of platforms, devices, and audiences.</h3>
            </div>
        </div>
        <br><br>
        <?php $query = new WP_Query(array(
            'has_password' => false,
            'post_type' => 'case-study'
        )); ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>        
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <?php include('includes/inc-casestudies.php'); ?>
                </div>
            </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>
