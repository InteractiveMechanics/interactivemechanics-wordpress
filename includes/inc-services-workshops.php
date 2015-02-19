<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3 class="text-center">Learn a new set of skills</h4>
                <p>Our half-day, full-day, and multi-day workshops are perfect for learning technical and soft skills related to strategy, design, and development. Plus we promise to make things fun.</p>
            </div>
            <div class="col-sm-4">
                <h3 class="text-center">Get your project started</h4>
                <p>Our workshops will help you start your project on the right foot with user testing and validation, whether you have funding or you're still trying to secure it.</p>
            </div>
            <div class="col-sm-4">
                <h3 class="text-center">Improve collaboration</h4>
                <p>How often does your organization come together? We'll share our strategies with your organization to help improve cross-team collaboration.</p>
            </div>
        </div>
    </div>
</section>


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
<?php if( have_rows('services') ): ?>
<section>
    <div class="container">
        <h4 class="text-center"><?php the_field('services_title'); ?></h4>
        <?php $rows = get_field('services'); $count = 0; $rowCount = count($rows); ?>
        <?php while ( have_rows('services') ) : the_row(); ?>
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1"><h3><?php the_sub_field('title'); ?></h3></div>
                <div class="col-sm-12 col-md-5 col-md-offset-1">
                    <p class="lead"><?php the_sub_field('description'); ?></p>
                    <?php if (has_sub_field('link') && has_sub_field('link_title')): ?>
                    <a href="<?php the_sub_field('link'); ?>" class="arrow-link">
                        <?php the_sub_field('link_title'); ?>  
                    </a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-5">
                    <?php the_sub_field('descriptive_list'); ?> 
                </div>
            </div>
            <?php $count++; if($count < $rowCount): ?>
                </div>
            </section>
            <section>
                <div class="container">
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>