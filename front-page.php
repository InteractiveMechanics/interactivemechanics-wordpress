<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1 id="hero-phrase" class="select-none"><strong id="verb">Craft</strong> better <strong id="noun">experiences</strong></h1>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <h4>We're all about building better digital products by walking in the shoes of our users.</h4>
            </div>
        </div>
    </div>
    <?php $videos = Array('sketching', 'walking', 'workshops', 'writing'); $randVid = $videos[array_rand($videos)]; ?>
    <?php if (detectmobile() == false): ?>
        <video autoplay loop="true" preload="auto" class="fadeIn">
            <source src="<?php bloginfo('template_directory'); ?>/videos/<?php echo $randVid; ?>.webm" type="video/webm">
            <source src="<?php bloginfo('template_directory'); ?>/videos/<?php echo $randVid; ?>.ogv" type="video/ogv">
            <source src="<?php bloginfo('template_directory'); ?>/videos/<?php echo $randVid; ?>.mp4" type="video/mp4">
        </video>
        <figcaption>Made with Glass</figcaption>
    <?php else: ?>
        <img src="<?php bloginfo('template_directory'); ?>/videos/<?php echo $randVid; ?>.jpg" class="video-fallback" />
    <?php endif; ?>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <h2 class="text-center">Interactive Mechanics is an interactive user experience design firm that builds <b>engaging, socially-conscious digital products</b> for any platform.</h2>
                <hr class="divider">
                <p class="lead">At Interactive Mechanics, we create dynamic and memorable websites, applications, and exhibits that delight and captivate our users. We craft web experiences that meet your organization's goals, from converting visitors into customers to sharing your mission with the world. Each one of our solutions is designed and built with quality and simplicity in mind.</p>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <h4><?php the_field('services_title'); ?></h4>
                <?php if( have_rows('services') ): ?>
                    <ul class="nav nav-tabs" role="tablist">
                        <?php $tabs = get_field('services'); $count = 0; $tabCount = count($tabs); ?>
                        <?php while ( have_rows('services') ) : the_row(); ?>
                            <li <?php if($count == 0){ echo 'class="active"'; } ?>><a href="#<?php the_sub_field('icon'); ?>" role="tab" data-toggle="tab">
                                <div class="svgicon">
                                    <?php include('svgs/icon-' . get_sub_field('icon') . '.php'); ?>
                                </div><?php the_sub_field('title'); ?>
                            </a></li>
                        <?php $count++; endwhile; ?>
                    </ul>
                    <div class="tab-content">
                        <?php $count = 0; ?>
                        <?php while ( have_rows('services') ) : the_row(); ?>
                            <div class="tab-pane fade <?php if($count == 0){ echo 'active in'; } ?>" id="<?php the_sub_field('icon'); ?>">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
                                        <h3><?php the_sub_field('description'); ?></h3>
                                        <?php if(get_sub_field('link_text')): ?>
                                            <a href="<?php the_sub_field('link'); ?>" class="arrow-link"><?php the_sub_field('link_text'); ?> <?php include('svgs/arrow.php'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php $count++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <div class="row">
            <?php
                $args = array( 'numberposts' => 3, 'post_type' => 'post', 'post_status' => 'publish');
                $recent = get_posts( $args );
                $count = 0;
                foreach ( $recent as $post ) : setup_postdata( $post ); ?>
                    <div class="col-sm-6 col-md-4 <?php if($count === 3){ echo 'hidden-sm'; } ?>">
                        <?php include('includes/inc-newsitem.php'); ?>
                    </div>
                    <?php 
                        $count++; 
                        if($count % 2 === 0){ echo '<div class="clearfix visible-sm-block"></div>'; }
                        if($count % 3 === 0){ echo '<div class="clearfix visible-md-block"></div>'; }
                    ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>