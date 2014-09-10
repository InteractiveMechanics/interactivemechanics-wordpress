<?php $size = get_field('image_size'); ?>
<a class="news-item <?php if (has_post_thumbnail()){ echo $size; } else { echo 'no-image'; } ?>" href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'original'); ?>
        <div class="image" style="background-image: url('<?php echo $image[0]; ?>');"></div>
    <?php endif; ?>
    <?php $cat = get_the_category(); ?>
    <h6 class="text-center"><?php echo $cat[0]->cat_name; ?></h6>
    <h3><?php the_title(); ?></h3>
    <?php include(dirname(__FILE__) . '/../svgs/hammer.php'); ?>
    <div class="overlay"></div>
</a>