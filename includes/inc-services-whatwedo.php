<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="text-center icon-mission-impact"><?php include(dirname(__FILE__) . '/../svgs/icon-mission-impact.php'); ?></div>
                <h3 class="text-center">We make an impact</h4>
                <p>We work with organizations and companies that have a strong social or cultural mission, like-minded groups that aim to put their users, visitors, and customers first.</p>
            </div>
            <div class="col-sm-4">
                <div class="text-center icon-mission-partners"><?php include(dirname(__FILE__) . '/../svgs/icon-mission-partners.php'); ?></div>
                <h3 class="text-center">Our clients are partners</h4>
                <p>We see our clients as collaborators, and we strive to create long-term, successful relationships. We're known for our ability to communicate effectively and make our clients part of our team.</p>
            </div>
            <div class="col-sm-4">
                <div class="text-center icon-mission-forward"><?php include(dirname(__FILE__) . '/../svgs/icon-mission-forward.php'); ?></div>
                <h3 class="text-center">We pay it forward</h4>
                <p>We believe in giving back: donating time and services to organizations in need, and volunteering with local and national groups like Girl Develop It, DreamIt Ventures, Corzo Center, and Coding for Kids.</p>
            </div>
        </div>
    </div>
</section>


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
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                <h4 class="text-center"><?php the_field('services_title'); ?></h4>
                <h3 class="text-center">We craft beautiful, engaging products by offering a tailored set of services, from digital design and development to custom apps and interactive installations. Great user experience is the glue that binds every project, big or small.</h3>
            </div>
        </div>
        <br class="hidden-xs">
        <?php $rows = get_field('services'); $count = 0; $rowCount = count($rows); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <?php while ( have_rows('services') ) : the_row(); ?>
                        <div class="col-sm-6 col-md-4">
                            <a svgicon>
                                <div class="svgicon"><?php include(dirname(__FILE__) . '/../svgs/icon-' . get_sub_field('icon') . '.php'); ?></div>
                            </a>
                            <h6 class="text-center"><?php the_sub_field('title'); ?></h6>
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