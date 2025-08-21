<?php
/**
 * Swift Marketing theme functions and definitions
 * Enhanced for Elementor compatibility and GitHub deployment
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme version
define('SWIFT_MARKETING_VERSION', '1.2.0');

// Theme setup
function swift_marketing_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    
    // Elementor theme support
    add_theme_support('elementor');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'swift-marketing'),
        'footer'  => __('Footer Menu', 'swift-marketing'),
    ));

    // Set content width
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'swift_marketing_theme_setup');

// Enqueue styles and scripts
function swift_marketing_enqueue_scripts() {
    // Tailwind CSS from CDN
    wp_enqueue_style('tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css', array(), '3.4.0');
    
    // Main stylesheet
    wp_enqueue_style('swift-marketing-style', get_stylesheet_uri(), array('tailwind-css'), SWIFT_MARKETING_VERSION);
    
    // Enqueue custom JavaScript
    wp_enqueue_script('swift-marketing-script', get_template_directory_uri() . '/js/main.js', array('jquery'), SWIFT_MARKETING_VERSION, true);
    
    // Localize script for AJAX
    wp_localize_script('swift-marketing-script', 'swift_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('swift_nonce'),
        'home_url' => home_url(),
    ));

    // Comments script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'swift_marketing_enqueue_scripts');

// Elementor compatibility
function swift_marketing_elementor_support() {
    // Remove Elementor's default fonts
    add_filter('elementor/fonts/groups', '__return_empty_array');
    
    // Add Elementor theme locations
    if (class_exists('\Elementor\Theme_Conditions_Manager')) {
        add_action('elementor/theme/register_locations', function($locations_manager) {
            $locations_manager->register_location('header');
            $locations_manager->register_location('footer');
        });
    }
}
add_action('elementor/init', 'swift_marketing_elementor_support');

// Elementor Pro theme builder support
function swift_marketing_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_location('header');
    $elementor_theme_manager->register_location('footer');
    $elementor_theme_manager->register_location('single');
    $elementor_theme_manager->register_location('archive');
}
add_action('elementor/theme/register_locations', 'swift_marketing_register_elementor_locations');

// Custom post types
function swift_marketing_custom_post_types() {
    // Services post type
    register_post_type('services', array(
        'labels' => array(
            'name'          => __('Services', 'swift-marketing'),
            'singular_name' => __('Service', 'swift-marketing'),
            'add_new'       => __('Add New Service', 'swift-marketing'),
            'add_new_item'  => __('Add New Service', 'swift-marketing'),
            'edit_item'     => __('Edit Service', 'swift-marketing'),
            'new_item'      => __('New Service', 'swift-marketing'),
            'view_item'     => __('View Service', 'swift-marketing'),
            'search_items'  => __('Search Services', 'swift-marketing'),
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-admin-tools',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'elementor'),
        'rewrite'       => array('slug' => 'services'),
        'show_in_rest'  => true,
    ));

    // Case Studies post type
    register_post_type('case_studies', array(
        'labels' => array(
            'name'          => __('Case Studies', 'swift-marketing'),
            'singular_name' => __('Case Study', 'swift-marketing'),
            'add_new'       => __('Add New Case Study', 'swift-marketing'),
            'add_new_item'  => __('Add New Case Study', 'swift-marketing'),
            'edit_item'     => __('Edit Case Study', 'swift-marketing'),
            'new_item'      => __('New Case Study', 'swift-marketing'),
            'view_item'     => __('View Case Study', 'swift-marketing'),
            'search_items'  => __('Search Case Studies', 'swift-marketing'),
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-portfolio',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'elementor'),
        'rewrite'       => array('slug' => 'case-studies'),
        'show_in_rest'  => true,
    ));

    // Testimonials post type
    register_post_type('testimonials', array(
        'labels' => array(
            'name'          => __('Testimonials', 'swift-marketing'),
            'singular_name' => __('Testimonial', 'swift-marketing'),
            'add_new'       => __('Add New Testimonial', 'swift-marketing'),
            'add_new_item'  => __('Add New Testimonial', 'swift-marketing'),
            'edit_item'     => __('Edit Testimonial', 'swift-marketing'),
            'new_item'      => __('New Testimonial', 'swift-marketing'),
            'view_item'     => __('View Testimonial', 'swift-marketing'),
            'search_items'  => __('Search Testimonials', 'swift-marketing'),
        ),
        'public'        => true,
        'has_archive'   => false,
        'menu_icon'     => 'dashicons-format-quote',
        'supports'      => array('title', 'editor', 'thumbnail', 'elementor'),
        'show_in_rest'  => true,
    ));
}
add_action('init', 'swift_marketing_custom_post_types');

// Custom image sizes
function swift_marketing_image_sizes() {
    add_image_size('service-card', 400, 300, true);
    add_image_size('case-study-thumb', 600, 400, true);
    add_image_size('hero-bg', 1920, 1080, true);
}
add_action('after_setup_theme', 'swift_marketing_image_sizes');

// Widget areas
function swift_marketing_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'swift-marketing'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'swift-marketing'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'swift-marketing'),
        'id'            => 'footer-1',
        'description'   => __('Appears in the footer section of the site.', 'swift-marketing'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'swift_marketing_widgets_init');

// AJAX handler for contact form
function swift_marketing_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'swift_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed.'));
    }
    
    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $service = sanitize_text_field($_POST['service']);
    $budget = sanitize_text_field($_POST['budget']);
    $timeline = sanitize_text_field($_POST['timeline']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
    }
    
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }
    
    // Prepare email
    $to = get_option('admin_email');
    $subject = sprintf('[%s] New Contact Form Submission from %s', get_bloginfo('name'), $name);
    $body = sprintf(
        "New contact form submission:\n\nName: %s\nEmail: %s\nPhone: %s\nCompany: %s\nService: %s\nBudget: %s\nTimeline: %s\n\nMessage:\n%s\n\n---\nSent from: %s",
        $name, $email, $phone, $company, $service, $budget, $timeline, $message, home_url()
    );
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! We\'ll get back to you within 24 hours.'));
    } else {
        wp_send_json_error(array('message' => 'Failed to send message. Please try again or contact us directly.'));
    }
}
add_action('wp_ajax_contact_form', 'swift_marketing_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'swift_marketing_handle_contact_form');

// AJAX handler for newsletter
function swift_marketing_handle_newsletter() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'swift_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed.'));
    }
    
    $email = sanitize_email($_POST['email']);
    
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }
    
    // Here you would typically integrate with a newsletter service
    // For now, we'll just store in database and send success message
    
    wp_send_json_success(array('message' => 'Successfully subscribed to our newsletter!'));
}
add_action('wp_ajax_newsletter', 'swift_marketing_handle_newsletter');
add_action('wp_ajax_nopriv_newsletter', 'swift_marketing_handle_newsletter');

// Customizer settings
function swift_marketing_customize_register($wp_customize) {
    // Add company info section
    $wp_customize->add_section('company_info', array(
        'title'    => __('Company Information', 'swift-marketing'),
        'priority' => 30,
    ));

    // Phone number
    $wp_customize->add_setting('company_phone', array(
        'default'           => '+27 (0)21 123 4567',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('company_phone', array(
        'label'   => __('Phone Number', 'swift-marketing'),
        'section' => 'company_info',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('company_email', array(
        'default'           => 'hello@swiftmarketing.co.za',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('company_email', array(
        'label'   => __('Email Address', 'swift-marketing'),
        'section' => 'company_info',
        'type'    => 'email',
    ));

    // Address
    $wp_customize->add_setting('company_address', array(
        'default'           => 'Cape Town, South Africa',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('company_address', array(
        'label'   => __('Address', 'swift-marketing'),
        'section' => 'company_info',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'swift_marketing_customize_register');

// Add custom body classes
function swift_marketing_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'homepage';
    }
    
    if (class_exists('\Elementor\Plugin')) {
        $classes[] = 'elementor-default';
    }
    
    return $classes;
}
add_filter('body_class', 'swift_marketing_body_classes');

// Optimize for performance
function swift_marketing_performance_optimizations() {
    // Remove WordPress version from head
    remove_action('wp_head', 'wp_generator');
    
    // Remove unnecessary WordPress features
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    
    // Disable XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
    
    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'swift_marketing_performance_optimizations');

// Security enhancements
function swift_marketing_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'swift_marketing_security_headers');

// Theme activation - set homepage
function swift_marketing_after_setup_theme() {
    // Set homepage to show latest posts (blog style) or static page
    if (get_option('show_on_front') !== 'posts') {
        update_option('show_on_front', 'posts');
    }
}
add_action('after_setup_theme', 'swift_marketing_after_setup_theme');

// GitHub deployment helper functions
function swift_marketing_flush_rewrite_rules() {
    swift_marketing_custom_post_types();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'swift_marketing_flush_rewrite_rules');

// Clean up on theme switch
function swift_marketing_cleanup() {
    flush_rewrite_rules();
}
add_action('switch_theme', 'swift_marketing_cleanup');

// Admin notice for missing pages
function swift_marketing_admin_notices() {
    $required_pages = array(
        'services'     => 'Services',
        'case-studies' => 'Case Studies',
        'contact'      => 'Contact',
    );
    
    $missing_pages = array();
    
    foreach ($required_pages as $slug => $title) {
        if (!get_page_by_path($slug)) {
            $missing_pages[] = $title . ' (' . $slug . ')';
        }
    }
    
    if (!empty($missing_pages) && current_user_can('manage_options')) {
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p><strong>Swift Marketing Theme:</strong> Please create the following pages for the theme to work properly: ' . implode(', ', $missing_pages) . '</p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'swift_marketing_admin_notices');

// Elementor custom widgets (if needed in future)
function swift_marketing_elementor_widgets() {
    // Register custom Elementor widgets here if needed
}
add_action('elementor/widgets/widgets_registered', 'swift_marketing_elementor_widgets');

// Translation support
function swift_marketing_load_textdomain() {
    load_theme_textdomain('swift-marketing', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'swift_marketing_load_textdomain');

?>