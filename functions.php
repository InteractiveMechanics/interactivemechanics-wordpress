<?php
	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
	}

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_setup() {
		load_theme_textdomain( 'html5reset', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );	
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'html5reset_setup' );
	
	// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_scripts_styles() {
		global $wp_styles;

		// Load Comments	
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	}
	add_action( 'wp_enqueue_scripts', 'html5reset_scripts_styles' );
	
	function filter_wp_title( $title ) {
    	global $page, $paged;
    
    	if ( is_feed() )
    		return $title;
    
    	$site_description = get_bloginfo( 'description' );
    
    	$filtered_title = $title . get_bloginfo( 'name' );
    	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
    	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';
    
    	return $filtered_title;
    }
    add_filter( 'wp_title', 'filter_wp_title' );

	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				//wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ), false);
				//wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	//	function removeHeadLinks() {
	//    	remove_action('wp_head', 'rsd_link');
	//    	remove_action('wp_head', 'wlwmanifest_link');
	//    }
	//    add_action('init', 'removeHeadLinks');

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );

	// Widgets
	if ( function_exists('register_sidebar' )) {
		function html5reset_widgets_init() {
			register_sidebar( array(
				'name'          => __( 'Sidebar Widgets', 'html5reset' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'html5reset_widgets_init' );
	}

	// Navigation - update coming from twentythirteen
	function post_navigation() {
		echo '<div class="navigation">';
		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Older Entries').'</div>';
		echo '	<div class="prev-posts">'.get_previous_posts_link('Newer Entries &raquo;').'</div>';
		echo '</div>';
	}

	add_action( 'init', 'register_cpt_case_study' );
	function register_cpt_case_study() {
	    $labels = array( 
	        'name' => _x( 'Case Studies', 'case-study' ),
	        'singular_name' => _x( 'Case Study', 'case-study' ),
	        'add_new' => _x( 'Add New', 'case-study' ),
	        'add_new_item' => _x( 'Add New Case Study', 'case-study' ),
	        'edit_item' => _x( 'Edit Case Study', 'case-study' ),
	        'new_item' => _x( 'New Case Study', 'case-study' ),
	        'view_item' => _x( 'View Case Study', 'case-study' ),
	        'search_items' => _x( 'Search Case Studies', 'case-study' ),
	        'not_found' => _x( 'No case studies found', 'case-study' ),
	        'not_found_in_trash' => _x( 'No case studies found in Trash', 'case-study' ),
	        'parent_item_colon' => _x( 'Parent Case Study:', 'case-study' ),
	        'menu_name' => _x( 'Case Studies', 'case-study' ),
	    );
	    $args = array( 
	        'labels' => $labels,
	        'hierarchical' => false,
	        'description' => 'All case studies',
	        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	        'taxonomies' => array( '' ),
	        'public' => true,
	        'show_ui' => true,
	        'show_in_menu' => true,
	        'menu_position' => 5,
	        
	        'show_in_nav_menus' => true,
	        'publicly_queryable' => true,
	        'exclude_from_search' => false,
	        'has_archive' => true,
	        'query_var' => true,
	        'can_export' => true,
	        'rewrite' => array( 'slug' => 'case-studies', 'with_front' => false ),
	        'capability_type' => 'page'
	    );
	    register_post_type( 'case-study', $args );
	}
?>
