<?php if( get_field('different') ): ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <h4 class="text-center">What sets us apart</h4>
                <?php the_field('different'); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="full-image" style="background-image: url('<?php bloginfo('template_directory'); ?>/videos/workshops.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2 class="quote">I've worked with dozens of developers and Interactive Mechanics was as friendly, reliable, and on-point as they come. They hit every project deadline and delivered an end product that exceeded our expectations.</h2>
                <h5>Owen Henkel <small>Director of Fund Development, Social Venture Fund</small></h5>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<?php if( have_rows('services') ): ?>
<section class="services">
    <div class="container">
        <h4 class="text-center"><?php the_field('services_title'); ?></h4>
        <?php $rows = get_field('services'); $count = 0; $rowCount = count($rows); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <?php while ( have_rows('services') ) : the_row(); ?>
                        <div class="col-sm-6 col-md-4">
                            <a svgicon="large">
                                <div class="svgicon"><?php include(dirname(__FILE__) . '/../svgs/icon-' . get_sub_field('icon') . '.php'); ?></div>
                            </a>
                            <h3 class="text-center"><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('description'); ?></p>
                            <?php if (has_sub_field('link') && has_sub_field('link_title')): ?>
                            <a href="<?php the_sub_field('link'); ?>" class="arrow-link">
                                <?php the_sub_field('link_title'); ?>  
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php 
                            $count++; 
                            if($count % 2 === 0){ echo '<div class="clearfix visible-sm-block"></div>'; }
                            if($count % 3 === 0){ echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; }
                        ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>