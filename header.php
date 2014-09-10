<?php 
    function detectmobile(){
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $useragents = array (
            "iPhone",
            "iPod",
            "Android",
            "blackberry9500",
            "blackberry9530",
            "blackberry9520",
            "blackberry9550",
            "blackberry9800",
            "webOS",
            "iPad"
            );
            $result = false;
        foreach ( $useragents as $useragent ) {
        if (preg_match("/".$useragent."/i",$agent)){
                $result = true;
            }
        }
        return $result;
    }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

    <title><?php wp_title( '-', true, 'right' ); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/icons/64_favicon.png" sizes="64x64" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/icons/32_favicon.png" sizes="32x32" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="//use.typekit.net/dau5muz.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>
</head>
<body class="<?php if(is_front_page() || is_404()){ echo 'homepage with-video'; } ?>">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-28789452-1', 'auto');
      ga('send', 'pageview');
    </script>
    <nav id="header-nav" class="visible-sm visible-md visible-lg">
        <div class="container">
            <a class="pull-left brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php include('svgs/logo.php'); ?>
            </a>
            <?php wp_nav_menu( array('menu' => 'primary', 'menu_class' => 'pull-right', 'container' => false )); ?>
        </div>
    </nav>
    <nav id="fixed-nav">
        <div class="container">
            <a class="pull-left brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php include('svgs/logo.php'); ?>
            </a>
            <button class="toggle-nav">
                <i class="icon-menu"></i> <span class="visible-md-inline-block visible-lg-inline-block">Menu</span>
            </button>
        </div>
    </nav>
    <main class="content fadeIn">
