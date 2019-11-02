<?php
/**
 * OCDI Demo Installation Method
 */
function jevelin_ocdi_import_files() {
    return array(

        /*array(
            'import_file_name'           => 'Basic',
            'categories'                 => array( 'Blog', 'Portfolio', 'Shop' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array( 'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_slider.zip', ),
                array( 'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_creative_slider.zip', ),
                array( 'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_event_slider.zip', ),
                array( 'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_fitness_slider.zip', ),
                array( 'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_hotographer_slider.zip', ),
                array( 'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_nature_slider.zip', ),
                array( 'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/basic/basic_showcase_slider.zip', ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/basic.jpg',
            'import_notice'              => __( 'Working only partially (various pages are blank)', 'jevelin' ),
            'preview_url'                => 'http://jevelin.shufflehound.com/hello/',
        ),*/

        array(
            'import_file_name'           => 'Boxed',
            'categories'                 => array( 'Boxed', 'Corporate' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/boxed/boxed_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/boxed/boxed_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/boxed/boxed_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/boxed/boxed_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/boxed.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/boxed/',
        ),

        array(
            'import_file_name'           => 'Corporate',
            'categories'                 => array( 'Corporate' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/corporate/corporate_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/corporate/corporate_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/corporate/corporate_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/corporate/corporate_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/corporate.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/corporate/',
        ),

        array(
            'import_file_name'           => 'Wedding',
            'categories'                 => array( 'Wedding' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/wedding/wedding_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/wedding/wedding_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/wedding/wedding_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/wedding/wedding_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/wedding.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/wedding/',
        ),

        array(
            'import_file_name'           => 'Landing',
            'categories'                 => array( 'Landing' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/landing/landing_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/landing/landing_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/landing/landing_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/landing.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/landing/',
        ),

        array(
            'import_file_name'           => 'Landing 2',
            'categories'                 => array( 'Landing' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/landing2/landing2_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/landing2/landing2_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/landing2/landing2_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/landing2.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/landing2/',
        ),

        array(
            'import_file_name'           => 'Shop',
            'categories'                 => array( 'Shop' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/shop/shop_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/shop/shop_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/shop/shop_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/shop/shop_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/shop.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/shop1/',
        ),

        array(
            'import_file_name'           => 'Blog',
            'categories'                 => array( 'Blog' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/blog/blog_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/blog/blog_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/blog/blog_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/blog/blog_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/blog.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/blog1/',
        ),

        array(
            'import_file_name'           => 'Portfolio',
            'categories'                 => array( 'Portfolio' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/portfolio/portfolio_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/portfolio/portfolio_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/portfolio/portfolio_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/portfolio.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/portfolio1/',
        ),

        array(
            'import_file_name'           => 'Startup',
            'categories'                 => array( 'Startup' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/startup/startup_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/startup/startup_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/startup/startup_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/startup/startup_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/startup.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/startup/',
        ),

        array(
            'import_file_name'           => 'Autospot',
            'categories'                 => array( 'Autospot' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/autospot/autospot_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/autospot/autospot_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/autospot/autospot_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/autospot/autospot_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/autospot.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/autospot/',
        ),

        array(
            'import_file_name'           => 'Construction',
            'categories'                 => array( 'Construction' ),
            'import_file_url'            => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/construction/construction_content.xml',
            'import_widget_file_url'     => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/construction/construction_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/construction/construction_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'http://remote.demos.shufflehound.com/jevelin/ocdi_files/construction/construction_slider.zip',
                ),
            ),
            'import_preview_image_url'   => 'http://remote.demos.shufflehound.com/jevelin/files/construction.jpg',
            'preview_url'                => 'http://jevelin.shufflehound.com/construction/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'jevelin_ocdi_import_files' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );


/**
 * OCDI Demo Installation Method - Final Steps
 */



function jevelin_ocdi_after_import_setup( $selected_import ) {


    /* Get Revolution slider slides */
    if( class_exists('RevSlider') ) :
        $slider = new RevSlider();
        $arrSliders = $slider->getArrSlidersShort();

        if( $selected_import['import_file_name'] != 'Basic' ) :
            $slide_value = 0;
            foreach( $arrSliders as $key => $slide ) :
                if( $slide == 'Fitness slider' && $selected_import['import_file_name'] == 'Boxed' ) :
                    $slide_value = $key;
                elseif( $slide == 'Startup Slaider' && $selected_import['import_file_name'] == 'Startup' ) :
                    $slide_value = $key;
                elseif( $slide == 'Corporate slider' && $selected_import['import_file_name'] == 'Corporate' ) :
                    $slide_value = $key;
                elseif( $slide == 'Blog Slider' && $selected_import['import_file_name'] == 'Blog' ) :
                    $slide_value = $key;
                elseif( $slide == 'Shop Slider' && $selected_import['import_file_name'] == 'Shop' ) :
                    $slide_value = $key;
                elseif( $slide == 'Wedding Slider' && $selected_import['import_file_name'] == 'Wedding' ) :
                    $slide_value = $key;
                elseif( $slide == 'Autospot Slider' && $selected_import['import_file_name'] == 'Autospot' ) :
                    $slide_value = $key;
                elseif( $slide == 'Construction Slider' && $selected_import['import_file_name'] == 'Construction' ) :
                    $slide_value = $key;
                endif;
            endforeach;

            if( $slide_value > 0 ) :
                if( $selected_import['import_file_name'] == 'Blog' ) :
                    $blog_option = $wpdb->get_results( "SELECT * FROM `$wpdb->postmeta` WHERE `meta_key` = 'fw_options' and `post_id` = '37' LIMIT 1" );
                    if( isset( $blog_option[0]->meta_value ) ) :
                        $blog_option_content = str_replace( ';s:18:"titlebar_revslider";s:1:"1";', ';s:18:"titlebar_revslider";s:'.strlen( $slide_value ).':"'.intval( $slide_value ).'";', $blog_option[0]->meta_value );
                        error_log( 'Content: '.$blog_option_content, 0);
                        $wpdb->update( $wpdb->postmeta, array( 'meta_value' => $blog_option_content ), array( 'post_id' => 37, 'meta_key' => 'fw_options' ) );
                    endif;
                endif;
            endif;
        endif;
    endif;


    /* Get page builder working */
    global $wpdb;
    $metas = $wpdb->get_results( "SELECT * FROM `$wpdb->postmeta` WHERE `meta_key` = 'jevelin_page_builder'" );
    foreach( $metas as $meta ) :
        $content = $meta->meta_value;
        $content = str_replace( '="', '=\"',  $content );
        $content = str_replace( '">', '\">',  $content );
        $content = str_replace( '/', '\/',    $content );
        $content = str_replace( 'u201c', '\u201c', $content );
        $content = str_replace( 'u201d', '\u201d', $content );
        $content = str_replace( 'u00a0', '\u00a0', $content );


        // JSON 1 Fix
        $pieces = explode(',"styling":"[{"', $content);
        if( count( $pieces ) > 1 ) :
        	$i = 0;
        	foreach( $pieces as $key => $piece ) : $i++;
        		if( $i > 1 ) :
        			$piece_array = explode('}]}]"', $piece, 2 );
        			$piece_array[0] = json_encode( $piece_array[0] );
                    $piece_array[0] = substr($piece_array[0], 1, -1);
        			$pieces[$key] = implode('}]}]"', $piece_array );
        		endif;
        	endforeach;
        	$content = implode(',"styling":"[{\"', $pieces );
        endif;


        // JSON 2 Fix
        $pieces = explode(',"form":{"json":"[{"', $content);
        if( count( $pieces ) > 1 ) :
        	$i = 0;
        	foreach( $pieces as $key => $piece ) : $i++;
        		if( $i > 1 ) :
        			$piece_array = explode('"}}]"},"subject_message', $piece, 2 );
        			$piece_array[0] = json_encode( $piece_array[0] );
                    $piece_array[0] = substr($piece_array[0], 1, -1);
        			$pieces[$key] = implode('\"}}]"},"subject_message', $piece_array );
        		endif;
        	endforeach;
        	$content = implode(',"form":{"json":"[{\"', $pieces );
        endif;


        // Revolution Slider set
        if( class_exists('RevSlider') ) :
            if( $selected_import['import_file_name'] != 'Basic' && $selected_import['import_file_name'] != 'Blog' && isset( $slide_value ) && $slide_value > 0 ) :
                $content = str_replace( '","slide":"1","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                $content = str_replace( '<p style=\"text-align: center;" class', '<p style=\"text-align: center;\" class', $content );
            elseif( $selected_import['import_file_name'] == 'Basic' ) :
                $content = str_replace( '"THE PLAN"', '\"THE PLAN\"', $content );
                $content = str_replace( '1852px;rnmargin:', '1852px;rnmargin:', $content );
                $content = str_replace( '<span class=\"sh-text-background-white" style', '<span class=\"sh-text-background-white\" style', $content );
                $slide_value = 0;
                foreach( $arrSliders as $key => $slide ) :
                    if( $slide == 'Home Nature slider' && $meta->post_id == 4548 ) :
                        $slide_value = $key;
                        $content = str_replace( '","slide":"11","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                    endif;

                    if( $slide == 'Home Basic slider' && $meta->post_id == 23 ) :
                        $slide_value = $key;
                        $content = str_replace( '","slide":"12","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                    endif;

                    if( $slide == 'Photographer slider' && $meta->post_id == 4551 ) :
                        $slide_value = $key;
                        $content = str_replace( '","slide":"13","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                    endif;

                    if( $slide == 'Home Event slider' && $meta->post_id == 4545 ) :
                        $slide_value = $key;
                        $content = str_replace( '","slide":"14","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                    endif;

                    if( $slide == 'Home Creative slider' && $meta->post_id == 6172 ) :
                        $slide_value = $key;
                        $content = str_replace( '","slide":"17","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                    endif;

                    if( $slide == 'Fitness slider' && $meta->post_id == 7006 ) :
                        $slide_value = $key;
                        $content = str_replace( '","slide":"18","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                    endif;

                    if( $slide == 'Showcase 2 slider' && $meta->post_id == 6774 ) :
                        $slide_value = $key;
                        $content = str_replace( '","slide":"22","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                    endif;
                endforeach;
            endif;
        endif;


        /* Page builder fix */
    	$wpdb->delete( $wpdb->postmeta, array( 'post_id' => intval( $meta->post_id ), 'meta_key' => 'fw:opt:ext:pb:page-builder:json' ) );
    	$wpdb->update( $wpdb->postmeta, array( 'meta_key' => 'fw:opt:ext:pb:page-builder:json', 'meta_value' => $content ), array( 'meta_id' => intval( $meta->meta_id ), 'post_id' => intval( $meta->post_id ) ) );
    endforeach;


    // Assign menus to their locations.
    $main_menu1 = get_term_by( 'name', 'Menu 1', 'nav_menu' );
    $main_menu2 = get_term_by( 'name', 'Header', 'nav_menu' );
    $main_menu3 = get_term_by( 'name', 'Header Navigation', 'nav_menu' );
    if( isset( $main_menu1->term_id ) && $main_menu1->term_id > 0 ) :
        set_theme_mod( 'nav_menu_locations', array( 'header' => $main_menu1->term_id, ));
    elseif( isset( $main_menu2->term_id ) && $main_menu2->term_id > 0 ) :
        set_theme_mod( 'nav_menu_locations', array( 'header' => $main_menu2->term_id, ));
    elseif( isset( $main_menu3->term_id ) && $main_menu3->term_id > 0 ) :
        set_theme_mod( 'nav_menu_locations', array( 'header' => $main_menu3->term_id, ));
    endif;


    // Assign front page
    update_option( 'show_on_front', 'page' );
    $front_page_id1 = get_page_by_title( 'Home Basic' );
    $front_page_id2 = get_page_by_title( 'Your ocean of posts' );
    $front_page_id3 = get_page_by_title( 'Home' );
    $front_page_id4 = get_page_by_title( 'Home '.$selected_import['import_file_name'] );
    if( isset( $front_page_id1->ID ) && $front_page_id1->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id1->ID );
    elseif( isset( $front_page_id2->ID ) && $front_page_id2->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id2->ID );
    elseif( isset( $front_page_id3->ID ) && $front_page_id3->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id3->ID );
    elseif( isset( $front_page_id4->ID ) && $front_page_id4->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id4->ID );
    endif;

}
add_action( 'pt-ocdi/after_import', 'jevelin_ocdi_after_import_setup' );


/**
 * OCDI Demo Installation Method - Integration for Custom Frameworks and RevSlider
 */
if ( ! function_exists( 'jevelin_prefix_after_content_import_execution' ) ) {
  function jevelin_prefix_after_content_import_execution( $selected_import_files, $import_files, $selected_index ) {

    $downloader = new OCDI\Downloader();
    /* Custom Framework */
    if( ! empty( $import_files[$selected_index]['import_json'] ) ) {

      foreach( $import_files[$selected_index]['import_json'] as $index => $import ) {
        $file_path = $downloader->download_file( $import['file_url'], 'demo-json-import-file-'. $index . '-'. date( 'Y-m-d__H-i-s' ) .'.json' );
        $file_raw  = OCDI\Helpers::data_from_file( $file_path );
    	$media = wp_upload_dir();
    	if( isset( $media['baseurl'] ) ) :
    		$url = $media['baseurl'];
    		$url = str_replace('/', '\/', $url);
    		$url = str_replace('http:', '', $url);
            $url = str_replace('https:', '', $url);
    		$file_raw = str_replace( '[SH-JEVELIN-DOMAIN-MEDIA]', $url, $file_raw );
    		$file_raw = str_replace( '[SH-JEVELIN-DOMAIN]', get_site_url(), $file_raw );
    	endif;

        update_option( $import['option_name'], json_decode( $file_raw, true ) );
      }

    } else if( ! empty( $import_files[$selected_index]['local_import_json'] ) ) {

      foreach( $import_files[$selected_index]['local_import_json'] as $index => $import ) {
        $file_path = $import['file_path'];
        $file_raw  = OCDI\Helpers::data_from_file( $file_path );
        update_option( $import['option_name'], json_decode( $file_raw, true ) );
      }

    }

    $ocdi       = OCDI\OneClickDemoImport::get_instance();
    $log_path   = $ocdi->get_log_file_path();
    OCDI\Helpers::append_to_file( 'Custom Framework file loaded.', $log_path );


    /* Revolution Slider */
    if ( class_exists( 'RevSlider' ) ) :
        if( !empty( $import_files[$selected_index]['import_revslider'] ) ) :
            $slider = new RevSlider();
            foreach( $import_files[$selected_index]['import_revslider'] as $index => $import ) :
                $file_path = $downloader->download_file( $import['file_url'], 'demo-revslider-import-file-'. $index . '-'. date( 'Y-m-d__H-i-s' ) .'.zip' );
                $slider->importSliderFromPost( true, true, $file_path );
            endforeach;
        endif;
   endif;

  }
  add_action('pt-ocdi/after_content_import_execution', 'jevelin_prefix_after_content_import_execution', 3, 99 );
}
