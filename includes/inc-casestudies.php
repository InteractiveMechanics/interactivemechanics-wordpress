<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'original'); ?>
<a class="case-study" href="<?php the_permalink() ?>">
    <div class="image" style="background-image: url('<?php echo $image[0]; ?>');"></div>
    <h6 class="text-center"><?php the_field('client_name'); ?></h6>
    <h3 class="text-center"><?php the_title(); ?></h3>
    <?php include(dirname(__FILE__) . '/../svgs/arrow.php'); ?>
    <div class="overlay"></div>
</a>
