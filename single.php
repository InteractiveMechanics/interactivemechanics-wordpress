<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $category = get_the_category(); $postId = $post->ID; ?>
    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <h5 class="text-center">
                        <div class="thumb"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></div>
                        By <b><?php the_author(); ?></b> on <?php the_date(); ?>
                    </h5>
                    <hr class="divider">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php
    $args = array( 
        'numberposts' => 3, 
        'post_type' => 'post', 
        'post_status' => 'publish', 
        'category_name' => $category[0]->slug, 
        'exclude' => $postId
    );
    $recent = get_posts( $args );
    if($recent):
?>
    <section class="news">
        <div class="container">
            <div class="row">
                <?php $count = 0; foreach ( $recent as $post ) : setup_postdata( $post ); ?>
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
<?php endif; ?>
	
<?php get_footer(); ?>