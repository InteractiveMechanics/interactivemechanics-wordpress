<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
                    <h4 class="text-center"><?php the_title(); ?></h4>
                    <h3 class="text-center"><?php echo get_the_content(); ?></h3>
                    <hr class="divider">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                    <?php echo do_shortcode('[contact-form-7 id="40" title="Default Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-3">
                    <h3>Come visit us.</h3>
                    <p>
                        <strong>CultureWorks</strong><br/>
                        The Philadelphia Building (<a href="https://www.google.com/maps/dir//Culture+Works,+1315+Walnut+St+Suite+320,+Philadelphia,+PA+19107/@39.949254,-75.162938,17z/data=!4m12!1m3!3m2!1s0x89c6c62f7e747e03:0x7009a9bbce52d492!2sCulture+Works!4m7!1m0!1m5!1m1!1s0x89c6c62f7e747e03:0x7009a9bbce52d492!2m2!1d-75.162938!2d39.949254" target="_blank">map</a>)<br/>
                        1315 Walnut Street, Suite 320<br/>
                        Philadelphia, PA 19107
                    </p>
                </div>
                <div class="col-sm-3">
                    <h3>Get in touch!</h3>
                    <p>
                        <a href="tel:7324036079" target="_blank" style="color: #6d6e70;">(732) 403-6079</a><br/>
                        <a href="mailto:hello@interactivemechanics.com" target="_blank">hello@interactivemechanics.com</a><br/>
                        <a href="https://twitter.com/interactivemech" target="_blank">@interactivemech</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>	
<?php get_footer(); ?>
