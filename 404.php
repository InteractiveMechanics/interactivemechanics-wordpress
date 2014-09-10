<?php get_header(); ?>
<section class="hero error">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Page not found!</h1>
                <h4>Where did we put that page... it has to be around here somewhere.</h4>
            </div>
        </div>
    </div>
    <?php if (detectmobile() == false): ?>
        <video autoplay loop="true" class="fadeIn">
            <source src="<?php bloginfo('template_directory'); ?>/videos/404.webm" type="video/webm">
            <source src="<?php bloginfo('template_directory'); ?>/videos/404.ogv" type="video/ogv">
            <source src="<?php bloginfo('template_directory'); ?>/videos/404.mp4" type="video/mp4">
        </video>
        <figcaption>Made with Glass</figcaption>
    <?php else: ?>
        <img src="<?php bloginfo('template_directory'); ?>/videos/404.jpg" class="video-fallback" />
    <?php endif; ?>
</section>
<?php get_footer(); ?>