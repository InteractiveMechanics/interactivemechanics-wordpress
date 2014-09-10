<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="case-study-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <img class="client-logo" src="<?php the_field('client_logo'); ?>" />
                    <h3 class="text-center"><?php the_field('project_summary'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    <?php if( have_rows('key_contributions') ): ?>
    <section class="case-study-content">
        <div class="container">
            <div class="row">
                <h4 class="text-center">Our key contributions</h4>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <div class="row">
                        <?php while ( have_rows('key_contributions') ) : the_row(); ?>
                            <div class="col-sm-4">
                                <a svgicon="large">
                                    <div class="svgicon"><?php include('svgs/icon-' . get_sub_field('icon') . '.php'); ?></div>
                                <?php the_sub_field('title'); ?></a>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php if( have_rows('quote') ): while ( have_rows('quote') ) : the_row(); ?>
    <section class="full-image" style="background-image: url('<?php the_sub_field('image'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2 class="quote"><?php the_sub_field('quote'); ?></h2>
                    <?php if(get_sub_field('person')){ echo '<h5>' . get_sub_field('person') . '<small>' . get_sub_field('title') . '</small></h5>'; } ?>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('content_area') ): while ( have_rows('content_area') ) : the_row(); ?>
    <section class="case-study-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h4 class="text-center"><?php the_sub_field('title'); ?></h4>
                    <p class="lead"><?php the_sub_field('description'); ?></p>
                    <hr>
                    <?php $layout = get_sub_field('layout'); ?>
                    <?php if( $layout === 'onecol' ): ?>
                        <?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
                            <img src="<?php the_sub_field('image'); ?>" />
                            <figcaption><?php the_sub_field('caption'); ?></figcaption>
                        <?php endwhile; endif; ?>
                    <?php elseif( $layout === 'threecol' ): ?>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
                                <div class="col-sm-4">
                                    <img src="<?php the_sub_field('image'); ?>" />
                                    <figcaption><?php the_sub_field('caption'); ?></figcaption>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <section class="case-study-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <a class="btn btn-lg" href="<?php the_field('view_project'); ?>" target="_blank">View project online</a>
                    <a class="btn btn-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>case-studies">See all case studies</a>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>