<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Filters and Actions
 */


/**
 * http://codex.wordpress.org/Content_Width
 */
if ( ! isset($content_width)) {
    $content_width = 1200;
}


/**
 * Sync common Theme Settings and Customizer options db values
 * @internal
 */
class Jevelin_Sync_Customizer_Options {
    public static function init() {
        add_action('customize_save_after', array(__CLASS__, '_action_after_customizer_save'));
        add_action('fw_settings_form_saved', array(__CLASS__, '_action_after_settings_save'));
        add_action('fw_settings_form_reset', array(__CLASS__, '_action_after_settings_save'));

        /* Callback when lattest settings is not registered */
        add_action('customize_save_after', array(__CLASS__, '_action_after_customizer_save_delay'));
        add_action('customize_save_after_delay','Jevelin_Sync_Customizer_Options::_action_after_customizer_save', 5 );
    }

    /**
     * If a customizer option also exists in settings options, copy its value to settings option value
     */

     public static function _action_after_customizer_save_delay(){
         wp_schedule_single_event(time() + 0, 'customize_save_after_delay');
     }


    public static function _action_after_customizer_save()
    {
        delete_transient( 'jevelin_css' );
        $settings_options = fw_extract_only_options(fw()->theme->get_settings_options());
        //error_log( print_r( $settings_options, true ) );

        foreach (
            array_intersect_key(
                fw_extract_only_options(fw()->theme->get_customizer_options()),
                $settings_options
            )
            as $option_id => $option
        ) {
            if ($option['type'] === $settings_options[$option_id]['type']) {
                fw_set_db_settings_option(
                    $option_id, fw_get_db_customizer_option($option_id)
                );
            }
        }
    }

    /**
     * If a settings option also exists in customizer options, copy its value to customizer option value
     */
    public static function _action_after_settings_save()
    {
        delete_transient( 'jevelin_css' );
        $customizer_options = fw_extract_only_options(fw()->theme->get_customizer_options());

        foreach (
            array_intersect_key(
                fw_extract_only_options(fw()->theme->get_settings_options()),
                $customizer_options
            )
            as $option_id => $option
        ) {
            if ($option['type'] === $customizer_options[$option_id]['type']) {
                fw_set_db_customizer_option(
                    $option_id, fw_get_db_settings_option($option_id)
                );
            }
        }
    }
}
Jevelin_Sync_Customizer_Options::init();




/**
 * Load Custom Icon Option
 */
if ( ! function_exists( 'jevelin_include_custom_option_types' ) ) :
    function jevelin_include_custom_option_types() {
        if (is_admin()) {
            require_once get_template_directory() . '/inc/includes/option-types/new-icon/class-fw-option-type-new-icon.php';
            // and all other option types
        }
    }
    add_action('fw_option_types_init', 'jevelin_include_custom_option_types');
endif;


/**
 * General Setup
 */

if ( ! function_exists( 'jevelin_setup' ) ) :
	add_action('after_setup_theme', 'jevelin_setup');
	function jevelin_setup(){

		/* Translations */
	    load_theme_textdomain( 'jevelin', get_template_directory() . '/languages' );

		if ( is_child_theme() ) {
			load_child_theme_textdomain( 'jevelin', get_stylesheet_directory() . '/languages' );
		}

	    /* Add WooCommerce support */
	    add_theme_support( 'woocommerce' );

		/* Add WooCommerce product image lightbox support */
        if( jevelin_option( 'wc_lightbox', 'jevelin' ) == 'woocommerce' ) :
		    add_theme_support( 'wc-product-gallery-lightbox' );
        endif;

	}
endif;
function jevelin_addnew_query_vars($vars){
    $vars[] = 'blogcategory';
    return $vars;
}
add_filter( 'query_vars', 'jevelin_addnew_query_vars', 10, 1 );


/* Removes WooCommerce select library */
add_action( 'wp_enqueue_scripts', 'jevelin_woocommerce_remove_select2', 100 );
function jevelin_woocommerce_remove_select2() {
    // Deregisters 3th party WordPress plugin script, which isn't WordPress core functionality
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );
        wp_dequeue_script( 'select2');
        wp_deregister_script('select2');
    }
}


if ( ! function_exists( 'jevelin_general_setup' ) ) :
	function jevelin_general_setup() {

        if( class_exists( 'WooCommerce' ) ) :
            /* Woo items per page */
            add_filter( 'loop_shop_per_page', create_function( '$cols', 'return '.jevelin_option( 'wc_items', 20 ).';' ), 20 );

            /* Woo remove sorting */
            if( jevelin_option( 'wc_sort' ) == 0 ) :
                remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
            endif;

            /* Woo loop items */
            add_filter( 'loop_shop_columns', 'jevelin_wc_loop_shop_columns', 1, 10 );

            /* Woo related products */
            if( jevelin_option( 'wc_related' ) == 0 ) :
                add_filter('woocommerce_related_products_args', 'jevelin_wc_remove_related_products', 10);
            endif;
        endif;


		/* Add RSS feed links to <head> for posts and comments */
		add_theme_support( 'automatic-feed-links' );

		/* Enable support for Post Thumbnails, and declare two sizes */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 660, 420, true );
		add_image_size( 'jevelin-portrait', 420, 660, true );
		add_image_size( 'jevelin-square', 660, 660, true );
		add_image_size( 'jevelin-landscape-large', 1200, 675, true );

		/* Other init */
		add_theme_support( 'title-tag' );
		//add_theme_support( 'custom-background' );
		//add_theme_support( 'custom-header' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		/* Enable support for Post Formats */
		add_theme_support( 'post-formats', array(
			'gallery',
			'quote',
			'link',
			'video',
			'audio',
		) );

		/* Enable support for background color */
        $args = array(
        	'default-color' => jevelin_option('styling_body_background'),
        );
        add_theme_support( 'custom-background', $args );

		/* Editor styling */

	}
	add_action( 'init', 'jevelin_general_setup' );
endif;


/**
 * Extend the default WordPress body classes
 */
if ( ! function_exists( 'jevelin_filter_theme_body_classes' ) ) :
	function jevelin_filter_theme_body_classes( $classes ) {

		if ( is_singular() && ! is_front_page() ) {
			$classes[] = 'singular';
		}

		$white_borders = ( esc_attr( jevelin_option('white_borders', false)) == true ) ? 'page-white-borders' : '';
        $white_borders_only_on_pages = jevelin_option('white_borders_only_on_pages', false);
		if( $white_borders ) {
            if( $white_borders_only_on_pages == false || is_page() ) {
			    $classes[] = $white_borders;
            }
		}

		$ipad_navigation = ( jevelin_option('ipad_landscape_full_navigation', false) == true ) ? 'sh-ipad-landscape-full-navigation' : '';
		if( $ipad_navigation ) {
			$classes[] = $ipad_navigation;
		}

		$header_sticky = ( jevelin_option( 'header_sticky', true ) == true  ) ? 'sh-body-header-sticky' : '';
		if( $header_sticky ) {
			$classes[] = $header_sticky;
		}

		$footer_parallax = ( jevelin_option( 'footer_parallax', 'off' ) == 'on'  ) ? 'sh-footer-parallax' : '';
		if( $footer_parallax ) {
			$classes[] = $footer_parallax;
		}

        $blog_style = ( jevelin_option( 'blog_style', 'style1' ) == 'style2' ) ? 'sh-blog-style2' : '';
		if( $blog_style ) {
			$classes[] = $blog_style;
		}

        $header_layout = jevelin_header_layout();
		if( $header_layout == 'left-1' || $header_layout == 'left-2' ) {
			$classes[] = 'header-in-left-side';
		}

		return $classes;
	}
	add_filter( 'body_class', 'jevelin_filter_theme_body_classes' );
endif;


/**
 * Extend the default WordPress post classes
 */
if ( ! function_exists( 'jevelin_filter_theme_body_classes' ) ) :
	function jevelin_post_classes( $classes ) {
		if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) {
			$classes[] = 'has-post-thumbnail';
		}
		return $classes;
	}

	add_filter( 'post_class', 'jevelin_filter_theme_body_classes' );
endif;


/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 */
if ( ! function_exists( 'jevelin_wp_title' ) ) :
	function jevelin_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() ) {
			return $title;
		}

		// Add the site name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}

		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 ) {
			$title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'jevelin' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'jevelin_wp_title', 10, 2 );
endif;


/**
 * Theme Customizer support
 */
{

	/**
	 * Sanitize the Featured Content layout value.
	 *
	 * @param string $layout Layout type.
	 *
	 * @return string Filtered layout type (grid|slider).
	 * @internal
	 */
	function jevelin_fw_theme_sanitize_layout( $layout ) {
		if ( ! in_array( $layout, array( 'grid', 'slider' ) ) ) {
			$layout = 'grid';
		}

		return $layout;
	}

	/**
	 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
	 * @internal
	 */
	function jevelin_action_theme_customize_preview_js() {
		wp_enqueue_script(
			'jevelin-theme-customizer',
			get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ),
			'1.0',
			true
		);
	}

	add_action( 'customize_preview_init', 'jevelin_action_theme_customize_preview_js' );
}


/**
 * Theme Customizer support
 */
if ( defined( 'FW' ) ):
	/**
	 * Display current submitted FW_Form errors
	 * @return array
	 */
	if ( ! function_exists( 'jevelin_display_form_errors' ) ):
		function jevelin_display_form_errors() {
			$form = FW_Form::get_submitted();

			if ( ! $form || $form->is_valid() ) {
				return;
			}

			wp_enqueue_script(
				'jevelin-show-form-errors',
				get_template_directory_uri() . '/js/form-errors.js',
				array( 'jquery' ),
				'1.0',
				true
			);

			wp_localize_script( 'jevelin-show-form-errors', '_localized_form_errors', array(
				'errors'  => $form->get_errors(),
				'form_id' => $form->get_id()
			) );
		}
	endif;
	add_action('wp_enqueue_scripts', 'jevelin_display_form_errors');
endif;


/**
 * Register widget areas.
 */
if ( ! function_exists( 'jevelin_theme_widgets' ) ) :
	function jevelin_theme_widgets() {
		register_sidebar( array(
			'name'          => esc_html__( 'Blog Widgets', 'jevelin' ),
			'id'            => 'blog-widgets',
			'description'   => esc_html__( 'Appears in the blog page sidebar.', 'jevelin' ),
			'before_widget' => '<div id="%1$s" class="widget-item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Page Widgets', 'jevelin' ),
			'id'            => 'page-widgets',
			'description'   => esc_html__( 'Appears in the page sidebar if widgets are added, otherwise footer widgets are used.', 'jevelin' ),
			'before_widget' => '<div id="%1$s" class="widget-item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widgets', 'jevelin' ),
			'id'            => 'footer_widgets',
			'description'   => esc_html__( 'Appears in the page footer.', 'jevelin' ),
			'before_widget' => '<div id="%1$s" class="widget-item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'WooCommerce Widgets', 'jevelin' ),
			'id'            => 'woocommerce-widgets',
			'description'   => esc_html__( 'Appears in the shop page sidebar.', 'jevelin' ),
			'before_widget' => '<div id="%1$s" class="widget-item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	add_action( 'widgets_init', 'jevelin_theme_widgets' );
endif;


/**
 * Display current submitted FW_Form errors
 */
if ( defined( 'FW' ) && !function_exists( 'jevelin_form_errors' ) ):
	function jevelin_form_errors() {
		$form = FW_Form::get_submitted();

		if ( ! $form || $form->is_valid() ) {
			return;
		}

		wp_enqueue_script(
			'jevelin-theme-show-form-errors',
			get_template_directory_uri() . '/js/form-errors.js',
			array( 'jquery' ),
			'1.0',
			true
		);

		wp_localize_script( 'fw-theme-show-form-errors', '_localized_form_errors', array(
			'errors'  => $form->get_errors(),
			'form_id' => $form->get_id()
		) );
	}
	add_action('wp_enqueue_scripts', 'jevelin_form_errors');
endif;


/**
 * Jevelin Remote Demos
 */
if ( ! function_exists( 'jevelin_remote_demos' ) ) :
	function jevelin_remote_demos($demos) {
	    $demos_array = array(
	        'basic-full' => array(
	            'title' => __('Basic (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/basic.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/',
	        ),
	        'wedding-full' => array(
	            'title' => __('Wedding (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/wedding.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/wedding/',
	        ),
	        'boxed-full' => array(
	            'title' => __('Boxed (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/boxed.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/boxed/',
	        ),
	        'corporate-full' => array(
	            'title' => __('Corporate (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/corporate.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/corporate/',
	        ),
	        'landing-full' => array(
	            'title' => __('Landing (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/landing.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/landing/',
	        ),
	        'landing2-full' => array(
	            'title' => __('Landing 2 (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/landing2.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/landing2/',
	        ),
            'shop-full' => array(
	            'title' => __('Shop (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/shop.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/shop1/',
	        ),
            'blog-full' => array(
	            'title' => __('Blog (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/blog.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/blog1/',
	        ),
            'portfolio-full' => array(
	            'title' => __('Portfolio (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/portfolio.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/portfolio1/',
	        ),
            'startup-full' => array(
	            'title' => __('Startup (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/startup.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/startup/',
	        ),
            'autospot-full' => array(
	            'title' => __('Autospot (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/autospot.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/autospot/',
	        ),
            'construction-full' => array(
	            'title' => __('Construction (full)', 'jevelin'),
	            'screenshot' => 'http://remote.demos.shufflehound.com/jevelin/files/construction.jpg',
	            'preview_link' => 'http://jevelin.shufflehound.com/construction/',
	        ),
	    );

	    $download_url = 'http://remote.demos.shufflehound.com/jevelin/';

	    foreach ($demos_array as $id => $data) {
	        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
	            'url' => $download_url,
	            'file_id' => $id,
	        ));
	        $demo->set_title($data['title']);
	        $demo->set_screenshot($data['screenshot']);
	        $demo->set_preview_link($data['preview_link']);

	        $demos[ $demo->get_id() ] = $demo;

	        unset($demo);
	    }

	    return $demos;
	}
	add_filter('fw:ext:backups-demo:demos', 'jevelin_remote_demos');
endif;


/**
 * Jevelin demo installation update
 */
 add_filter(
     'fw:ext:backups:add-restore-task:image-sizes-restore',
     'jevelin_fw_backups_disable_image_sizes_restore',
     10, 2
 );
 function jevelin_fw_backups_disable_image_sizes_restore(
     $do, FW_Ext_Backups_Task_Collection $collection
 ) {
     if (
         $collection->get_id() === 'demo-content-install'
         &&
         ($task = $collection->get_task('demo:demo-download'))
         &&
         ($task_args = $task->get_args())
         &&
         isset($task_args['demo_id'])
         &&
         ( strpos($task_args['demo_id'], 'demo-local-') !== false )
     ) {
         $do = false;
     }

     return $do;
 }


/**
 * Woocommerce - change image sizes
 */
if( !function_exists('jevelin_woocommerce_image_sizes') ) :
    function jevelin_woocommerce_image_sizes() {
        global $pagenow;

        if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
            return;
        }
        $catalog = array(
            'width'     => '660',
            'height'    => '660',
            'crop'      => 1
        );
        $single = array(
            'width'     => '1024',
            'height'    => '1024',
            'crop'      => 0
        );
        $thumbnail = array(
            'width'     => '150',
            'height'    => '150',
            'crop'      => 1
        );

        // Image sizes
        update_option( 'shop_catalog_image_size', $catalog );
        update_option( 'shop_single_image_size', $single );
        update_option( 'shop_thumbnail_image_size', $thumbnail );
    }
    add_action( 'after_switch_theme', 'jevelin_woocommerce_image_sizes', 1 );
endif;


/**
 * Text dropcaps
 */
if ( ! function_exists( 'jevelin_editor_dropcaps' ) ) :
	add_filter( 'mce_buttons_2', 'jevelin_editor_dropcaps' );
	function jevelin_editor_dropcaps( $buttons ) {

	    array_unshift( $buttons, 'styleselect' );
	    return $buttons;

	}
endif;


/**
 * Text dropcaps init
 */
if ( ! function_exists( 'jevelin_editor_dropcaps_init' ) ) :
	add_filter( 'tiny_mce_before_init', 'jevelin_editor_dropcaps_init' );
	function jevelin_editor_dropcaps_init( $settings ) {

	    $style_formats = array(
	        array(
	            'title' => esc_html__('Dropcaps','jevelin'),
	            'inline' => 'span',
	            'classes' => 'sh-dropcaps',
	            'styles' => array(
	                'fontSize' => '18px',
	            )
	        ),

	        array(
	            'title' => esc_html__('Dropcaps Full Square','jevelin'),
	            'inline' => 'span',
	            'classes' => 'sh-dropcaps-full-square',
                'styles' => array(
                    'fontSize' => '18px',
                )
	        ),

            array(
                'title' => esc_html__('Dropcaps Full Square With Border', 'jevelin'),
                'inline' => 'span',
                'classes' => 'sh-dropcaps-full-square-border',
                'styles' => array(
                    'fontSize' => '18px',
                )
            ),

            array(
                'title' => esc_html__('Dropcaps Full Square With Tale', 'jevelin'),
                'inline' => 'span',
                'classes' => 'sh-dropcaps-full-square-tale',
                'styles' => array(
                    'fontSize' => '18px',
                )
            ),

            array(
                'title' => esc_html__('Dropcaps Square With 1px Borde', 'jevelin'),
                'inline' => 'span',
                'classes' => 'sh-dropcaps-square-border',
                'styles' => array(
                    'fontSize' => '18px',
                )
            ),

            array(
                'title' => esc_html__('Dropcaps Square With 2px Borde', 'jevelin'),
                'inline' => 'span',
                'classes' => 'sh-dropcaps-square-border2',
                'styles' => array(
                    'fontSize' => '18px',
                )
            ),

            array(
                'title' => esc_html__('Dropcaps Cricle', 'jevelin'),
                'inline' => 'span',
                'classes' => 'sh-dropcaps-circle',
                'styles' => array(
                    'fontSize' => '18px',
                )
            ),

	    );

	    $settings['style_formats'] = json_encode( $style_formats );
	    return $settings;

	}
endif;


/**
 * Text highlight
 */
if ( ! function_exists( 'jevelin_editor_text_background' ) ) :
	add_filter( 'mce_buttons_2', 'jevelin_editor_text_background' );
	function jevelin_editor_text_background( $buttons ){
	    array_splice( $buttons, 2, 0, 'backcolor' );
        array_splice( $buttons, 1, 0, 'fontsizeselect' );
	    return $buttons;
	}
endif;


function customize_text_sizes($initArray){
    $initArray['fontsize_formats'] = '10px 12px 13px 14px 16px 18px 21px 24px 30px 36px 40px 48px 60px';
    return $initArray;
}
add_filter('tiny_mce_before_init', 'customize_text_sizes');


/**
 * Get Host
 */
function jevelin_gethost($Address) {
   $parseUrl = parse_url(trim($Address));
   return trim($parseUrl['host'] ? $parseUrl['host'] : array_shift(explode('/', $parseUrl['path'], 2)));
}


/**
 * Allowed_html
 */
function jevelin_allowed_html() {
    return array(
        'a' => array(
            'href' => array(),
            'title' => array()
        ),
        'br' => array(),
        'i' => array(),
        'style' => array(),
        'b' => array(
            'data' => array()
        ),
    );
}


/**
 * Allow iframe
 */
function jevelin_allow_iframe_tags( $multisite_tags ){
    $multisite_tags['iframe'] = array(
        'src' => true,
        'width' => true,
        'height' => true,
        'align' => true,
        'class' => true,
        'name' => true,
        'id' => true,
        'frameborder' => true,
        'seamless' => true,
        'srcdoc' => true,
        'sandbox' => true,
        'allowfullscreen' => true
    );
    return $multisite_tags;
}


function jevelin_allowed_html_form() {
    return array(
        'p' => array(),
        'sup' => array(),
        'div' => array(
            'class' => array(),
            'id' => array(),
            'style' => array()
        ),
        'form' => array(
            'data-fw-form-id' => array(),
            'data-fw-ext-forms-type' => array(),
            'id' => array(),
            'class' => array(),
            'action' => array(),
            'method' => array(),
            'style' => array(),
        ),
        'label' => array(
            'for' => array(),
        ),
        'input' => array(
            'type' => array(),
            'name' => array(),
            'placeholder' => array(),
            'value' => array(),
            'id' => array(),
            'class' => array(),
            'required' => array(),
        ),
        'select' => array(
            'type' => array(),
            'name' => array(),
            'placeholder' => array(),
            'value' => array(),
            'required' => array(),
            'id' => array(),
            'class' => array(),
        ),
        'option' => array(
            'value' => array(),
            'selected' => array(),
        ),
        'textarea' => array(
            'name' => array(),
            'placeholder' => array(),
            'id' => array(),
            'required' => array(),
        ),
    );
}

function jevelin_allowed_html_icons() {
    return array(
        'div' => array(
            'class' => array(),
            'id' => array(),
            'style' => array()
        ),
        'a' => array(
            'href' => array(),
            'target' => array(),
            'id' => array(),
            'class' => array(),
        ),
        'i' => array(
            'class' => array(),
        ),
    );
}

function jevelin_allowed_html_basic() {
    return array(
        'strong' => array(),
        'div' => array(
            'class' => array(),
            'id' => array(),
            'style' => array()
        ),
        'span' => array(
            'class' => array(),
            'id' => array(),
            'style' => array()
        ),
        'a' => array(
            'href' => array(),
            'target' => array(),
            'id' => array(),
            'class' => array(),
        ),
        'img' => array(
            'src' => array(),
            'class' => array(),
            'alt' => array(),
        ),
    );
}

function jevelin_allowed_html_icon_option() {
    return array(
        'i' => array(
            'class' => array(),
            'data-value' => array(),
            'data-group' => array()
        ),
    );
}


/**
 * Define jevelin icons
 */
if ( !function_exists( 'jevelin_icon_set' ) ) {
    function jevelin_icon_set($sets) {
        $sets['jevelin-icons'] = array(
            'font-style-src' => fw_get_framework_directory_uri('/static/libs/font-awesome/css/font-awesome.min.css'),
            'container-class' => 'fa-lg', // some fonts need special wrapper class to display properly
            'groups' => array(
                'fa' => esc_html__('Font Awesome', 'jevelin'),
                'si' => esc_html__('Simple Line Icons', 'jevelin'),
                'ti' => esc_html__('Themify Icons', 'jevelin'),
                'pi' => esc_html__('Pixeden Icons', 'jevelin'),
            ),
            'icons'  => array(
                /*'' => array( 'group' => 'fa' ),*/
                'fa fa-adjust'                 => array( 'group' => 'fa' ),
                'fa fa-anchor'                 => array( 'group' => 'fa' ),
                'fa fa-archive'                => array( 'group' => 'fa' ),
                'fa fa-area-chart'             => array( 'group' => 'fa' ),
                'fa fa-arrows'                 => array( 'group' => 'fa' ),
                'fa fa-arrows-h'               => array( 'group' => 'fa' ),
                'fa fa-arrows-v'               => array( 'group' => 'fa' ),
                'fa fa-asterisk'               => array( 'group' => 'fa' ),
                'fa fa-at'                     => array( 'group' => 'fa' ),
                'fa fa-automobile'             => array( 'group' => 'fa' ),
                'fa fa-balance-scale'          => array( 'group' => 'fa' ),
                'fa fa-ban'                    => array( 'group' => 'fa' ),
                'fa fa-bank'                   => array( 'group' => 'fa' ),
                'fa fa-bar-chart'              => array( 'group' => 'fa' ),
                'fa fa-bar-chart-o'            => array( 'group' => 'fa' ),
                'fa fa-barcode'                => array( 'group' => 'fa' ),
                'fa fa-bars'                   => array( 'group' => 'fa' ),
                'fa fa-battery-0'              => array( 'group' => 'fa' ),
                'fa fa-battery-1'              => array( 'group' => 'fa' ),
                'fa fa-battery-2'              => array( 'group' => 'fa' ),
                'fa fa-battery-3'              => array( 'group' => 'fa' ),
                'fa fa-battery-4'              => array( 'group' => 'fa' ),
                'fa fa-battery-empty'          => array( 'group' => 'fa' ),
                'fa fa-battery-full'           => array( 'group' => 'fa' ),
                'fa fa-battery-half'           => array( 'group' => 'fa' ),
                'fa fa-battery-quarter'        => array( 'group' => 'fa' ),
                'fa fa-battery-three-quarters' => array( 'group' => 'fa' ),
                'fa fa-bed'                    => array( 'group' => 'fa' ),
                'fa fa-beer'                   => array( 'group' => 'fa' ),
                'fa fa-bell'                   => array( 'group' => 'fa' ),
                'fa fa-bell-o'                 => array( 'group' => 'fa' ),
                'fa fa-bell-slash'             => array( 'group' => 'fa' ),
                'fa fa-bell-slash-o'           => array( 'group' => 'fa' ),
                'fa fa-bicycle'                => array( 'group' => 'fa' ),
                'fa fa-binoculars'             => array( 'group' => 'fa' ),
                'fa fa-birthday-cake'          => array( 'group' => 'fa' ),
                'fa fa-bolt'                   => array( 'group' => 'fa' ),
                'fa fa-bomb'                   => array( 'group' => 'fa' ),
                'fa fa-book'                   => array( 'group' => 'fa' ),
                'fa fa-bookmark'               => array( 'group' => 'fa' ),
                'fa fa-bookmark-o'             => array( 'group' => 'fa' ),
                'fa fa-briefcase'              => array( 'group' => 'fa' ),
                'fa fa-bug'                    => array( 'group' => 'fa' ),
                'fa fa-building'               => array( 'group' => 'fa' ),
                'fa fa-building-o'             => array( 'group' => 'fa' ),
                'fa fa-bullhorn'               => array( 'group' => 'fa' ),
                'fa fa-bullseye'               => array( 'group' => 'fa' ),
                'fa fa-bus'                    => array( 'group' => 'fa' ),
                'fa fa-cab'                    => array( 'group' => 'fa' ),
                'fa fa-calculator'             => array( 'group' => 'fa' ),
                'fa fa-calendar'               => array( 'group' => 'fa' ),
                'fa fa-calendar-check-o'       => array( 'group' => 'fa' ),
                'fa fa-calendar-minus-o'       => array( 'group' => 'fa' ),
                'fa fa-calendar-o'             => array( 'group' => 'fa' ),
                'fa fa-calendar-plus-o'        => array( 'group' => 'fa' ),
                'fa fa-calendar-times-o'       => array( 'group' => 'fa' ),
                'fa fa-camera'                 => array( 'group' => 'fa' ),
                'fa fa-camera-retro'           => array( 'group' => 'fa' ),
                'fa fa-car'                    => array( 'group' => 'fa' ),
                'fa fa-caret-square-o-down'    => array( 'group' => 'fa' ),
                'fa fa-caret-square-o-left'    => array( 'group' => 'fa' ),
                'fa fa-caret-square-o-right'   => array( 'group' => 'fa' ),
                'fa fa-caret-square-o-up'      => array( 'group' => 'fa' ),
                'fa fa-cart-arrow-down'        => array( 'group' => 'fa' ),
                'fa fa-cart-plus'              => array( 'group' => 'fa' ),
                'fa fa-cc'                     => array( 'group' => 'fa' ),
                'fa fa-certificate'            => array( 'group' => 'fa' ),
                'fa fa-check'                  => array( 'group' => 'fa' ),
                'fa fa-check-circle'           => array( 'group' => 'fa' ),
                'fa fa-check-circle-o'         => array( 'group' => 'fa' ),
                'fa fa-check-square'           => array( 'group' => 'fa' ),
                'fa fa-check-square-o'         => array( 'group' => 'fa' ),
                'fa fa-child'                  => array( 'group' => 'fa' ),
                'fa fa-circle'                 => array( 'group' => 'fa' ),
                'fa fa-circle-o'               => array( 'group' => 'fa' ),
                'fa fa-circle-o-notch'         => array( 'group' => 'fa' ),
                'fa fa-circle-thin'            => array( 'group' => 'fa' ),
                'fa fa-clock-o'                => array( 'group' => 'fa' ),
                'fa fa-clone'                  => array( 'group' => 'fa' ),
                'fa fa-close'                  => array( 'group' => 'fa' ),
                'fa fa-cloud'                  => array( 'group' => 'fa' ),
                'fa fa-cloud-download'         => array( 'group' => 'fa' ),
                'fa fa-cloud-upload'           => array( 'group' => 'fa' ),
                'fa fa-code'                   => array( 'group' => 'fa' ),
                'fa fa-code-fork'              => array( 'group' => 'fa' ),
                'fa fa-coffee'                 => array( 'group' => 'fa' ),
                'fa fa-cog'                    => array( 'group' => 'fa' ),
                'fa fa-cogs'                   => array( 'group' => 'fa' ),
                'fa fa-comment'                => array( 'group' => 'fa' ),
                'fa fa-comment-o'              => array( 'group' => 'fa' ),
                'fa fa-commenting'             => array( 'group' => 'fa' ),
                'fa fa-commenting-o'           => array( 'group' => 'fa' ),
                'fa fa-comments'               => array( 'group' => 'fa' ),
                'fa fa-comments-o'             => array( 'group' => 'fa' ),
                'fa fa-compass'                => array( 'group' => 'fa' ),
                'fa fa-copyright'              => array( 'group' => 'fa' ),
                'fa fa-creative-commons'       => array( 'group' => 'fa' ),
                'fa fa-credit-card'            => array( 'group' => 'fa' ),
                'fa fa-crop'                   => array( 'group' => 'fa' ),
                'fa fa-crosshairs'             => array( 'group' => 'fa' ),
                'fa fa-cube'                   => array( 'group' => 'fa' ),
                'fa fa-cubes'                  => array( 'group' => 'fa' ),
                'fa fa-cutlery'                => array( 'group' => 'fa' ),
                'fa fa-dashboard'              => array( 'group' => 'fa' ),
                'fa fa-database'               => array( 'group' => 'fa' ),
                'fa fa-desktop'                => array( 'group' => 'fa' ),
                'fa fa-diamond'                => array( 'group' => 'fa' ),
                'fa fa-dot-circle-o'           => array( 'group' => 'fa' ),
                'fa fa-download'               => array( 'group' => 'fa' ),
                'fa fa-edit'                   => array( 'group' => 'fa' ),
                'fa fa-ellipsis-h'             => array( 'group' => 'fa' ),
                'fa fa-ellipsis-v'             => array( 'group' => 'fa' ),
                'fa fa-envelope'               => array( 'group' => 'fa' ),
                'fa fa-envelope-o'             => array( 'group' => 'fa' ),
                'fa fa-envelope-square'        => array( 'group' => 'fa' ),
                'fa fa-eraser'                 => array( 'group' => 'fa' ),
                'fa fa-exchange'               => array( 'group' => 'fa' ),
                'fa fa-exclamation'            => array( 'group' => 'fa' ),
                'fa fa-exclamation-circle'     => array( 'group' => 'fa' ),
                'fa fa-exclamation-triangle'   => array( 'group' => 'fa' ),
                'fa fa-external-link'          => array( 'group' => 'fa' ),
                'fa fa-external-link-square'   => array( 'group' => 'fa' ),
                'fa fa-eye'                    => array( 'group' => 'fa' ),
                'fa fa-eye-slash'              => array( 'group' => 'fa' ),
                'fa fa-eyedropper'             => array( 'group' => 'fa' ),
                'fa fa-fax'                    => array( 'group' => 'fa' ),
                'fa fa-feed'                   => array( 'group' => 'fa' ),
                'fa fa-female'                 => array( 'group' => 'fa' ),
                'fa fa-fighter-jet'            => array( 'group' => 'fa' ),
                'fa fa-file-archive-o'         => array( 'group' => 'fa' ),
                'fa fa-file-audio-o'           => array( 'group' => 'fa' ),
                'fa fa-file-code-o'            => array( 'group' => 'fa' ),
                'fa fa-file-excel-o'           => array( 'group' => 'fa' ),
                'fa fa-file-image-o'           => array( 'group' => 'fa' ),
                'fa fa-file-movie-o'           => array( 'group' => 'fa' ),
                'fa fa-file-pdf-o'             => array( 'group' => 'fa' ),
                'fa fa-file-photo-o'           => array( 'group' => 'fa' ),
                'fa fa-file-picture-o'         => array( 'group' => 'fa' ),
                'fa fa-file-powerpoint-o'      => array( 'group' => 'fa' ),
                'fa fa-file-sound-o'           => array( 'group' => 'fa' ),
                'fa fa-file-video-o'           => array( 'group' => 'fa' ),
                'fa fa-file-word-o'            => array( 'group' => 'fa' ),
                'fa fa-file-zip-o'             => array( 'group' => 'fa' ),
                'fa fa-film'                   => array( 'group' => 'fa' ),
                'fa fa-filter'                 => array( 'group' => 'fa' ),
                'fa fa-fire'                   => array( 'group' => 'fa' ),
                'fa fa-fire-extinguisher'      => array( 'group' => 'fa' ),
                'fa fa-flag'                   => array( 'group' => 'fa' ),
                'fa fa-flag-checkered'         => array( 'group' => 'fa' ),
                'fa fa-flag-o'                 => array( 'group' => 'fa' ),
                'fa fa-flash'                  => array( 'group' => 'fa' ),
                'fa fa-flask'                  => array( 'group' => 'fa' ),
                'fa fa-folder'                 => array( 'group' => 'fa' ),
                'fa fa-folder-o'               => array( 'group' => 'fa' ),
                'fa fa-folder-open'            => array( 'group' => 'fa' ),
                'fa fa-folder-open-o'          => array( 'group' => 'fa' ),
                'fa fa-frown-o'                => array( 'group' => 'fa' ),
                'fa fa-futbol-o'               => array( 'group' => 'fa' ),
                'fa fa-gamepad'                => array( 'group' => 'fa' ),
                'fa fa-gavel'                  => array( 'group' => 'fa' ),
                'fa fa-gear'                   => array( 'group' => 'fa' ),
                'fa fa-gears'                  => array( 'group' => 'fa' ),
                'fa fa-gift'                   => array( 'group' => 'fa' ),
                'fa fa-glass'                  => array( 'group' => 'fa' ),
                'fa fa-globe'                  => array( 'group' => 'fa' ),
                'fa fa-graduation-cap'         => array( 'group' => 'fa' ),
                'fa fa-group'                  => array( 'group' => 'fa' ),
                'fa fa-hand-grab-o'            => array( 'group' => 'fa' ),
                'fa fa-hand-lizard-o'          => array( 'group' => 'fa' ),
                'fa fa-hand-paper-o'           => array( 'group' => 'fa' ),
                'fa fa-hand-peace-o'           => array( 'group' => 'fa' ),
                'fa fa-hand-pointer-o'         => array( 'group' => 'fa' ),
                'fa fa-hand-rock-o'            => array( 'group' => 'fa' ),
                'fa fa-hand-scissors-o'        => array( 'group' => 'fa' ),
                'fa fa-hand-spock-o'           => array( 'group' => 'fa' ),
                'fa fa-hand-stop-o'            => array( 'group' => 'fa' ),
                'fa fa-hdd-o'                  => array( 'group' => 'fa' ),
                'fa fa-headphones'             => array( 'group' => 'fa' ),
                'fa fa-heart'                  => array( 'group' => 'fa' ),
                'fa fa-heart-o'                => array( 'group' => 'fa' ),
                'fa fa-heartbeat'              => array( 'group' => 'fa' ),
                'fa fa-history'                => array( 'group' => 'fa' ),
                'fa fa-home'                   => array( 'group' => 'fa' ),
                'fa fa-hotel'                  => array( 'group' => 'fa' ),
                'fa fa-hourglass'              => array( 'group' => 'fa' ),
                'fa fa-hourglass-1'            => array( 'group' => 'fa' ),
                'fa fa-hourglass-2'            => array( 'group' => 'fa' ),
                'fa fa-hourglass-3'            => array( 'group' => 'fa' ),
                'fa fa-hourglass-end'          => array( 'group' => 'fa' ),
                'fa fa-hourglass-half'         => array( 'group' => 'fa' ),
                'fa fa-hourglass-o'            => array( 'group' => 'fa' ),
                'fa fa-hourglass-start'        => array( 'group' => 'fa' ),
                'fa fa-i-cursor'               => array( 'group' => 'fa' ),
                'fa fa-image'                  => array( 'group' => 'fa' ),
                'fa fa-inbox'                  => array( 'group' => 'fa' ),
                'fa fa-industry'               => array( 'group' => 'fa' ),
                'fa fa-info'                   => array( 'group' => 'fa' ),
                'fa fa-info-circle'            => array( 'group' => 'fa' ),
                'fa fa-institution'            => array( 'group' => 'fa' ),
                'fa fa-key'                    => array( 'group' => 'fa' ),
                'fa fa-keyboard-o'             => array( 'group' => 'fa' ),
                'fa fa-language'               => array( 'group' => 'fa' ),
                'fa fa-laptop'                 => array( 'group' => 'fa' ),
                'fa fa-leaf'                   => array( 'group' => 'fa' ),
                'fa fa-legal'                  => array( 'group' => 'fa' ),
                'fa fa-lemon-o'                => array( 'group' => 'fa' ),
                'fa fa-level-down'             => array( 'group' => 'fa' ),
                'fa fa-level-up'               => array( 'group' => 'fa' ),
                'fa fa-life-bouy'              => array( 'group' => 'fa' ),
                'fa fa-life-buoy'              => array( 'group' => 'fa' ),
                'fa fa-life-ring'              => array( 'group' => 'fa' ),
                'fa fa-life-saver'             => array( 'group' => 'fa' ),
                'fa fa-lightbulb-o'            => array( 'group' => 'fa' ),
                'fa fa-line-chart'             => array( 'group' => 'fa' ),
                'fa fa-location-arrow'         => array( 'group' => 'fa' ),
                'fa fa-lock'                   => array( 'group' => 'fa' ),
                'fa fa-magic'                  => array( 'group' => 'fa' ),
                'fa fa-magnet'                 => array( 'group' => 'fa' ),
                'fa fa-mail-forward'           => array( 'group' => 'fa' ),
                'fa fa-mail-reply'             => array( 'group' => 'fa' ),
                'fa fa-mail-reply-all'         => array( 'group' => 'fa' ),
                'fa fa-male'                   => array( 'group' => 'fa' ),
                'fa fa-map'                    => array( 'group' => 'fa' ),
                'fa fa-map-marker'             => array( 'group' => 'fa' ),
                'fa fa-map-o'                  => array( 'group' => 'fa' ),
                'fa fa-map-pin'                => array( 'group' => 'fa' ),
                'fa fa-map-signs'              => array( 'group' => 'fa' ),
                'fa fa-meh-o'                  => array( 'group' => 'fa' ),
                'fa fa-microphone'             => array( 'group' => 'fa' ),
                'fa fa-microphone-slash'       => array( 'group' => 'fa' ),
                'fa fa-minus'                  => array( 'group' => 'fa' ),
                'fa fa-minus-circle'           => array( 'group' => 'fa' ),
                'fa fa-minus-square'           => array( 'group' => 'fa' ),
                'fa fa-minus-square-o'         => array( 'group' => 'fa' ),
                'fa fa-mobile'                 => array( 'group' => 'fa' ),
                'fa fa-mobile-phone'           => array( 'group' => 'fa' ),
                'fa fa-money'                  => array( 'group' => 'fa' ),
                'fa fa-moon-o'                 => array( 'group' => 'fa' ),
                'fa fa-mortar-board'           => array( 'group' => 'fa' ),
                'fa fa-motorcycle'             => array( 'group' => 'fa' ),
                'fa fa-mouse-pointer'          => array( 'group' => 'fa' ),
                'fa fa-music'                  => array( 'group' => 'fa' ),
                'fa fa-navicon'                => array( 'group' => 'fa' ),
                'fa fa-newspaper-o'            => array( 'group' => 'fa' ),
                'fa fa-object-group'           => array( 'group' => 'fa' ),
                'fa fa-object-ungroup'         => array( 'group' => 'fa' ),
                'fa fa-paint-brush'            => array( 'group' => 'fa' ),
                'fa fa-paper-plane'            => array( 'group' => 'fa' ),
                'fa fa-paper-plane-o'          => array( 'group' => 'fa' ),
                'fa fa-paw'                    => array( 'group' => 'fa' ),
                'fa fa-pencil'                 => array( 'group' => 'fa' ),
                'fa fa-pencil-square'          => array( 'group' => 'fa' ),
                'fa fa-pencil-square-o'        => array( 'group' => 'fa' ),
                'fa fa-phone'                  => array( 'group' => 'fa' ),
                'fa fa-phone-square'           => array( 'group' => 'fa' ),
                'fa fa-photo'                  => array( 'group' => 'fa' ),
                'fa fa-picture-o'              => array( 'group' => 'fa' ),
                'fa fa-pie-chart'              => array( 'group' => 'fa' ),
                'fa fa-plane'                  => array( 'group' => 'fa' ),
                'fa fa-plug'                   => array( 'group' => 'fa' ),
                'fa fa-plus'                   => array( 'group' => 'fa' ),
                'fa fa-plus-circle'            => array( 'group' => 'fa' ),
                'fa fa-plus-square'            => array( 'group' => 'fa' ),
                'fa fa-plus-square-o'          => array( 'group' => 'fa' ),
                'fa fa-power-off'              => array( 'group' => 'fa' ),
                'fa fa-print'                  => array( 'group' => 'fa' ),
                'fa fa-puzzle-piece'           => array( 'group' => 'fa' ),
                'fa fa-qrcode'                 => array( 'group' => 'fa' ),
                'fa fa-question'               => array( 'group' => 'fa' ),
                'fa fa-question-circle'        => array( 'group' => 'fa' ),
                'fa fa-quote-left'             => array( 'group' => 'fa' ),
                'fa fa-quote-right'            => array( 'group' => 'fa' ),
                'fa fa-random'                 => array( 'group' => 'fa' ),
                'fa fa-recycle'                => array( 'group' => 'fa' ),
                'fa fa-refresh'                => array( 'group' => 'fa' ),
                'fa fa-registered'             => array( 'group' => 'fa' ),
                'fa fa-remove'                 => array( 'group' => 'fa' ),
                'fa fa-reorder'                => array( 'group' => 'fa' ),
                'fa fa-reply'                  => array( 'group' => 'fa' ),
                'fa fa-reply-all'              => array( 'group' => 'fa' ),
                'fa fa-retweet'                => array( 'group' => 'fa' ),
                'fa fa-road'                   => array( 'group' => 'fa' ),
                'fa fa-rocket'                 => array( 'group' => 'fa' ),
                'fa fa-rss'                    => array( 'group' => 'fa' ),
                'fa fa-rss-square'             => array( 'group' => 'fa' ),
                'fa fa-search'                 => array( 'group' => 'fa' ),
                'fa fa-search-minus'           => array( 'group' => 'fa' ),
                'fa fa-search-plus'            => array( 'group' => 'fa' ),
                'fa fa-send'                   => array( 'group' => 'fa' ),
                'fa fa-send-o'                 => array( 'group' => 'fa' ),
                'fa fa-server'                 => array( 'group' => 'fa' ),
                'fa fa-share'                  => array( 'group' => 'fa' ),
                'fa fa-share-alt'              => array( 'group' => 'fa' ),
                'fa fa-share-alt-square'       => array( 'group' => 'fa' ),
                'fa fa-share-square'           => array( 'group' => 'fa' ),
                'fa fa-share-square-o'         => array( 'group' => 'fa' ),
                'fa fa-shield'                 => array( 'group' => 'fa' ),
                'fa fa-ship'                   => array( 'group' => 'fa' ),
                'fa fa-shopping-cart'          => array( 'group' => 'fa' ),
                'fa fa-sign-in'                => array( 'group' => 'fa' ),
                'fa fa-sign-out'               => array( 'group' => 'fa' ),
                'fa fa-signal'                 => array( 'group' => 'fa' ),
                'fa fa-sitemap'                => array( 'group' => 'fa' ),
                'fa fa-sliders'                => array( 'group' => 'fa' ),
                'fa fa-smile-o'                => array( 'group' => 'fa' ),
                'fa fa-soccer-ball-o'          => array( 'group' => 'fa' ),
                'fa fa-sort'                   => array( 'group' => 'fa' ),
                'fa fa-sort-alpha-asc'         => array( 'group' => 'fa' ),
                'fa fa-sort-alpha-desc'        => array( 'group' => 'fa' ),
                'fa fa-sort-amount-asc'        => array( 'group' => 'fa' ),
                'fa fa-sort-amount-desc'       => array( 'group' => 'fa' ),
                'fa fa-sort-asc'               => array( 'group' => 'fa' ),
                'fa fa-sort-desc'              => array( 'group' => 'fa' ),
                'fa fa-sort-down'              => array( 'group' => 'fa' ),
                'fa fa-sort-numeric-asc'       => array( 'group' => 'fa' ),
                'fa fa-sort-numeric-desc'      => array( 'group' => 'fa' ),
                'fa fa-sort-up'                => array( 'group' => 'fa' ),
                'fa fa-space-shuttle'          => array( 'group' => 'fa' ),
                'fa fa-spoon'                  => array( 'group' => 'fa' ),
                'fa fa-square'                 => array( 'group' => 'fa' ),
                'fa fa-square-o'               => array( 'group' => 'fa' ),
                'fa fa-star'                   => array( 'group' => 'fa' ),
                'fa fa-star-half'              => array( 'group' => 'fa' ),
                'fa fa-star-half-empty'        => array( 'group' => 'fa' ),
                'fa fa-star-half-full'         => array( 'group' => 'fa' ),
                'fa fa-star-half-o'            => array( 'group' => 'fa' ),
                'fa fa-star-o'                 => array( 'group' => 'fa' ),
                'fa fa-sticky-note'            => array( 'group' => 'fa' ),
                'fa fa-sticky-note-o'          => array( 'group' => 'fa' ),
                'fa fa-street-view'            => array( 'group' => 'fa' ),
                'fa fa-suitcase'               => array( 'group' => 'fa' ),
                'fa fa-sun-o'                  => array( 'group' => 'fa' ),
                'fa fa-support'                => array( 'group' => 'fa' ),
                'fa fa-tablet'                 => array( 'group' => 'fa' ),
                'fa fa-tachometer'             => array( 'group' => 'fa' ),
                'fa fa-tag'                    => array( 'group' => 'fa' ),
                'fa fa-tags'                   => array( 'group' => 'fa' ),
                'fa fa-tasks'                  => array( 'group' => 'fa' ),
                'fa fa-taxi'                   => array( 'group' => 'fa' ),
                'fa fa-television'             => array( 'group' => 'fa' ),
                'fa fa-terminal'               => array( 'group' => 'fa' ),
                'fa fa-thumb-tack'             => array( 'group' => 'fa' ),
                'fa fa-thumbs-down'            => array( 'group' => 'fa' ),
                'fa fa-thumbs-o-down'          => array( 'group' => 'fa' ),
                'fa fa-thumbs-o-up'            => array( 'group' => 'fa' ),
                'fa fa-thumbs-up'              => array( 'group' => 'fa' ),
                'fa fa-ticket'                 => array( 'group' => 'fa' ),
                'fa fa-times'                  => array( 'group' => 'fa' ),
                'fa fa-times-circle'           => array( 'group' => 'fa' ),
                'fa fa-times-circle-o'         => array( 'group' => 'fa' ),
                'fa fa-tint'                   => array( 'group' => 'fa' ),
                'fa fa-toggle-down'            => array( 'group' => 'fa' ),
                'fa fa-toggle-left'            => array( 'group' => 'fa' ),
                'fa fa-toggle-off'             => array( 'group' => 'fa' ),
                'fa fa-toggle-on'              => array( 'group' => 'fa' ),
                'fa fa-toggle-right'           => array( 'group' => 'fa' ),
                'fa fa-toggle-up'              => array( 'group' => 'fa' ),
                'fa fa-trademark'              => array( 'group' => 'fa' ),
                'fa fa-trash'                  => array( 'group' => 'fa' ),
                'fa fa-trash-o'                => array( 'group' => 'fa' ),
                'fa fa-tree'                   => array( 'group' => 'fa' ),
                'fa fa-trophy'                 => array( 'group' => 'fa' ),
                'fa fa-truck'                  => array( 'group' => 'fa' ),
                'fa fa-tty'                    => array( 'group' => 'fa' ),
                'fa fa-tv'                     => array( 'group' => 'fa' ),
                'fa fa-umbrella'               => array( 'group' => 'fa' ),
                'fa fa-university'             => array( 'group' => 'fa' ),
                'fa fa-unlock'                 => array( 'group' => 'fa' ),
                'fa fa-unlock-alt'             => array( 'group' => 'fa' ),
                'fa fa-unsorted'               => array( 'group' => 'fa' ),
                'fa fa-upload'                 => array( 'group' => 'fa' ),
                'fa fa-user'                   => array( 'group' => 'fa' ),
                'fa fa-user-plus'              => array( 'group' => 'fa' ),
                'fa fa-user-secret'            => array( 'group' => 'fa' ),
                'fa fa-user-times'             => array( 'group' => 'fa' ),
                'fa fa-users'                  => array( 'group' => 'fa' ),
                'fa fa-video-camera'           => array( 'group' => 'fa' ),
                'fa fa-volume-down'            => array( 'group' => 'fa' ),
                'fa fa-volume-off'             => array( 'group' => 'fa' ),
                'fa fa-volume-up'              => array( 'group' => 'fa' ),
                'fa fa-warning'                => array( 'group' => 'fa' ),
                'fa fa-wheelchair'             => array( 'group' => 'fa' ),
                'fa fa-wifi'                   => array( 'group' => 'fa' ),
                'fa fa-wrench'                 => array( 'group' => 'fa' ),
                'fa fa-hand-o-down'            => array( 'group' => 'fa' ),
                'fa fa-hand-o-left'            => array( 'group' => 'fa' ),
                'fa fa-hand-o-right'           => array( 'group' => 'fa' ),
                'fa fa-hand-o-up'              => array( 'group' => 'fa' ),
                'fa fa-ambulance'              => array( 'group' => 'fa' ),
                'fa fa-subway'                 => array( 'group' => 'fa' ),
                'fa fa-train'                  => array( 'group' => 'fa' ),
                'fa fa-genderless'             => array( 'group' => 'fa' ),
                'fa fa-intersex'               => array( 'group' => 'fa' ),
                'fa fa-mars'                   => array( 'group' => 'fa' ),
                'fa fa-mars-double'            => array( 'group' => 'fa' ),
                'fa fa-mars-stroke'            => array( 'group' => 'fa' ),
                'fa fa-mars-stroke-h'          => array( 'group' => 'fa' ),
                'fa fa-mars-stroke-v'          => array( 'group' => 'fa' ),
                'fa fa-mercury'                => array( 'group' => 'fa' ),
                'fa fa-neuter'                 => array( 'group' => 'fa' ),
                'fa fa-transgender'            => array( 'group' => 'fa' ),
                'fa fa-transgender-alt'        => array( 'group' => 'fa' ),
                'fa fa-venus'                  => array( 'group' => 'fa' ),
                'fa fa-venus-double'           => array( 'group' => 'fa' ),
                'fa fa-venus-mars'             => array( 'group' => 'fa' ),
                'fa fa-file'                   => array( 'group' => 'fa' ),
                'fa fa-file-o'                 => array( 'group' => 'fa' ),
                'fa fa-file-text'              => array( 'group' => 'fa' ),
                'fa fa-file-text-o'            => array( 'group' => 'fa' ),
                'fa fa-cc-amex'                => array( 'group' => 'fa' ),
                'fa fa-cc-diners-club'         => array( 'group' => 'fa' ),
                'fa fa-cc-discover'            => array( 'group' => 'fa' ),
                'fa fa-cc-jcb'                 => array( 'group' => 'fa' ),
                'fa fa-cc-mastercard'          => array( 'group' => 'fa' ),
                'fa fa-cc-paypal'              => array( 'group' => 'fa' ),
                'fa fa-cc-stripe'              => array( 'group' => 'fa' ),
                'fa fa-cc-visa'                => array( 'group' => 'fa' ),
                'fa fa-google-wallet'          => array( 'group' => 'fa' ),
                'fa fa-paypal'                 => array( 'group' => 'fa' ),
                'fa fa-bitcoin'                => array( 'group' => 'fa' ),
                'fa fa-btc'                    => array( 'group' => 'fa' ),
                'fa fa-cny'                    => array( 'group' => 'fa' ),
                'fa fa-dollar'                 => array( 'group' => 'fa' ),
                'fa fa-eur'                    => array( 'group' => 'fa' ),
                'fa fa-euro'                   => array( 'group' => 'fa' ),
                'fa fa-gbp'                    => array( 'group' => 'fa' ),
                'fa fa-gg'                     => array( 'group' => 'fa' ),
                'fa fa-gg-circle'              => array( 'group' => 'fa' ),
                'fa fa-ils'                    => array( 'group' => 'fa' ),
                'fa fa-inr'                    => array( 'group' => 'fa' ),
                'fa fa-jpy'                    => array( 'group' => 'fa' ),
                'fa fa-krw'                    => array( 'group' => 'fa' ),
                'fa fa-rmb'                    => array( 'group' => 'fa' ),
                'fa fa-rouble'                 => array( 'group' => 'fa' ),
                'fa fa-rub'                    => array( 'group' => 'fa' ),
                'fa fa-ruble'                  => array( 'group' => 'fa' ),
                'fa fa-rupee'                  => array( 'group' => 'fa' ),
                'fa fa-shekel'                 => array( 'group' => 'fa' ),
                'fa fa-sheqel'                 => array( 'group' => 'fa' ),
                'fa fa-try'                    => array( 'group' => 'fa' ),
                'fa fa-turkish-lira'           => array( 'group' => 'fa' ),
                'fa fa-usd'                    => array( 'group' => 'fa' ),
                'fa fa-won'                    => array( 'group' => 'fa' ),
                'fa fa-yen'                    => array( 'group' => 'fa' ),
                'fa fa-align-center'           => array( 'group' => 'fa' ),
                'fa fa-align-justify'          => array( 'group' => 'fa' ),
                'fa fa-align-left'             => array( 'group' => 'fa' ),
                'fa fa-align-right'            => array( 'group' => 'fa' ),
                'fa fa-bold'                   => array( 'group' => 'fa' ),
                'fa fa-chain'                  => array( 'group' => 'fa' ),
                'fa fa-chain-broken'           => array( 'group' => 'fa' ),
                'fa fa-clipboard'              => array( 'group' => 'fa' ),
                'fa fa-columns'                => array( 'group' => 'fa' ),
                'fa fa-copy'                   => array( 'group' => 'fa' ),
                'fa fa-cut'                    => array( 'group' => 'fa' ),
                'fa fa-dedent'                 => array( 'group' => 'fa' ),
                'fa fa-files-o'                => array( 'group' => 'fa' ),
                'fa fa-floppy-o'               => array( 'group' => 'fa' ),
                'fa fa-font'                   => array( 'group' => 'fa' ),
                'fa fa-header'                 => array( 'group' => 'fa' ),
                'fa fa-indent'                 => array( 'group' => 'fa' ),
                'fa fa-italic'                 => array( 'group' => 'fa' ),
                'fa fa-link'                   => array( 'group' => 'fa' ),
                'fa fa-list'                   => array( 'group' => 'fa' ),
                'fa fa-list-alt'               => array( 'group' => 'fa' ),
                'fa fa-list-ol'                => array( 'group' => 'fa' ),
                'fa fa-list-ul'                => array( 'group' => 'fa' ),
                'fa fa-outdent'                => array( 'group' => 'fa' ),
                'fa fa-paperclip'              => array( 'group' => 'fa' ),
                'fa fa-paragraph'              => array( 'group' => 'fa' ),
                'fa fa-paste'                  => array( 'group' => 'fa' ),
                'fa fa-repeat'                 => array( 'group' => 'fa' ),
                'fa fa-rotate-left'            => array( 'group' => 'fa' ),
                'fa fa-rotate-right'           => array( 'group' => 'fa' ),
                'fa fa-save'                   => array( 'group' => 'fa' ),
                'fa fa-scissors'               => array( 'group' => 'fa' ),
                'fa fa-strikethrough'          => array( 'group' => 'fa' ),
                'fa fa-subscript'              => array( 'group' => 'fa' ),
                'fa fa-superscript'            => array( 'group' => 'fa' ),
                'fa fa-table'                  => array( 'group' => 'fa' ),
                'fa fa-text-height'            => array( 'group' => 'fa' ),
                'fa fa-text-width'             => array( 'group' => 'fa' ),
                'fa fa-th'                     => array( 'group' => 'fa' ),
                'fa fa-th-large'               => array( 'group' => 'fa' ),
                'fa fa-th-list'                => array( 'group' => 'fa' ),
                'fa fa-underline'              => array( 'group' => 'fa' ),
                'fa fa-undo'                   => array( 'group' => 'fa' ),
                'fa fa-unlink'                 => array( 'group' => 'fa' ),
                'fa fa-angle-double-down'      => array( 'group' => 'fa' ),
                'fa fa-angle-double-left'      => array( 'group' => 'fa' ),
                'fa fa-angle-double-right'     => array( 'group' => 'fa' ),
                'fa fa-angle-double-up'        => array( 'group' => 'fa' ),
                'fa fa-angle-down'             => array( 'group' => 'fa' ),
                'fa fa-angle-left'             => array( 'group' => 'fa' ),
                'fa fa-angle-right'            => array( 'group' => 'fa' ),
                'fa fa-angle-up'               => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-down'      => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-left'      => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-o-down'    => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-o-left'    => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-o-right'   => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-o-up'      => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-right'     => array( 'group' => 'fa' ),
                'fa fa-arrow-circle-up'        => array( 'group' => 'fa' ),
                'fa fa-arrow-down'             => array( 'group' => 'fa' ),
                'fa fa-arrow-left'             => array( 'group' => 'fa' ),
                'fa fa-arrow-right'            => array( 'group' => 'fa' ),
                'fa fa-arrow-up'               => array( 'group' => 'fa' ),
                'fa fa-arrows-alt'             => array( 'group' => 'fa' ),
                'fa fa-caret-down'             => array( 'group' => 'fa' ),
                'fa fa-caret-left'             => array( 'group' => 'fa' ),
                'fa fa-caret-right'            => array( 'group' => 'fa' ),
                'fa fa-caret-up'               => array( 'group' => 'fa' ),
                'fa fa-chevron-circle-down'    => array( 'group' => 'fa' ),
                'fa fa-chevron-circle-left'    => array( 'group' => 'fa' ),
                'fa fa-chevron-circle-right'   => array( 'group' => 'fa' ),
                'fa fa-chevron-circle-up'      => array( 'group' => 'fa' ),
                'fa fa-chevron-down'           => array( 'group' => 'fa' ),
                'fa fa-chevron-left'           => array( 'group' => 'fa' ),
                'fa fa-chevron-right'          => array( 'group' => 'fa' ),
                'fa fa-chevron-up'             => array( 'group' => 'fa' ),
                'fa fa-long-arrow-down'        => array( 'group' => 'fa' ),
                'fa fa-long-arrow-left'        => array( 'group' => 'fa' ),
                'fa fa-long-arrow-right'       => array( 'group' => 'fa' ),
                'fa fa-long-arrow-up'          => array( 'group' => 'fa' ),
                'fa fa-backward'               => array( 'group' => 'fa' ),
                'fa fa-compress'               => array( 'group' => 'fa' ),
                'fa fa-eject'                  => array( 'group' => 'fa' ),
                'fa fa-expand'                 => array( 'group' => 'fa' ),
                'fa fa-fast-backward'          => array( 'group' => 'fa' ),
                'fa fa-fast-forward'           => array( 'group' => 'fa' ),
                'fa fa-forward'                => array( 'group' => 'fa' ),
                'fa fa-pause'                  => array( 'group' => 'fa' ),
                'fa fa-play'                   => array( 'group' => 'fa' ),
                'fa fa-play-circle'            => array( 'group' => 'fa' ),
                'fa fa-play-circle-o'          => array( 'group' => 'fa' ),
                'fa fa-step-backward'          => array( 'group' => 'fa' ),
                'fa fa-step-forward'           => array( 'group' => 'fa' ),
                'fa fa-stop'                   => array( 'group' => 'fa' ),
                'fa fa-youtube-play'           => array( 'group' => 'fa' ),
                'fa fa-500px'                  => array( 'group' => 'fa' ),
                'fa fa-adn'                    => array( 'group' => 'fa' ),
                'fa fa-amazon'                 => array( 'group' => 'fa' ),
                'fa fa-android'                => array( 'group' => 'fa' ),
                'fa fa-angellist'              => array( 'group' => 'fa' ),
                'fa fa-apple'                  => array( 'group' => 'fa' ),
                'fa fa-behance'                => array( 'group' => 'fa' ),
                'fa fa-behance-square'         => array( 'group' => 'fa' ),
                'fa fa-bitbucket'              => array( 'group' => 'fa' ),
                'fa fa-bitbucket-square'       => array( 'group' => 'fa' ),
                'fa fa-black-tie'              => array( 'group' => 'fa' ),
                'fa fa-buysellads'             => array( 'group' => 'fa' ),
                'fa fa-chrome'                 => array( 'group' => 'fa' ),
                'fa fa-codepen'                => array( 'group' => 'fa' ),
                'fa fa-connectdevelop'         => array( 'group' => 'fa' ),
                'fa fa-contao'                 => array( 'group' => 'fa' ),
                'fa fa-css3'                   => array( 'group' => 'fa' ),
                'fa fa-dashcube'               => array( 'group' => 'fa' ),
                'fa fa-delicious'              => array( 'group' => 'fa' ),
                'fa fa-deviantart'             => array( 'group' => 'fa' ),
                'fa fa-digg'                   => array( 'group' => 'fa' ),
                'fa fa-dribbble'               => array( 'group' => 'fa' ),
                'fa fa-dropbox'                => array( 'group' => 'fa' ),
                'fa fa-drupal'                 => array( 'group' => 'fa' ),
                'fa fa-empire'                 => array( 'group' => 'fa' ),
                'fa fa-expeditedssl'           => array( 'group' => 'fa' ),
                'fa fa-facebook'               => array( 'group' => 'fa' ),
                'fa fa-facebook-f'             => array( 'group' => 'fa' ),
                'fa fa-facebook-official'      => array( 'group' => 'fa' ),
                'fa fa-facebook-square'        => array( 'group' => 'fa' ),
                'fa fa-firefox'                => array( 'group' => 'fa' ),
                'fa fa-flickr'                 => array( 'group' => 'fa' ),
                'fa fa-fonticons'              => array( 'group' => 'fa' ),
                'fa fa-forumbee'               => array( 'group' => 'fa' ),
                'fa fa-foursquare'             => array( 'group' => 'fa' ),
                'fa fa-ge'                     => array( 'group' => 'fa' ),
                'fa fa-get-pocket'             => array( 'group' => 'fa' ),
                'fa fa-git'                    => array( 'group' => 'fa' ),
                'fa fa-git-square'             => array( 'group' => 'fa' ),
                'fa fa-github'                 => array( 'group' => 'fa' ),
                'fa fa-github-alt'             => array( 'group' => 'fa' ),
                'fa fa-github-square'          => array( 'group' => 'fa' ),
                'fa fa-gittip'                 => array( 'group' => 'fa' ),
                'fa fa-google'                 => array( 'group' => 'fa' ),
                'fa fa-google-plus'            => array( 'group' => 'fa' ),
                'fa fa-google-plus-square'     => array( 'group' => 'fa' ),
                'fa fa-gratipay'               => array( 'group' => 'fa' ),
                'fa fa-hacker-news'            => array( 'group' => 'fa' ),
                'fa fa-houzz'                  => array( 'group' => 'fa' ),
                'fa fa-html5'                  => array( 'group' => 'fa' ),
                'fa fa-instagram'              => array( 'group' => 'fa' ),
                'fa fa-internet-explorer'      => array( 'group' => 'fa' ),
                'fa fa-ioxhost'                => array( 'group' => 'fa' ),
                'fa fa-joomla'                 => array( 'group' => 'fa' ),
                'fa fa-jsfiddle'               => array( 'group' => 'fa' ),
                'fa fa-lastfm'                 => array( 'group' => 'fa' ),
                'fa fa-lastfm-square'          => array( 'group' => 'fa' ),
                'fa fa-leanpub'                => array( 'group' => 'fa' ),
                'fa fa-linkedin'               => array( 'group' => 'fa' ),
                'fa fa-linkedin-square'        => array( 'group' => 'fa' ),
                'fa fa-linux'                  => array( 'group' => 'fa' ),
                'fa fa-maxcdn'                 => array( 'group' => 'fa' ),
                'fa fa-meanpath'               => array( 'group' => 'fa' ),
                'fa fa-medium'                 => array( 'group' => 'fa' ),
                'fa fa-odnoklassniki'          => array( 'group' => 'fa' ),
                'fa fa-odnoklassniki-square'   => array( 'group' => 'fa' ),
                'fa fa-opencart'               => array( 'group' => 'fa' ),
                'fa fa-openid'                 => array( 'group' => 'fa' ),
                'fa fa-opera'                  => array( 'group' => 'fa' ),
                'fa fa-optin-monster'          => array( 'group' => 'fa' ),
                'fa fa-pagelines'              => array( 'group' => 'fa' ),
                'fa fa-pied-piper'             => array( 'group' => 'fa' ),
                'fa fa-pied-piper-alt'         => array( 'group' => 'fa' ),
                'fa fa-pinterest'              => array( 'group' => 'fa' ),
                'fa fa-pinterest-p'            => array( 'group' => 'fa' ),
                'fa fa-pinterest-square'       => array( 'group' => 'fa' ),
                'fa fa-qq'                     => array( 'group' => 'fa' ),
                'fa fa-ra'                     => array( 'group' => 'fa' ),
                'fa fa-rebel'                  => array( 'group' => 'fa' ),
                'fa fa-reddit'                 => array( 'group' => 'fa' ),
                'fa fa-reddit-square'          => array( 'group' => 'fa' ),
                'fa fa-renren'                 => array( 'group' => 'fa' ),
                'fa fa-safari'                 => array( 'group' => 'fa' ),
                'fa fa-sellsy'                 => array( 'group' => 'fa' ),
                'fa fa-shirtsinbulk'           => array( 'group' => 'fa' ),
                'fa fa-simplybuilt'            => array( 'group' => 'fa' ),
                'fa fa-skyatlas'               => array( 'group' => 'fa' ),
                'fa fa-skype'                  => array( 'group' => 'fa' ),
                'fa fa-slack'                  => array( 'group' => 'fa' ),
                'fa fa-slideshare'             => array( 'group' => 'fa' ),
                'fa fa-soundcloud'             => array( 'group' => 'fa' ),
                'fa fa-spotify'                => array( 'group' => 'fa' ),
                'fa fa-stack-exchange'         => array( 'group' => 'fa' ),
                'fa fa-stack-overflow'         => array( 'group' => 'fa' ),
                'fa fa-steam'                  => array( 'group' => 'fa' ),
                'fa fa-steam-square'           => array( 'group' => 'fa' ),
                'fa fa-stumbleupon'            => array( 'group' => 'fa' ),
                'fa fa-stumbleupon-circle'     => array( 'group' => 'fa' ),
                'fa fa-tencent-weibo'          => array( 'group' => 'fa' ),
                'fa fa-trello'                 => array( 'group' => 'fa' ),
                'fa fa-tripadvisor'            => array( 'group' => 'fa' ),
                'fa fa-tumblr'                 => array( 'group' => 'fa' ),
                'fa fa-tumblr-square'          => array( 'group' => 'fa' ),
                'fa fa-twitch'                 => array( 'group' => 'fa' ),
                'fa fa-twitter'                => array( 'group' => 'fa' ),
                'fa fa-twitter-square'         => array( 'group' => 'fa' ),
                'fa fa-viacoin'                => array( 'group' => 'fa' ),
                'fa fa-vimeo'                  => array( 'group' => 'fa' ),
                'fa fa-vimeo-square'           => array( 'group' => 'fa' ),
                'fa fa-vine'                   => array( 'group' => 'fa' ),
                'fa fa-vk'                     => array( 'group' => 'fa' ),
                'fa fa-wechat'                 => array( 'group' => 'fa' ),
                'fa fa-weibo'                  => array( 'group' => 'fa' ),
                'fa fa-weixin'                 => array( 'group' => 'fa' ),
                'fa fa-whatsapp'               => array( 'group' => 'fa' ),
                'fa fa-wikipedia-w'            => array( 'group' => 'fa' ),
                'fa fa-windows'                => array( 'group' => 'fa' ),
                'fa fa-wordpress'              => array( 'group' => 'fa' ),
                'fa fa-xing'                   => array( 'group' => 'fa' ),
                'fa fa-xing-square'            => array( 'group' => 'fa' ),
                'fa fa-y-combinator'           => array( 'group' => 'fa' ),
                'fa fa-y-combinator-square'    => array( 'group' => 'fa' ),
                'fa fa-yahoo'                  => array( 'group' => 'fa' ),
                'fa fa-yc'                     => array( 'group' => 'fa' ),
                'fa fa-yc-square'              => array( 'group' => 'fa' ),
                'fa fa-yelp'                   => array( 'group' => 'fa' ),
                'fa fa-youtube'                => array( 'group' => 'fa' ),
                'fa fa-youtube-square'         => array( 'group' => 'fa' ),
                'fa fa-h-square'               => array( 'group' => 'fa' ),
                'fa fa-hospital-o'             => array( 'group' => 'fa' ),
                'fa fa-medkit'                 => array( 'group' => 'fa' ),
                'fa fa-stethoscope'            => array( 'group' => 'fa' ),
                'fa fa-user-md'                => array( 'group' => 'fa' ),

                'icon-user' => array( 'group' => 'si' ),
                'icon-people' => array( 'group' => 'si' ),
                'icon-user-female' => array( 'group' => 'si' ),
                'icon-user-follow' => array( 'group' => 'si' ),
                'icon-user-following' => array( 'group' => 'si' ),
                'icon-user-unfollow' => array( 'group' => 'si' ),
                'icon-login' => array( 'group' => 'si' ),
                'icon-logout' => array( 'group' => 'si' ),
                'icon-emotsmile' => array( 'group' => 'si' ),
                'icon-phone' => array( 'group' => 'si' ),
                'icon-call-end' => array( 'group' => 'si' ),
                'icon-call-in' => array( 'group' => 'si' ),
                'icon-call-out' => array( 'group' => 'si' ),
                'icon-map' => array( 'group' => 'si' ),
                'icon-location-pin' => array( 'group' => 'si' ),
                'icon-direction' => array( 'group' => 'si' ),
                'icon-directions' => array( 'group' => 'si' ),
                'icon-compass' => array( 'group' => 'si' ),
                'icon-layers' => array( 'group' => 'si' ),
                'icon-menu' => array( 'group' => 'si' ),
                'icon-list' => array( 'group' => 'si' ),
                'icon-options-vertical' => array( 'group' => 'si' ),
                'icon-options' => array( 'group' => 'si' ),
                'icon-arrow-down' => array( 'group' => 'si' ),
                'icon-arrow-left' => array( 'group' => 'si' ),
                'icon-arrow-right' => array( 'group' => 'si' ),
                'icon-arrow-up' => array( 'group' => 'si' ),
                'icon-arrow-up-circle' => array( 'group' => 'si' ),
                'icon-arrow-left-circle' => array( 'group' => 'si' ),
                'icon-arrow-right-circle' => array( 'group' => 'si' ),
                'icon-arrow-down-circle' => array( 'group' => 'si' ),
                'icon-check' => array( 'group' => 'si' ),
                'icon-clock' => array( 'group' => 'si' ),
                'icon-plus' => array( 'group' => 'si' ),
                'icon-minus' => array( 'group' => 'si' ),
                'icon-close' => array( 'group' => 'si' ),
                'icon-event' => array( 'group' => 'si' ),
                'icon-exclamation' => array( 'group' => 'si' ),
                'icon-organization' => array( 'group' => 'si' ),
                'icon-trophy' => array( 'group' => 'si' ),
                'icon-screen-smartphone' => array( 'group' => 'si' ),
                'icon-screen-desktop' => array( 'group' => 'si' ),
                'icon-plane' => array( 'group' => 'si' ),
                'icon-notebook' => array( 'group' => 'si' ),
                'icon-mustache' => array( 'group' => 'si' ),
                'icon-mouse' => array( 'group' => 'si' ),
                'icon-magnet' => array( 'group' => 'si' ),
                'icon-energy' => array( 'group' => 'si' ),
                'icon-disc' => array( 'group' => 'si' ),
                'icon-cursor' => array( 'group' => 'si' ),
                'icon-cursor-move' => array( 'group' => 'si' ),
                'icon-crop' => array( 'group' => 'si' ),
                'icon-chemistry' => array( 'group' => 'si' ),
                'icon-speedometer' => array( 'group' => 'si' ),
                'icon-shield' => array( 'group' => 'si' ),
                'icon-screen-tablet' => array( 'group' => 'si' ),
                'icon-magic-wand' => array( 'group' => 'si' ),
                'icon-hourglass' => array( 'group' => 'si' ),
                'icon-graduation' => array( 'group' => 'si' ),
                'icon-ghost' => array( 'group' => 'si' ),
                'icon-game-controller' => array( 'group' => 'si' ),
                'icon-fire' => array( 'group' => 'si' ),
                'icon-eyeglass' => array( 'group' => 'si' ),
                'icon-envelope-open' => array( 'group' => 'si' ),
                'icon-envelope-letter' => array( 'group' => 'si' ),
                'icon-bell' => array( 'group' => 'si' ),
                'icon-badge' => array( 'group' => 'si' ),
                'icon-anchor' => array( 'group' => 'si' ),
                'icon-wallet' => array( 'group' => 'si' ),
                'icon-vector' => array( 'group' => 'si' ),
                'icon-speech' => array( 'group' => 'si' ),
                'icon-puzzle' => array( 'group' => 'si' ),
                'icon-printer' => array( 'group' => 'si' ),
                'icon-present' => array( 'group' => 'si' ),
                'icon-playlist' => array( 'group' => 'si' ),
                'icon-pin' => array( 'group' => 'si' ),
                'icon-picture' => array( 'group' => 'si' ),
                'icon-handbag' => array( 'group' => 'si' ),
                'icon-globe-alt' => array( 'group' => 'si' ),
                'icon-globe' => array( 'group' => 'si' ),
                'icon-folder-alt' => array( 'group' => 'si' ),
                'icon-folder' => array( 'group' => 'si' ),
                'icon-film' => array( 'group' => 'si' ),
                'icon-feed' => array( 'group' => 'si' ),
                'icon-drop' => array( 'group' => 'si' ),
                'icon-drawer' => array( 'group' => 'si' ),
                'icon-docs' => array( 'group' => 'si' ),
                'icon-doc' => array( 'group' => 'si' ),
                'icon-diamond' => array( 'group' => 'si' ),
                'icon-cup' => array( 'group' => 'si' ),
                'icon-calculator' => array( 'group' => 'si' ),
                'icon-bubbles' => array( 'group' => 'si' ),
                'icon-briefcase' => array( 'group' => 'si' ),
                'icon-book-open' => array( 'group' => 'si' ),
                'icon-basket-loaded' => array( 'group' => 'si' ),
                'icon-basket' => array( 'group' => 'si' ),
                'icon-bag' => array( 'group' => 'si' ),
                'icon-action-undo' => array( 'group' => 'si' ),
                'icon-action-redo' => array( 'group' => 'si' ),
                'icon-wrench' => array( 'group' => 'si' ),
                'icon-umbrella' => array( 'group' => 'si' ),
                'icon-trash' => array( 'group' => 'si' ),
                'icon-tag' => array( 'group' => 'si' ),
                'icon-support' => array( 'group' => 'si' ),
                'icon-frame' => array( 'group' => 'si' ),
                'icon-size-fullscreen' => array( 'group' => 'si' ),
                'icon-size-actual' => array( 'group' => 'si' ),
                'icon-shuffle' => array( 'group' => 'si' ),
                'icon-share-alt' => array( 'group' => 'si' ),
                'icon-share' => array( 'group' => 'si' ),
                'icon-rocket' => array( 'group' => 'si' ),
                'icon-question' => array( 'group' => 'si' ),
                'icon-pie-chart' => array( 'group' => 'si' ),
                'icon-pencil' => array( 'group' => 'si' ),
                'icon-note' => array( 'group' => 'si' ),
                'icon-loop' => array( 'group' => 'si' ),
                'icon-home' => array( 'group' => 'si' ),
                'icon-grid' => array( 'group' => 'si' ),
                'icon-graph' => array( 'group' => 'si' ),
                'icon-microphone' => array( 'group' => 'si' ),
                'icon-music-tone-alt' => array( 'group' => 'si' ),
                'icon-music-tone' => array( 'group' => 'si' ),
                'icon-earphones-alt' => array( 'group' => 'si' ),
                'icon-earphones' => array( 'group' => 'si' ),
                'icon-equalizer' => array( 'group' => 'si' ),
                'icon-like' => array( 'group' => 'si' ),
                'icon-dislike' => array( 'group' => 'si' ),
                'icon-control-start' => array( 'group' => 'si' ),
                'icon-control-rewind' => array( 'group' => 'si' ),
                'icon-control-play' => array( 'group' => 'si' ),
                'icon-control-pause' => array( 'group' => 'si' ),
                'icon-control-forward' => array( 'group' => 'si' ),
                'icon-control-end' => array( 'group' => 'si' ),
                'icon-volume-1' => array( 'group' => 'si' ),
                'icon-volume-2' => array( 'group' => 'si' ),
                'icon-volume-off' => array( 'group' => 'si' ),
                'icon-calendar' => array( 'group' => 'si' ),
                'icon-bulb' => array( 'group' => 'si' ),
                'icon-chart' => array( 'group' => 'si' ),
                'icon-ban' => array( 'group' => 'si' ),
                'icon-bubble' => array( 'group' => 'si' ),
                'icon-camrecorder' => array( 'group' => 'si' ),
                'icon-camera' => array( 'group' => 'si' ),
                'icon-cloud-download' => array( 'group' => 'si' ),
                'icon-cloud-upload' => array( 'group' => 'si' ),
                'icon-envelope' => array( 'group' => 'si' ),
                'icon-eye' => array( 'group' => 'si' ),
                'icon-flag' => array( 'group' => 'si' ),
                'icon-heart' => array( 'group' => 'si' ),
                'icon-info' => array( 'group' => 'si' ),
                'icon-key' => array( 'group' => 'si' ),
                'icon-link' => array( 'group' => 'si' ),
                'icon-lock' => array( 'group' => 'si' ),
                'icon-lock-open' => array( 'group' => 'si' ),
                'icon-magnifier' => array( 'group' => 'si' ),
                'icon-magnifier-add' => array( 'group' => 'si' ),
                'icon-magnifier-remove' => array( 'group' => 'si' ),
                'icon-paper-clip' => array( 'group' => 'si' ),
                'icon-paper-plane' => array( 'group' => 'si' ),
                'icon-power' => array( 'group' => 'si' ),
                'icon-refresh' => array( 'group' => 'si' ),
                'icon-reload' => array( 'group' => 'si' ),
                'icon-settings' => array( 'group' => 'si' ),
                'icon-star' => array( 'group' => 'si' ),
                'icon-symbol-female' => array( 'group' => 'si' ),
                'icon-symbol-male' => array( 'group' => 'si' ),
                'icon-target' => array( 'group' => 'si' ),
                'icon-credit-card' => array( 'group' => 'si' ),
                'icon-paypal' => array( 'group' => 'si' ),
                'icon-social-tumblr' => array( 'group' => 'si' ),
                'icon-social-twitter' => array( 'group' => 'si' ),
                'icon-social-facebook' => array( 'group' => 'si' ),
                'icon-social-instagram' => array( 'group' => 'si' ),
                'icon-social-linkedin' => array( 'group' => 'si' ),
                'icon-social-pinterest' => array( 'group' => 'si' ),
                'icon-social-github' => array( 'group' => 'si' ),
                'icon-social-google' => array( 'group' => 'si' ),
                'icon-social-reddit' => array( 'group' => 'si' ),
                'icon-social-skype' => array( 'group' => 'si' ),
                'icon-social-dribbble' => array( 'group' => 'si' ),
                'icon-social-behance' => array( 'group' => 'si' ),
                'icon-social-foursqare' => array( 'group' => 'si' ),
                'icon-social-soundcloud' => array( 'group' => 'si' ),
                'icon-social-spotify' => array( 'group' => 'si' ),
                'icon-social-stumbleupon' => array( 'group' => 'si' ),
                'icon-social-youtube' => array( 'group' => 'si' ),
                'icon-social-dropbox' => array( 'group' => 'si' ),
                'icon-social-vkontakte' => array( 'group' => 'si' ),
                'icon-social-steam' => array( 'group' => 'si' ),

                'ti-arrow-up'             => array( 'group' => 'ti' ),
                'ti-arrow-right'             => array( 'group' => 'ti' ),
                'ti-arrow-left'             => array( 'group' => 'ti' ),
                'ti-arrow-down'             => array( 'group' => 'ti' ),
                'ti-arrows-vertical'             => array( 'group' => 'ti' ),
                'ti-arrows-horizontal'             => array( 'group' => 'ti' ),
                'ti-angle-up'             => array( 'group' => 'ti' ),
                'ti-angle-right'             => array( 'group' => 'ti' ),
                'ti-angle-left'             => array( 'group' => 'ti' ),
                'ti-angle-down'             => array( 'group' => 'ti' ),
                'ti-angle-double-up'             => array( 'group' => 'ti' ),
                'ti-angle-double-right'             => array( 'group' => 'ti' ),
                'ti-angle-double-left'             => array( 'group' => 'ti' ),
                'ti-angle-double-down'             => array( 'group' => 'ti' ),
                'ti-move'             => array( 'group' => 'ti' ),
                'ti-fullscreen'             => array( 'group' => 'ti' ),
                'ti-arrow-top-right'             => array( 'group' => 'ti' ),
                'ti-arrow-top-left'             => array( 'group' => 'ti' ),
                'ti-arrow-circle-up'             => array( 'group' => 'ti' ),
                'ti-arrow-circle-right'             => array( 'group' => 'ti' ),
                'ti-arrow-circle-left'             => array( 'group' => 'ti' ),
                'ti-arrow-circle-down'             => array( 'group' => 'ti' ),
                'ti-arrows-corner'             => array( 'group' => 'ti' ),
                'ti-split-v'             => array( 'group' => 'ti' ),
                'ti-split-v-alt'             => array( 'group' => 'ti' ),
                'ti-split-h'             => array( 'group' => 'ti' ),
                'ti-hand-point-up'             => array( 'group' => 'ti' ),
                'ti-hand-point-right'             => array( 'group' => 'ti' ),
                'ti-hand-point-left'             => array( 'group' => 'ti' ),
                'ti-hand-point-down'             => array( 'group' => 'ti' ),
                'ti-back-right'             => array( 'group' => 'ti' ),
                'ti-back-left'             => array( 'group' => 'ti' ),
                'ti-exchange-vertical'             => array( 'group' => 'ti' ),
                'ti-wand'             => array( 'group' => 'ti' ),
                'ti-save'             => array( 'group' => 'ti' ),
                'ti-save-alt'             => array( 'group' => 'ti' ),
                'ti-direction'             => array( 'group' => 'ti' ),
                'ti-direction-alt'             => array( 'group' => 'ti' ),
                'ti-user'             => array( 'group' => 'ti' ),
                'ti-link'             => array( 'group' => 'ti' ),
                'ti-unlink'             => array( 'group' => 'ti' ),
                'ti-trash'             => array( 'group' => 'ti' ),
                'ti-target'             => array( 'group' => 'ti' ),
                'ti-tag'             => array( 'group' => 'ti' ),
                'ti-desktop'             => array( 'group' => 'ti' ),
                'ti-tablet'             => array( 'group' => 'ti' ),
                'ti-mobile'             => array( 'group' => 'ti' ),
                'ti-email'             => array( 'group' => 'ti' ),
                'ti-star'             => array( 'group' => 'ti' ),
                'ti-spray'             => array( 'group' => 'ti' ),
                'ti-signal'             => array( 'group' => 'ti' ),
                'ti-shopping-cart'             => array( 'group' => 'ti' ),
                'ti-shopping-cart-full'             => array( 'group' => 'ti' ),
                'ti-settings'             => array( 'group' => 'ti' ),
                'ti-search'             => array( 'group' => 'ti' ),
                'ti-zoom-in'             => array( 'group' => 'ti' ),
                'ti-zoom-out'             => array( 'group' => 'ti' ),
                'ti-cut'             => array( 'group' => 'ti' ),
                'ti-ruler'             => array( 'group' => 'ti' ),
                'ti-ruler-alt-2'             => array( 'group' => 'ti' ),
                'ti-ruler-pencil'             => array( 'group' => 'ti' ),
                'ti-ruler-alt'             => array( 'group' => 'ti' ),
                'ti-bookmark'             => array( 'group' => 'ti' ),
                'ti-bookmark-alt'             => array( 'group' => 'ti' ),
                'ti-reload'             => array( 'group' => 'ti' ),
                'ti-plus'             => array( 'group' => 'ti' ),
                'ti-minus'             => array( 'group' => 'ti' ),
                'ti-close'             => array( 'group' => 'ti' ),
                'ti-pin'             => array( 'group' => 'ti' ),
                'ti-pencil'             => array( 'group' => 'ti' ),
                'ti-pencil-alt'             => array( 'group' => 'ti' ),
                'ti-paint-roller'             => array( 'group' => 'ti' ),
                'ti-paint-bucket'             => array( 'group' => 'ti' ),
                'ti-na'             => array( 'group' => 'ti' ),
                'ti-medall'             => array( 'group' => 'ti' ),
                'ti-medall-alt'             => array( 'group' => 'ti' ),
                'ti-marker'             => array( 'group' => 'ti' ),
                'ti-marker-alt'             => array( 'group' => 'ti' ),
                'ti-lock'             => array( 'group' => 'ti' ),
                'ti-unlock'             => array( 'group' => 'ti' ),
                'ti-location-arrow'             => array( 'group' => 'ti' ),
                'ti-layout'             => array( 'group' => 'ti' ),
                'ti-layers'             => array( 'group' => 'ti' ),
                'ti-layers-alt'             => array( 'group' => 'ti' ),
                'ti-key'             => array( 'group' => 'ti' ),
                'ti-image'             => array( 'group' => 'ti' ),
                'ti-heart'             => array( 'group' => 'ti' ),
                'ti-heart-broken'             => array( 'group' => 'ti' ),
                'ti-hand-stop'             => array( 'group' => 'ti' ),
                'ti-hand-open'             => array( 'group' => 'ti' ),
                'ti-hand-drag'             => array( 'group' => 'ti' ),
                'ti-flag'             => array( 'group' => 'ti' ),
                'ti-flag-alt'             => array( 'group' => 'ti' ),
                'ti-flag-alt-2'             => array( 'group' => 'ti' ),
                'ti-eye'             => array( 'group' => 'ti' ),
                'ti-import'             => array( 'group' => 'ti' ),
                'ti-export'             => array( 'group' => 'ti' ),
                'ti-cup'             => array( 'group' => 'ti' ),
                'ti-crown'             => array( 'group' => 'ti' ),
                'ti-comments'             => array( 'group' => 'ti' ),
                'ti-comment'             => array( 'group' => 'ti' ),
                'ti-comment-alt'             => array( 'group' => 'ti' ),
                'ti-thought'             => array( 'group' => 'ti' ),
                'ti-clip'             => array( 'group' => 'ti' ),
                'ti-check'             => array( 'group' => 'ti' ),
                'ti-check-box'             => array( 'group' => 'ti' ),
                'ti-camera'             => array( 'group' => 'ti' ),
                'ti-announcement'             => array( 'group' => 'ti' ),
                'ti-brush'             => array( 'group' => 'ti' ),
                'ti-brush-alt'             => array( 'group' => 'ti' ),
                'ti-palette'             => array( 'group' => 'ti' ),
                'ti-briefcase'             => array( 'group' => 'ti' ),
                'ti-bolt'             => array( 'group' => 'ti' ),
                'ti-bolt-alt'             => array( 'group' => 'ti' ),
                'ti-blackboard'             => array( 'group' => 'ti' ),
                'ti-bag'             => array( 'group' => 'ti' ),
                'ti-world'             => array( 'group' => 'ti' ),
                'ti-wheelchair'             => array( 'group' => 'ti' ),
                'ti-car'             => array( 'group' => 'ti' ),
                'ti-truck'             => array( 'group' => 'ti' ),
                'ti-timer'             => array( 'group' => 'ti' ),
                'ti-ticket'             => array( 'group' => 'ti' ),
                'ti-thumb-up'             => array( 'group' => 'ti' ),
                'ti-thumb-down'             => array( 'group' => 'ti' ),
                'ti-stats-up'             => array( 'group' => 'ti' ),
                'ti-stats-down'             => array( 'group' => 'ti' ),
                'ti-shine'             => array( 'group' => 'ti' ),
                'ti-shift-right'             => array( 'group' => 'ti' ),
                'ti-shift-left'             => array( 'group' => 'ti' ),
                'ti-shift-right-alt'             => array( 'group' => 'ti' ),
                'ti-shift-left-alt'             => array( 'group' => 'ti' ),
                'ti-shield'             => array( 'group' => 'ti' ),
                'ti-notepad'             => array( 'group' => 'ti' ),
                'ti-server'             => array( 'group' => 'ti' ),
                'ti-pulse'             => array( 'group' => 'ti' ),
                'ti-printer'             => array( 'group' => 'ti' ),
                'ti-power-off'             => array( 'group' => 'ti' ),
                'ti-plug'             => array( 'group' => 'ti' ),
                'ti-pie-chart'             => array( 'group' => 'ti' ),
                'ti-panel'             => array( 'group' => 'ti' ),
                'ti-package'             => array( 'group' => 'ti' ),
                'ti-music'             => array( 'group' => 'ti' ),
                'ti-music-alt'             => array( 'group' => 'ti' ),
                'ti-mouse'             => array( 'group' => 'ti' ),
                'ti-mouse-alt'             => array( 'group' => 'ti' ),
                'ti-money'             => array( 'group' => 'ti' ),
                'ti-microphone'             => array( 'group' => 'ti' ),
                'ti-menu'             => array( 'group' => 'ti' ),
                'ti-menu-alt'             => array( 'group' => 'ti' ),
                'ti-map'             => array( 'group' => 'ti' ),
                'ti-map-alt'             => array( 'group' => 'ti' ),
                'ti-location-pin'             => array( 'group' => 'ti' ),
                'ti-light-bulb'             => array( 'group' => 'ti' ),
                'ti-info'             => array( 'group' => 'ti' ),
                'ti-infinite'             => array( 'group' => 'ti' ),
                'ti-id-badge'             => array( 'group' => 'ti' ),
                'ti-hummer'             => array( 'group' => 'ti' ),
                'ti-home'             => array( 'group' => 'ti' ),
                'ti-help'             => array( 'group' => 'ti' ),
                'ti-headphone'             => array( 'group' => 'ti' ),
                'ti-harddrives'             => array( 'group' => 'ti' ),
                'ti-harddrive'             => array( 'group' => 'ti' ),
                'ti-gift'             => array( 'group' => 'ti' ),
                'ti-game'             => array( 'group' => 'ti' ),
                'ti-filter'             => array( 'group' => 'ti' ),
                'ti-files'             => array( 'group' => 'ti' ),
                'ti-file'             => array( 'group' => 'ti' ),
                'ti-zip'             => array( 'group' => 'ti' ),
                'ti-folder'             => array( 'group' => 'ti' ),
                'ti-envelope'             => array( 'group' => 'ti' ),
                'ti-dashboard'             => array( 'group' => 'ti' ),
                'ti-cloud'             => array( 'group' => 'ti' ),
                'ti-cloud-up'             => array( 'group' => 'ti' ),
                'ti-cloud-down'             => array( 'group' => 'ti' ),
                'ti-clipboard'             => array( 'group' => 'ti' ),
                'ti-calendar'             => array( 'group' => 'ti' ),
                'ti-book'             => array( 'group' => 'ti' ),
                'ti-bell'             => array( 'group' => 'ti' ),
                'ti-basketball'             => array( 'group' => 'ti' ),
                'ti-bar-chart'             => array( 'group' => 'ti' ),
                'ti-bar-chart-alt'             => array( 'group' => 'ti' ),
                'ti-archive'             => array( 'group' => 'ti' ),
                'ti-anchor'             => array( 'group' => 'ti' ),
                'ti-alert'             => array( 'group' => 'ti' ),
                'ti-alarm-clock'             => array( 'group' => 'ti' ),
                'ti-agenda'             => array( 'group' => 'ti' ),
                'ti-write'             => array( 'group' => 'ti' ),
                'ti-wallet'             => array( 'group' => 'ti' ),
                'ti-video-clapper'             => array( 'group' => 'ti' ),
                'ti-video-camera'             => array( 'group' => 'ti' ),
                'ti-vector'             => array( 'group' => 'ti' ),
                'ti-support'             => array( 'group' => 'ti' ),
                'ti-stamp'             => array( 'group' => 'ti' ),
                'ti-slice'             => array( 'group' => 'ti' ),
                'ti-shortcode'             => array( 'group' => 'ti' ),
                'ti-receipt'             => array( 'group' => 'ti' ),
                'ti-pin2'             => array( 'group' => 'ti' ),
                'ti-pin-alt'             => array( 'group' => 'ti' ),
                'ti-pencil-alt2'             => array( 'group' => 'ti' ),
                'ti-eraser'             => array( 'group' => 'ti' ),
                'ti-more'             => array( 'group' => 'ti' ),
                'ti-more-alt'             => array( 'group' => 'ti' ),
                'ti-microphone-alt'             => array( 'group' => 'ti' ),
                'ti-magnet'             => array( 'group' => 'ti' ),
                'ti-line-double'             => array( 'group' => 'ti' ),
                'ti-line-dotted'             => array( 'group' => 'ti' ),
                'ti-line-dashed'             => array( 'group' => 'ti' ),
                'ti-ink-pen'             => array( 'group' => 'ti' ),
                'ti-info-alt'             => array( 'group' => 'ti' ),
                'ti-help-alt'             => array( 'group' => 'ti' ),
                'ti-headphone-alt'             => array( 'group' => 'ti' ),
                'ti-gallery'             => array( 'group' => 'ti' ),
                'ti-face-smile'             => array( 'group' => 'ti' ),
                'ti-face-sad'             => array( 'group' => 'ti' ),
                'ti-credit-card'             => array( 'group' => 'ti' ),
                'ti-comments-smiley'             => array( 'group' => 'ti' ),
                'ti-time'             => array( 'group' => 'ti' ),
                'ti-share'             => array( 'group' => 'ti' ),
                'ti-share-alt'             => array( 'group' => 'ti' ),
                'ti-rocket'             => array( 'group' => 'ti' ),
                'ti-new-window'             => array( 'group' => 'ti' ),
                'ti-rss'             => array( 'group' => 'ti' ),
                'ti-rss-alt'             => array( 'group' => 'ti' ),
                'ti-control-stop'             => array( 'group' => 'ti' ),
                'ti-control-shuffle'             => array( 'group' => 'ti' ),
                'ti-control-play'             => array( 'group' => 'ti' ),
                'ti-control-pause'             => array( 'group' => 'ti' ),
                'ti-control-forward'             => array( 'group' => 'ti' ),
                'ti-control-backward'             => array( 'group' => 'ti' ),
                'ti-volume'             => array( 'group' => 'ti' ),
                'ti-control-skip-forward'             => array( 'group' => 'ti' ),
                'ti-control-skip-backward'             => array( 'group' => 'ti' ),
                'ti-control-record'             => array( 'group' => 'ti' ),
                'ti-control-eject'             => array( 'group' => 'ti' ),
                'ti-paragraph'             => array( 'group' => 'ti' ),
                'ti-uppercase'             => array( 'group' => 'ti' ),
                'ti-underline'             => array( 'group' => 'ti' ),
                'ti-text'             => array( 'group' => 'ti' ),
                'ti-Italic'             => array( 'group' => 'ti' ),
                'ti-smallcap'             => array( 'group' => 'ti' ),
                'ti-list'             => array( 'group' => 'ti' ),
                'ti-list-ol'             => array( 'group' => 'ti' ),
                'ti-align-right'             => array( 'group' => 'ti' ),
                'ti-align-left'             => array( 'group' => 'ti' ),
                'ti-align-justify'             => array( 'group' => 'ti' ),
                'ti-align-center'             => array( 'group' => 'ti' ),
                'ti-quote-right'             => array( 'group' => 'ti' ),
                'ti-quote-left'             => array( 'group' => 'ti' ),
                'ti-layout-width-full'             => array( 'group' => 'ti' ),
                'ti-layout-width-default'             => array( 'group' => 'ti' ),
                'ti-layout-width-default-alt'             => array( 'group' => 'ti' ),
                'ti-layout-tab'             => array( 'group' => 'ti' ),
                'ti-layout-tab-window'             => array( 'group' => 'ti' ),
                'ti-layout-tab-v'             => array( 'group' => 'ti' ),
                'ti-layout-tab-min'             => array( 'group' => 'ti' ),
                'ti-layout-slider'             => array( 'group' => 'ti' ),
                'ti-layout-slider-alt'             => array( 'group' => 'ti' ),
                'ti-layout-sidebar-right'             => array( 'group' => 'ti' ),
                'ti-layout-sidebar-none'             => array( 'group' => 'ti' ),
                'ti-layout-sidebar-left'             => array( 'group' => 'ti' ),
                'ti-layout-placeholder'             => array( 'group' => 'ti' ),
                'ti-layout-menu'             => array( 'group' => 'ti' ),
                'ti-layout-menu-v'             => array( 'group' => 'ti' ),
                'ti-layout-menu-separated'             => array( 'group' => 'ti' ),
                'ti-layout-menu-full'             => array( 'group' => 'ti' ),
                'ti-layout-media-right'             => array( 'group' => 'ti' ),
                'ti-layout-media-right-alt'             => array( 'group' => 'ti' ),
                'ti-layout-media-overlay'             => array( 'group' => 'ti' ),
                'ti-layout-media-overlay-alt'             => array( 'group' => 'ti' ),
                'ti-layout-media-overlay-alt-2'             => array( 'group' => 'ti' ),
                'ti-layout-media-left'             => array( 'group' => 'ti' ),
                'ti-layout-media-left-alt'             => array( 'group' => 'ti' ),
                'ti-layout-media-center'             => array( 'group' => 'ti' ),
                'ti-layout-media-center-alt'             => array( 'group' => 'ti' ),
                'ti-layout-list-thumb'             => array( 'group' => 'ti' ),
                'ti-layout-list-thumb-alt'             => array( 'group' => 'ti' ),
                'ti-layout-list-post'             => array( 'group' => 'ti' ),
                'ti-layout-list-large-image'             => array( 'group' => 'ti' ),
                'ti-layout-line-solid'             => array( 'group' => 'ti' ),
                'ti-layout-grid4'             => array( 'group' => 'ti' ),
                'ti-layout-grid3'             => array( 'group' => 'ti' ),
                'ti-layout-grid2'             => array( 'group' => 'ti' ),
                'ti-layout-grid2-thumb'             => array( 'group' => 'ti' ),
                'ti-layout-cta-right'             => array( 'group' => 'ti' ),
                'ti-layout-cta-left'             => array( 'group' => 'ti' ),
                'ti-layout-cta-center'             => array( 'group' => 'ti' ),
                'ti-layout-cta-btn-right'             => array( 'group' => 'ti' ),
                'ti-layout-cta-btn-left'             => array( 'group' => 'ti' ),
                'ti-layout-column4'             => array( 'group' => 'ti' ),
                'ti-layout-column3'             => array( 'group' => 'ti' ),
                'ti-layout-column2'             => array( 'group' => 'ti' ),
                'ti-layout-accordion-separated'             => array( 'group' => 'ti' ),
                'ti-layout-accordion-merged'             => array( 'group' => 'ti' ),
                'ti-layout-accordion-list'             => array( 'group' => 'ti' ),
                'ti-widgetized'             => array( 'group' => 'ti' ),
                'ti-widget'             => array( 'group' => 'ti' ),
                'ti-widget-alt'             => array( 'group' => 'ti' ),
                'ti-view-list'             => array( 'group' => 'ti' ),
                'ti-view-list-alt'             => array( 'group' => 'ti' ),
                'ti-view-grid'             => array( 'group' => 'ti' ),
                'ti-upload'             => array( 'group' => 'ti' ),
                'ti-download'             => array( 'group' => 'ti' ),
                'ti-loop'             => array( 'group' => 'ti' ),
                'ti-layout-sidebar-2'             => array( 'group' => 'ti' ),
                'ti-layout-grid4-alt'             => array( 'group' => 'ti' ),
                'ti-layout-grid3-alt'             => array( 'group' => 'ti' ),
                'ti-layout-grid2-alt'             => array( 'group' => 'ti' ),
                'ti-layout-column4-alt'             => array( 'group' => 'ti' ),
                'ti-layout-column3-alt'             => array( 'group' => 'ti' ),
                'ti-layout-column2-alt'             => array( 'group' => 'ti' ),
                'ti-flickr'             => array( 'group' => 'ti' ),
                'ti-flickr-alt'             => array( 'group' => 'ti' ),
                'ti-instagram'             => array( 'group' => 'ti' ),
                'ti-google'             => array( 'group' => 'ti' ),
                'ti-github'             => array( 'group' => 'ti' ),
                'ti-facebook'             => array( 'group' => 'ti' ),
                'ti-dropbox'             => array( 'group' => 'ti' ),
                'ti-dropbox-alt'             => array( 'group' => 'ti' ),
                'ti-dribbble'             => array( 'group' => 'ti' ),
                'ti-apple'             => array( 'group' => 'ti' ),
                'ti-android'             => array( 'group' => 'ti' ),
                'ti-yahoo'             => array( 'group' => 'ti' ),
                'ti-trello'             => array( 'group' => 'ti' ),
                'ti-stack-overflow'             => array( 'group' => 'ti' ),
                'ti-soundcloud'             => array( 'group' => 'ti' ),
                'ti-sharethis'             => array( 'group' => 'ti' ),
                'ti-sharethis-alt'             => array( 'group' => 'ti' ),
                'ti-reddit'             => array( 'group' => 'ti' ),
                'ti-microsoft'             => array( 'group' => 'ti' ),
                'ti-microsoft-alt'             => array( 'group' => 'ti' ),
                'ti-linux'             => array( 'group' => 'ti' ),
                'ti-jsfiddle'             => array( 'group' => 'ti' ),
                'ti-joomla'             => array( 'group' => 'ti' ),
                'ti-html5'             => array( 'group' => 'ti' ),
                'ti-css3'             => array( 'group' => 'ti' ),
                'ti-drupal'             => array( 'group' => 'ti' ),
                'ti-wordpress'             => array( 'group' => 'ti' ),
                'ti-tumblr'             => array( 'group' => 'ti' ),
                'ti-tumblr-alt'             => array( 'group' => 'ti' ),
                'ti-skype'             => array( 'group' => 'ti' ),
                'ti-youtube'             => array( 'group' => 'ti' ),
                'ti-vimeo'             => array( 'group' => 'ti' ),
                'ti-vimeo-alt'             => array( 'group' => 'ti' ),
                'ti-twitter'             => array( 'group' => 'ti' ),
                'ti-twitter-alt'             => array( 'group' => 'ti' ),
                'ti-linkedin'             => array( 'group' => 'ti' ),
                'ti-pinterest'             => array( 'group' => 'ti' ),
                'ti-pinterest-alt'             => array( 'group' => 'ti' ),
                'ti-themify-logo'             => array( 'group' => 'ti' ),
                'ti-themify-favicon'             => array( 'group' => 'ti' ),
                'ti-themify-favicon-alt'             => array( 'group' => 'ti' ),

                'pe-7s-album' => array( 'group' => 'pi' ),
                'pe-7s-arc' => array( 'group' => 'pi' ),
                'pe-7s-back-2' => array( 'group' => 'pi' ),
                'pe-7s-bandaid' => array( 'group' => 'pi' ),
                'pe-7s-car' => array( 'group' => 'pi' ),
                'pe-7s-diamond' => array( 'group' => 'pi' ),
                'pe-7s-door-lock' => array( 'group' => 'pi' ),
                'pe-7s-eyedropper' => array( 'group' => 'pi' ),
                'pe-7s-female' => array( 'group' => 'pi' ),
                'pe-7s-gym' => array( 'group' => 'pi' ),
                'pe-7s-hammer' => array( 'group' => 'pi' ),
                'pe-7s-headphones' => array( 'group' => 'pi' ),
                'pe-7s-helm' => array( 'group' => 'pi' ),
                'pe-7s-hourglass' => array( 'group' => 'pi' ),
                'pe-7s-leaf' => array( 'group' => 'pi' ),
                'pe-7s-magic-wand' => array( 'group' => 'pi' ),
                'pe-7s-male' => array( 'group' => 'pi' ),
                'pe-7s-map-2' => array( 'group' => 'pi' ),
                'pe-7s-next-2' => array( 'group' => 'pi' ),
                'pe-7s-paint-bucket' => array( 'group' => 'pi' ),
                'pe-7s-pendrive' => array( 'group' => 'pi' ),
                'pe-7s-photo' => array( 'group' => 'pi' ),
                'pe-7s-piggy' => array( 'group' => 'pi' ),
                'pe-7s-plugin' => array( 'group' => 'pi' ),
                'pe-7s-refresh-2' => array( 'group' => 'pi' ),
                'pe-7s-rocket' => array( 'group' => 'pi' ),
                'pe-7s-settings' => array( 'group' => 'pi' ),
                'pe-7s-shield' => array( 'group' => 'pi' ),
                'pe-7s-smile' => array( 'group' => 'pi' ),
                'pe-7s-usb' => array( 'group' => 'pi' ),
                'pe-7s-vector' => array( 'group' => 'pi' ),
                'pe-7s-wine' => array( 'group' => 'pi' ),
                'pe-7s-cloud-upload' => array( 'group' => 'pi' ),
                'pe-7s-cash' => array( 'group' => 'pi' ),
                'pe-7s-close' => array( 'group' => 'pi' ),
                'pe-7s-bluetooth' => array( 'group' => 'pi' ),
                'pe-7s-cloud-download' => array( 'group' => 'pi' ),
                'pe-7s-way' => array( 'group' => 'pi' ),
                'pe-7s-close-circle' => array( 'group' => 'pi' ),
                'pe-7s-id' => array( 'group' => 'pi' ),
                'pe-7s-angle-up' => array( 'group' => 'pi' ),
                'pe-7s-wristwatch' => array( 'group' => 'pi' ),
                'pe-7s-angle-up-circle' => array( 'group' => 'pi' ),
                'pe-7s-world' => array( 'group' => 'pi' ),
                'pe-7s-angle-right' => array( 'group' => 'pi' ),
                'pe-7s-volume' => array( 'group' => 'pi' ),
                'pe-7s-angle-right-circle' => array( 'group' => 'pi' ),
                'pe-7s-users' => array( 'group' => 'pi' ),
                'pe-7s-angle-left' => array( 'group' => 'pi' ),
                'pe-7s-user-female' => array( 'group' => 'pi' ),
                'pe-7s-angle-left-circle' => array( 'group' => 'pi' ),
                'pe-7s-up-arrow' => array( 'group' => 'pi' ),
                'pe-7s-angle-down' => array( 'group' => 'pi' ),
                'pe-7s-switch' => array( 'group' => 'pi' ),
                'pe-7s-angle-down-circle' => array( 'group' => 'pi' ),
                'pe-7s-scissors' => array( 'group' => 'pi' ),
                'pe-7s-wallet' => array( 'group' => 'pi' ),
                'pe-7s-safe' => array( 'group' => 'pi' ),
                'pe-7s-volume2' => array( 'group' => 'pi' ),
                'pe-7s-volume1' => array( 'group' => 'pi' ),
                'pe-7s-voicemail' => array( 'group' => 'pi' ),
                'pe-7s-video' => array( 'group' => 'pi' ),
                'pe-7s-user' => array( 'group' => 'pi' ),
                'pe-7s-upload' => array( 'group' => 'pi' ),
                'pe-7s-unlock' => array( 'group' => 'pi' ),
                'pe-7s-umbrella' => array( 'group' => 'pi' ),
                'pe-7s-trash' => array( 'group' => 'pi' ),
                'pe-7s-tools' => array( 'group' => 'pi' ),
                'pe-7s-timer' => array( 'group' => 'pi' ),
                'pe-7s-ticket' => array( 'group' => 'pi' ),
                'pe-7s-target' => array( 'group' => 'pi' ),
                'pe-7s-sun' => array( 'group' => 'pi' ),
                'pe-7s-study' => array( 'group' => 'pi' ),
                'pe-7s-stopwatch' => array( 'group' => 'pi' ),
                'pe-7s-star' => array( 'group' => 'pi' ),
                'pe-7s-speaker' => array( 'group' => 'pi' ),
                'pe-7s-signal' => array( 'group' => 'pi' ),
                'pe-7s-shuffle' => array( 'group' => 'pi' ),
                'pe-7s-shopbag' => array( 'group' => 'pi' ),
                'pe-7s-share' => array( 'group' => 'pi' ),
                'pe-7s-server' => array( 'group' => 'pi' ),
                'pe-7s-search' => array( 'group' => 'pi' ),
                'pe-7s-film' => array( 'group' => 'pi' ),
                'pe-7s-science' => array( 'group' => 'pi' ),
                'pe-7s-disk' => array( 'group' => 'pi' ),
                'pe-7s-ribbon' => array( 'group' => 'pi' ),
                'pe-7s-repeat' => array( 'group' => 'pi' ),
                'pe-7s-refresh' => array( 'group' => 'pi' ),
                'pe-7s-add-user' => array( 'group' => 'pi' ),
                'pe-7s-refresh-cloud' => array( 'group' => 'pi' ),
                'pe-7s-paperclip' => array( 'group' => 'pi' ),
                'pe-7s-radio' => array( 'group' => 'pi' ),
                'pe-7s-note2' => array( 'group' => 'pi' ),
                'pe-7s-print' => array( 'group' => 'pi' ),
                'pe-7s-network' => array( 'group' => 'pi' ),
                'pe-7s-prev' => array( 'group' => 'pi' ),
                'pe-7s-mute' => array( 'group' => 'pi' ),
                'pe-7s-power' => array( 'group' => 'pi' ),
                'pe-7s-medal' => array( 'group' => 'pi' ),
                'pe-7s-portfolio' => array( 'group' => 'pi' ),
                'pe-7s-like2' => array( 'group' => 'pi' ),
                'pe-7s-plus' => array( 'group' => 'pi' ),
                'pe-7s-left-arrow' => array( 'group' => 'pi' ),
                'pe-7s-play' => array( 'group' => 'pi' ),
                'pe-7s-key' => array( 'group' => 'pi' ),
                'pe-7s-plane' => array( 'group' => 'pi' ),
                'pe-7s-joy' => array( 'group' => 'pi' ),
                'pe-7s-photo-gallery' => array( 'group' => 'pi' ),
                'pe-7s-pin' => array( 'group' => 'pi' ),
                'pe-7s-phone' => array( 'group' => 'pi' ),
                'pe-7s-plug' => array( 'group' => 'pi' ),
                'pe-7s-pen' => array( 'group' => 'pi' ),
                'pe-7s-right-arrow' => array( 'group' => 'pi' ),
                'pe-7s-paper-plane' => array( 'group' => 'pi' ),
                'pe-7s-delete-user' => array( 'group' => 'pi' ),
                'pe-7s-paint' => array( 'group' => 'pi' ),
                'pe-7s-bottom-arrow' => array( 'group' => 'pi' ),
                'pe-7s-notebook' => array( 'group' => 'pi' ),
                'pe-7s-note' => array( 'group' => 'pi' ),
                'pe-7s-next' => array( 'group' => 'pi' ),
                'pe-7s-news-paper' => array( 'group' => 'pi' ),
                'pe-7s-musiclist' => array( 'group' => 'pi' ),
                'pe-7s-music' => array( 'group' => 'pi' ),
                'pe-7s-mouse' => array( 'group' => 'pi' ),
                'pe-7s-more' => array( 'group' => 'pi' ),
                'pe-7s-moon' => array( 'group' => 'pi' ),
                'pe-7s-monitor' => array( 'group' => 'pi' ),
                'pe-7s-micro' => array( 'group' => 'pi' ),
                'pe-7s-menu' => array( 'group' => 'pi' ),
                'pe-7s-map' => array( 'group' => 'pi' ),
                'pe-7s-map-marker' => array( 'group' => 'pi' ),
                'pe-7s-mail' => array( 'group' => 'pi' ),
                'pe-7s-mail-open' => array( 'group' => 'pi' ),
                'pe-7s-mail-open-file' => array( 'group' => 'pi' ),
                'pe-7s-magnet' => array( 'group' => 'pi' ),
                'pe-7s-loop' => array( 'group' => 'pi' ),
                'pe-7s-look' => array( 'group' => 'pi' ),
                'pe-7s-lock' => array( 'group' => 'pi' ),
                'pe-7s-lintern' => array( 'group' => 'pi' ),
                'pe-7s-link' => array( 'group' => 'pi' ),
                'pe-7s-like' => array( 'group' => 'pi' ),
                'pe-7s-light' => array( 'group' => 'pi' ),
                'pe-7s-less' => array( 'group' => 'pi' ),
                'pe-7s-keypad' => array( 'group' => 'pi' ),
                'pe-7s-junk' => array( 'group' => 'pi' ),
                'pe-7s-info' => array( 'group' => 'pi' ),
                'pe-7s-home' => array( 'group' => 'pi' ),
                'pe-7s-help2' => array( 'group' => 'pi' ),
                'pe-7s-help1' => array( 'group' => 'pi' ),
                'pe-7s-graph3' => array( 'group' => 'pi' ),
                'pe-7s-graph2' => array( 'group' => 'pi' ),
                'pe-7s-graph1' => array( 'group' => 'pi' ),
                'pe-7s-graph' => array( 'group' => 'pi' ),
                'pe-7s-global' => array( 'group' => 'pi' ),
                'pe-7s-gleam' => array( 'group' => 'pi' ),
                'pe-7s-glasses' => array( 'group' => 'pi' ),
                'pe-7s-gift' => array( 'group' => 'pi' ),
                'pe-7s-folder' => array( 'group' => 'pi' ),
                'pe-7s-flag' => array( 'group' => 'pi' ),
                'pe-7s-filter' => array( 'group' => 'pi' ),
                'pe-7s-file' => array( 'group' => 'pi' ),
                'pe-7s-expand1' => array( 'group' => 'pi' ),
                'pe-7s-exapnd2' => array( 'group' => 'pi' ),
                'pe-7s-edit' => array( 'group' => 'pi' ),
                'pe-7s-drop' => array( 'group' => 'pi' ),
                'pe-7s-drawer' => array( 'group' => 'pi' ),
                'pe-7s-download' => array( 'group' => 'pi' ),
                'pe-7s-display2' => array( 'group' => 'pi' ),
                'pe-7s-display1' => array( 'group' => 'pi' ),
                'pe-7s-diskette' => array( 'group' => 'pi' ),
                'pe-7s-date' => array( 'group' => 'pi' ),
                'pe-7s-cup' => array( 'group' => 'pi' ),
                'pe-7s-culture' => array( 'group' => 'pi' ),
                'pe-7s-crop' => array( 'group' => 'pi' ),
                'pe-7s-credit' => array( 'group' => 'pi' ),
                'pe-7s-copy-file' => array( 'group' => 'pi' ),
                'pe-7s-config' => array( 'group' => 'pi' ),
                'pe-7s-compass' => array( 'group' => 'pi' ),
                'pe-7s-comment' => array( 'group' => 'pi' ),
                'pe-7s-coffee' => array( 'group' => 'pi' ),
                'pe-7s-cloud' => array( 'group' => 'pi' ),
                'pe-7s-clock' => array( 'group' => 'pi' ),
                'pe-7s-check' => array( 'group' => 'pi' ),
                'pe-7s-chat' => array( 'group' => 'pi' ),
                'pe-7s-cart' => array( 'group' => 'pi' ),
                'pe-7s-camera' => array( 'group' => 'pi' ),
                'pe-7s-call' => array( 'group' => 'pi' ),
                'pe-7s-calculator' => array( 'group' => 'pi' ),
                'pe-7s-browser' => array( 'group' => 'pi' ),
                'pe-7s-box2' => array( 'group' => 'pi' ),
                'pe-7s-box1' => array( 'group' => 'pi' ),
                'pe-7s-bookmarks' => array( 'group' => 'pi' ),
                'pe-7s-bicycle' => array( 'group' => 'pi' ),
                'pe-7s-bell' => array( 'group' => 'pi' ),
                'pe-7s-battery' => array( 'group' => 'pi' ),
                'pe-7s-ball' => array( 'group' => 'pi' ),
                'pe-7s-back' => array( 'group' => 'pi' ),
                'pe-7s-attention' => array( 'group' => 'pi' ),
                'pe-7s-anchor' => array( 'group' => 'pi' ),
                'pe-7s-albums' => array( 'group' => 'pi' ),
                'pe-7s-alarm' => array( 'group' => 'pi' ),
                'pe-7s-airplay' => array( 'group' => 'pi' ),
            ),
        );

        return $sets;
    }
    add_filter('fw_option_type_icon_sets', 'jevelin_icon_set');
}


/**
 * Admin panel - load styles and scripts in theme options
 */
if( !function_exists('jevelin_admin_enqueue_styles') && is_admin() && isset( $_GET['page'] ) && $_GET['page'] == 'fw-settings' ) :

    function jevelin_admin_enqueue_styles() {
        wp_enqueue_style( 'jevelin-theme-options', get_template_directory_uri() . '/css/admin/theme-options.css' );
        wp_enqueue_script( 'jevelin-jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array( 'jquery' ) );
        wp_enqueue_script( 'jevelin-theme-options', get_template_directory_uri() . '/js/theme-options.js', array( 'jquery' ) );
    }
    add_action( 'admin_enqueue_scripts', 'jevelin_admin_enqueue_styles' );

endif;


/**
 * Admin panel - load custom styles for revolution slider plugin
 */
if( !function_exists('jevelin_admin_enqueue_styles_revslider') && is_admin() && isset( $_GET['page'] ) && $_GET['page'] == 'revslider' ) :

    function jevelin_admin_enqueue_styles_revslider() {
        wp_enqueue_style( 'jevelin-theme-options', get_template_directory_uri() . '/css/admin/revslider.css' );
    }
    add_action( 'admin_enqueue_scripts', 'jevelin_admin_enqueue_styles_revslider' );

endif;


/**
 * Admin panel - load styles in posts
 */
if( !function_exists('jevelin_admin_enqueue_styles') && is_admin() && isset( $_GET['post'] ) && $_GET['post'] > 0 ) :

    function jevelin_admin_enqueue_styles() {
        wp_enqueue_style( 'jevelin-theme-options', get_template_directory_uri() . '/css/admin/theme-options-editor.css' );
    }
    add_action( 'admin_enqueue_scripts', 'jevelin_admin_enqueue_styles' );

endif;


/**
 * Admin panel - load icons
 */
if ( ! function_exists( 'jevelin_admin_styling' ) ) :
    function jevelin_load_custom_wp_admin_style() {
        wp_enqueue_style( 'jevelin-simple-icons', get_template_directory_uri() . '/css/simple-line-icons.css', false, '1.0.0' );
        wp_enqueue_style( 'jevelin-themify-icons', get_template_directory_uri() . '/css/themify-icons.css', false, '1.0.0' );
        wp_enqueue_style( 'jevelin-pixeden-icons', get_template_directory_uri() . '/css/pe-icon-7-stroke.css', false, '1.0.0' );
    }
    add_action( 'admin_enqueue_scripts', 'jevelin_load_custom_wp_admin_style' );
endif;


/**
 * Admin panel - styling
 */
if ( ! function_exists( 'jevelin_admin_styling' ) ) :
    add_action('admin_head', 'jevelin_admin_styling');
    function jevelin_admin_styling() { ?>
        <script type="text/javascript">
            function htmlDecode(value) {
               return (typeof value === 'undefined') ? '' : jQuery('<div/>').html(value).text();
            }

            jQuery(function($){
                /* Improve Unyson page builder ease of use */
                <?php if( isset( $_GET['post'] ) && isset( $_GET['action'] ) && $_GET['post'] > 0 && $_GET['action'] == 'edit' ) : ?>
                    $(window).load(function (){
                        var builder_scrollTop = localStorage.getItem('fw_builder_scroll');
                        if( builder_scrollTop != 'null' && builder_scrollTop > 0 ) {
                            $(window).scrollTop( builder_scrollTop );
                            setTimeout(function(){ $(window).scrollTop( builder_scrollTop ); }, 950);
                            setTimeout(function(){ $(window).scrollTop( builder_scrollTop ); }, 1500);
                            var builder_scrollTop_active = 0;
                            $(window).blur(function() {
                                $(window).focus(function() {
                                    if( builder_scrollTop_active == 0) {
                                        builder_scrollTop_active++;
                                        $(window).scrollTop( builder_scrollTop );
                                        setTimeout(function(){ $(window).scrollTop( builder_scrollTop ); }, 100);
                                    }
                                });
                            });
                            $(window).focus(function() {
                                builder_scrollTop_active++;
                            });
                            localStorage.fw_builder_scroll = 0;
                        }

                        jQuery( 'body' ).on( 'click', '.fw-builder-header-tools', function( e ) {
                            if( $(e.target).hasClass('fw-builder-header-post-save-button') ) {
                                localStorage.fw_builder_scroll = $(window).scrollTop();
                            }
                        });
                    });
                <?php endif; ?>


                var timeoutId;
                $(document).on('widget-updated widget-added', function(){
                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(function(){ // wait a few milliseconds for html replace to finish
                        fwEvents.trigger('fw:options:init', { $elements: $('#widgets-right .fw-theme-admin-widget-wrap') });
                    }, 100);
                });

                $('.mega-menu-column-new-row').parent().parent().remove();
                var post_format = $('input[name=post_format]:checked', '#post-formats-select').val();
                if( post_format != 0 ) {
                    $('#fw-options-box-post-format-'+post_format).show();
                }

                $('input[name=post_format]').change(function() {
                    $('#fw-options-box-post-format-0').hide();
                    $('#fw-options-box-post-format-gallery').hide();
                    $('#fw-options-box-post-format-quote').hide();
                    $('#fw-options-box-post-format-link').hide();
                    $('#fw-options-box-post-format-video').hide();
                    $('#fw-options-box-post-format-audio').hide();
                    $('#fw-options-box-post-format-'+$(this).val()).show();
                });

                $('.sh-demo-install-issues-button').on('click', function(){
                    $('.sh-demo-install-issues').toggle('fast');
                });

                /* Visual Composer Comptatibility Mode to fix Unyson Builder Related isues */
		        <?php if( is_plugin_active( 'js_composer/js_composer.php' ) ) : ?>
		        	console.log('VC Mode');
			    	if( $('#page_template').val() == 'page-vc.php' ) {
						jQuery(window).load(function () {
			                setTimeout(function(){
								jQuery('.button.button-primary.page-builder-hide-button').trigger('click');
							}, 1000);

							if( jQuery('.composer-switch').hasClass('vc_backend-status') ) {
								jQuery('.wp-editor-expand').css( 'visibility', 'hidden' ).css( 'height', '0' );
								jQuery('#fw-options-box-page-builder-box').css( 'visibility', 'hidden' ).css( 'height', '0' );
							}
						});
			    	}

			    	$("#page_template").on('change', function() {
			    		if( $('#page_template').val() == 'page-vc.php' && jQuery('.composer-switch').hasClass('vc_backend-status') ) {
			    			$('#fw-option-input--page-builder').remove();
			                jQuery('.button.button-primary.page-builder-hide-button').trigger('click');
							if( jQuery('.composer-switch').hasClass('vc_backend-status') ) {
								jQuery('.wp-editor-expand').css( 'visibility', 'hidden' ).css( 'height', '0' );
								jQuery('#fw-options-box-page-builder-box').css( 'visibility', 'hidden' ).css( 'height', '0' );
							}
			    		}
			    	});
		    	<?php endif; ?>

            });
        </script>
        <style type="text/css">
            .fw-shortcode-item .fw-ext-builder-icon:before {
                font-family: "themify";
            }

            .widget-inside .fw-backend-option-type-multi-picker .fw-backend-option {
                padding-left: 0px!important;
                padding-right: 0px!important;
            }

            .fw-extensions-list .not-compatible,
            #fw-extensions-list-available .toggle-not-compat-ext-btn-wrapper {
                display: none!important;
            }

            .sh-demo-install-descr {
                padding-top: 4px;
                padding-bottom: 4px;
            }

            .sh-demo-install-issues-button {
                display: inline-block;
                position: relative;
                background-color: #40413c;
                color: #fff!important;
                text-transform: uppercase;
                font-weight: 600;
                border-radius: 100px;
                height: 40px;
                line-height: 38px;
                text-decoration: none;
                border: none;
                font-size: 13px;
                text-shadow: none;
                padding: 0 22px;
                margin: 15px 0;
                transition: 0.3s all ease-in-out;
                outline: none;
                -webkit-box-shadow: none!important;
                box-shadow: none!important;
            }

            .sh-demo-install-issues-button:hover,
            .sh-demo-install-issues-button:focus {
                background-color: #353531;
                outline: none!important;
            }

            .sh-demo-install-issues {
                display: none;
                border: 2px solid #d6d6d6;
                padding: 25px;
                background-color: #fff;
                margin: 15px 0;
            }

            .sh-demo-install-issues,
            .sh-demo-install-issues * {
                font-size: 14px;
            }

            .sh-demo-install-issues-intro {
                margin-bottom: 0px;
            }

            .sh-demo-install-issues-intro-last {
                margin-bottom: 20px;
            }

            .sh-demo-install-issues p {
                margin-top: 0px;
            }

            .sh-demo-install-issues p:last-child {
                margin-bottom: 0px;
            }

            #fw-options-box-post-format-gallery,
            #fw-options-box-post-format-quote,
            #fw-options-box-post-format-link,
            #fw-options-box-post-format-video,
            #fw-options-box-post-format-audio,
            .mega-menu-column-new-row {
                display: none;
            }

            .fw-options-box-page-builder-box,
            .fw-options-box-page-builder-box * {
                -webkit-transform: translate3d(0, 0, 0);
                -webkit-perspective: 1000;
                -webkit-backface-visibility:hidden;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            #setting-error-tgmpa {
                display: block!important;
            }

            #sh_post_thumbs {
                width: 100px;
                max-width: 100px;
            }

            .sh_post_thumbs img {
                width: 100px;
                height: auto;
            }

            .fw-modal .media-modal.wp-core-ui {
        		z-index: 9999 !important;
        	}

        	.fw-modal .media-modal-backdrop {
        		z-index: 999 !important;
        	}

            <?php
                $accent_color = ( function_exists( 'fw_get_db_customizer_option' ) && fw_get_db_customizer_option('accent_color') ) ? fw_get_db_customizer_option('accent_color') : '';
                if( $accent_color ) :
            ?>

                .sh-revslider-button2 {
                    background-color: <?php echo esc_attr( $accent_color ); ?>!important;
                }

            <?php endif; ?>
        </style>
    <?php }
endif;


/**
 * Admin panel - link to theme options
 */
if ( !function_exists( 'jevelin_theme_options_link' ) && current_user_can('manage_options') && defined('FW')) :
    add_action( 'admin_bar_menu', 'jevelin_theme_options_link', 999 );
    function jevelin_theme_options_link( $wp_admin_bar ) {
        $args = array(
            'id'    => 'jevelin-options',
            'title' => 'Jevelin',
            'href'  => get_admin_url().'/themes.php?page=fw-settings',
        );
        $wp_admin_bar->add_node( $args );
    }
endif;


/**
 * Admin panel - add column
 */
global $pagenow;
if (( $pagenow == 'edit.php' ) && !isset($_GET['post_type']) ) {

    add_filter('manage_posts_columns', 'jevelin_posts_columns', 5);
    add_action('manage_posts_custom_column', 'jevelin_posts_custom_columns', 5, 2);

    function jevelin_posts_columns($defaults){
        $defaults['sh_post_thumbs'] = esc_html__('Image', 'jevelin');
        return $defaults;
    }

    function jevelin_posts_custom_columns($column_name, $id){
        if($column_name === 'sh_post_thumbs'){
            echo the_post_thumbnail( 'thumbnail' );
        }
    }

}


/**
 * Shortcode Options
*/
if ( !function_exists( 'jevelin_shortcode_options' ) && defined('FW')) :
    function jevelin_shortcode_options($data,$shortcode){

        $atts = shortcode_parse_atts( $data['atts_string'] );
        if( is_array($atts) ) :
            $atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
        endif;

        return $atts;
    }
endif;


/**
 * Jevelin Predefined Templates
 */
if( is_admin() ) :
    require_once trailingslashit( get_template_directory() ) . '/inc/presets.php';
endif;