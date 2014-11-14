    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php include('svgs/logo.php'); ?>
                    </a>
                    <p>Copyright &copy; <?php echo date("Y"); ?>, Interactive Mechanics, LLC<br/>
                    Proudly built in PHL @ <a href="http://www.cultureworksphila.org/" target="_blank">Cultureworks</a></p>
                </div>
            </div>
            <ul class="list-inline text-center">
                <li><a href="tel:7324036079" target="_blank">(732) 403-6079</a></li>
                <li><a href="mailto:hello@interactivemechanics.com" target="_blank">hello@interactivemechanics.com</a></li>
                <li><a href="http://www.twitter.com/interactivemech" target="_blank">@interactivemech</a></li>
            </ul>
        </div>
    </footer>

    <dialog id="nav-overlay" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                    <nav>
                        <?php wp_nav_menu( array(
                            'menu' => 'primary', 
                            'container' => false,
                            'link_after' => 
                                '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="arrow" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 69.07 24.54" enable-background="new 0 0 69.07 24.54" xml:space="preserve">
                                    <line fill="none" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.27" x2="65.82" y2="12.27"/>
                                    <polyline fill="none" stroke-width="3" stroke-miterlimit="10" points="54.96,0.98 65.97,12.27 54.96,23.56"/>
                                </svg>'
                        )); ?>

                    </nav>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </dialog>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/prism.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>

    <?php wp_footer(); ?>
</body>
</html>