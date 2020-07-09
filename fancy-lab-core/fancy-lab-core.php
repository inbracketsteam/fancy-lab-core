<?php
/*
Plugin Name: Fancy Lab Core
Plugin URI: http://www.inbrackets.dev
Description: Includes Optional Custom Post Types for Fancy Lab Pro theme
Text Domain: fancy-lab-core
Domain Path: /languages
Version: 1.0
Author: In Brackets
Author URI: http://www.inbrackets.dev
License: GPLv2
*/

/************************ 
 * Language files
************************/

function fancy_lab_core_load_plugin_textdomain() {
    load_plugin_textdomain( 'fancy-lab-core', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'fancy_lab_core_load_plugin_textdomain' );

/************************ 
 * Custom Post Types
************************/

// 1 Testimonials

if ( ! function_exists('fancy_lab_pro_testimonials') ) {

    // Register Testimonials Post Type
    function fancy_lab_pro_testimonials() {
    
        $labels = array(
            'name'                  => _x( 'Testimonials', 'Post Type General Name', 'fancy-lab-core' ),
            'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'fancy-lab-core' ),
            'menu_name'             => __( 'Testimonials', 'fancy-lab-core' ),
            'name_admin_bar'        => __( 'Post Type', 'fancy-lab-core' ),
            'archives'              => __( 'Item Archives', 'fancy-lab-core' ),
            'attributes'            => __( 'Item Attributes', 'fancy-lab-core' ),
            'parent_item_colon'     => __( 'Parent Item:', 'fancy-lab-core' ),
            'all_items'             => __( 'All Items', 'fancy-lab-core' ),
            'add_new_item'          => __( 'Add New Item', 'fancy-lab-core' ),
            'add_new'               => __( 'Add New', 'fancy-lab-core' ),
            'new_item'              => __( 'New Item', 'fancy-lab-core' ),
            'edit_item'             => __( 'Edit Item', 'fancy-lab-core' ),
            'update_item'           => __( 'Update Item', 'fancy-lab-core' ),
            'view_item'             => __( 'View Item', 'fancy-lab-core' ),
            'view_items'            => __( 'View Items', 'fancy-lab-core' ),
            'search_items'          => __( 'Search Item', 'fancy-lab-core' ),
            'not_found'             => __( 'Not found', 'fancy-lab-core' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'fancy-lab-core' ),
            'featured_image'        => __( 'Featured Image', 'fancy-lab-core' ),
            'set_featured_image'    => __( 'Set featured image', 'fancy-lab-core' ),
            'remove_featured_image' => __( 'Remove featured image', 'fancy-lab-core' ),
            'use_featured_image'    => __( 'Use as featured image', 'fancy-lab-core' ),
            'insert_into_item'      => __( 'Insert into item', 'fancy-lab-core' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'fancy-lab-core' ),
            'items_list'            => __( 'Items list', 'fancy-lab-core' ),
            'items_list_navigation' => __( 'Items list navigation', 'fancy-lab-core' ),
            'filter_items_list'     => __( 'Filter items list', 'fancy-lab-core' ),
        );
        $args = array(
            'label'                 => __( 'Testimonial', 'fancy-lab-core' ),
            'description'           => __( 'Testimonials', 'fancy-lab-core' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'menu_icon'             => 'dashicons-format-quote',
        );
        register_post_type( 'flp_testimonials', $args );
    
    }
    add_action( 'init', 'fancy_lab_pro_testimonials', 0 );

}

// 2 Partners

if ( ! function_exists('fancy_lab_pro_partners') ) {

    function fancy_lab_pro_partners() {
    
        $labels = array(
            'name'                  => _x( 'Partners', 'Post Type General Name', 'fancy-lab-core' ),
            'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'fancy-lab-core' ),
            'menu_name'             => __( 'Partners', 'fancy-lab-core' ),
            'name_admin_bar'        => __( 'Post Type', 'fancy-lab-core' ),
            'archives'              => __( 'Item Archives', 'fancy-lab-core' ),
            'attributes'            => __( 'Item Attributes', 'fancy-lab-core' ),
            'parent_item_colon'     => __( 'Parent Item:', 'fancy-lab-core' ),
            'all_items'             => __( 'All Items', 'fancy-lab-core' ),
            'add_new_item'          => __( 'Add New Item', 'fancy-lab-core' ),
            'add_new'               => __( 'Add New', 'fancy-lab-core' ),
            'new_item'              => __( 'New Item', 'fancy-lab-core' ),
            'edit_item'             => __( 'Edit Item', 'fancy-lab-core' ),
            'update_item'           => __( 'Update Item', 'fancy-lab-core' ),
            'view_item'             => __( 'View Item', 'fancy-lab-core' ),
            'view_items'            => __( 'View Items', 'fancy-lab-core' ),
            'search_items'          => __( 'Search Item', 'fancy-lab-core' ),
            'not_found'             => __( 'Not found', 'fancy-lab-core' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'fancy-lab-core' ),
            'featured_image'        => __( 'Featured Image', 'fancy-lab-core' ),
            'set_featured_image'    => __( 'Set featured image', 'fancy-lab-core' ),
            'remove_featured_image' => __( 'Remove featured image', 'fancy-lab-core' ),
            'use_featured_image'    => __( 'Use as featured image', 'fancy-lab-core' ),
            'insert_into_item'      => __( 'Insert into item', 'fancy-lab-core' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'fancy-lab-core' ),
            'items_list'            => __( 'Items list', 'fancy-lab-core' ),
            'items_list_navigation' => __( 'Items list navigation', 'fancy-lab-core' ),
            'filter_items_list'     => __( 'Filter items list', 'fancy-lab-core' ),
        );
        $args = array(
            'label'                 => __( 'Partner', 'fancy-lab-core' ),
            'description'           => __( 'Partners', 'fancy-lab-core' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'menu_icon'             => 'dashicons-groups',
        );
        register_post_type( 'flp_partners', $args );
    
    }
    add_action( 'init', 'fancy_lab_pro_partners', 0 );

}


// 3 Slider

if ( ! function_exists('fancy_lab_pro_slider') ) {

    function fancy_lab_pro_slider() {
    
        $labels = array(
            'name'                  => _x( 'Sliders', 'Post Type General Name', 'fancy-lab-core' ),
            'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'fancy-lab-core' ),
            'menu_name'             => __( 'Sliders', 'fancy-lab-core' ),
            'name_admin_bar'        => __( 'Post Type', 'fancy-lab-core' ),
            'archives'              => __( 'Item Archives', 'fancy-lab-core' ),
            'attributes'            => __( 'Item Attributes', 'fancy-lab-core' ),
            'parent_item_colon'     => __( 'Parent Item:', 'fancy-lab-core' ),
            'all_items'             => __( 'All Items', 'fancy-lab-core' ),
            'add_new_item'          => __( 'Add New Item', 'fancy-lab-core' ),
            'add_new'               => __( 'Add New', 'fancy-lab-core' ),
            'new_item'              => __( 'New Item', 'fancy-lab-core' ),
            'edit_item'             => __( 'Edit Item', 'fancy-lab-core' ),
            'update_item'           => __( 'Update Item', 'fancy-lab-core' ),
            'view_item'             => __( 'View Item', 'fancy-lab-core' ),
            'view_items'            => __( 'View Items', 'fancy-lab-core' ),
            'search_items'          => __( 'Search Item', 'fancy-lab-core' ),
            'not_found'             => __( 'Not found', 'fancy-lab-core' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'fancy-lab-core' ),
            'featured_image'        => __( 'Featured Image', 'fancy-lab-core' ),
            'set_featured_image'    => __( 'Set featured image', 'fancy-lab-core' ),
            'remove_featured_image' => __( 'Remove featured image', 'fancy-lab-core' ),
            'use_featured_image'    => __( 'Use as featured image', 'fancy-lab-core' ),
            'insert_into_item'      => __( 'Insert into item', 'fancy-lab-core' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'fancy-lab-core' ),
            'items_list'            => __( 'Items list', 'fancy-lab-core' ),
            'items_list_navigation' => __( 'Items list navigation', 'fancy-lab-core' ),
            'filter_items_list'     => __( 'Filter items list', 'fancy-lab-core' ),
        );
        $args = array(
            'label'                 => __( 'Slider', 'fancy-lab-core' ),
            'description'           => __( 'Sliders', 'fancy-lab-core' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'menu_icon'             => 'dashicons-images-alt2',
        );
        register_post_type( 'flp_slider', $args );
    
    }
    add_action( 'init', 'fancy_lab_pro_slider', 0 );

}


/************************ 
 * Metaboxes
************************/

// 1 Testimonials Metaboxes 

// Register Testimonials Metabox
add_action( 'admin_init', 'testimonials_add_metabox' );
function testimonials_add_metabox() {
    add_meta_box( 'testimonials_meta_box',
        esc_html__( 'Testimonials Additional Fields', 'fancy-lab-core' ),
        'display_testimonials_meta_box',
        'flp_testimonials', 'normal', 'high'
    );
}

function display_testimonials_meta_box( $position ) {
    $testimonial_position = esc_html( get_post_meta( $position->ID, 'testimonee_position', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%"><?php echo esc_html_e( 'Position', 'fancy-lab-core' )?></td>
            <td><input type="text" size="80" name="testimonial_position_name" value="<?php echo esc_attr( $testimonial_position ); ?>" /></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'add_testimonial_fields', 10, 2 );
function add_testimonial_fields( $testimonial_position_id, $testimonial_position ) {
    if ( $testimonial_position->post_type == 'flp_testimonials' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['testimonial_position_name'] ) && $_POST['testimonial_position_name'] != '' ) {
            update_post_meta( $testimonial_position_id, 'testimonee_position', $_POST['testimonial_position_name'] );
        }
    }
}


// 1 Slider Metaboxes 

// Register Slider Metabox
add_action( 'admin_init', 'slider_add_metabox' );
function slider_add_metabox() {
    add_meta_box( 'slider_meta_box',
        esc_html__( 'Slider Additional Fields', 'fancy-lab-core' ),
        'display_slider_meta_box',
        'flp_slider', 'normal', 'high'
    );
}

function display_slider_meta_box( $slider_texts ) {
    $slider_button_text = esc_html( get_post_meta( $slider_texts->ID, 'slider_button_text', true ) );
    $slider_button_url = esc_html( get_post_meta( $slider_texts->ID, 'slider_button_url', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%"><?php echo esc_html_e( 'Button Text', 'fancy-lab-core' )?></td>
            <td><input type="text" size="80" name="slider_button_text_name" value="<?php echo esc_attr( $slider_button_text ); ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%"><?php echo esc_html_e( 'Button URL', 'fancy-lab-core' )?></td>
            <td><input type="text" size="80" name="slider_button_url_name" value="<?php echo esc_attr( $slider_button_url ); ?>" /></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'add_slider_fields', 10, 2 );
function add_slider_fields( $slider_texts_id, $slider_texts ) {
    if ( $slider_texts->post_type == 'flp_slider' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['slider_button_text_name'] ) && $_POST['slider_button_text_name'] != '' ) {
            update_post_meta( $slider_texts_id, 'slider_button_text', $_POST['slider_button_text_name'] );
        }
        if ( isset( $_POST['slider_button_url_name'] ) && $_POST['slider_button_url_name'] != '' ) {
            update_post_meta( $slider_texts_id, 'slider_button_url', $_POST['slider_button_url_name'] );
        }
    }
}


/************************ 
 * Templates
************************/

// Adding Testimonials Archive Template
add_filter( 'template_include', 'include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'flp_testimonials' ) {
        if ( is_archive() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'archive-flp_testimonials.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . 'tpl/testimonials/archive-flp_testimonials.php';
            }
        }
    }
    return $template_path;
}

/*************************************
 * Adjust Admin Bar when using sticky header
 * Reviewers: we're not hiding the admin bar
 *************************************/

// Additional CSS for the theme
function fancy_lab_pro_css() {
	?>
        <style type='text/css'>
        @media all and (max-width: 600px)  {
            html #wpadminbar{
                position: relative;
            }
        }
        </style>
	<?php
}
add_action( 'wp_head', 'fancy_lab_pro_css' );

// Adjusting admin bar on mobile
add_action('get_header', 'fancy_lab_pro_filter_head');
function fancy_lab_pro_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}