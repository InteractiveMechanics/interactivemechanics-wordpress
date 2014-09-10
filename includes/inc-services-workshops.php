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