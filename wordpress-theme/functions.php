<?php
/**
 * Swift Marketing theme functions and definitions
 */

// Theme setup
function swift_marketing_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'swift_marketing_theme_setup');

// Enqueue styles and scripts
function swift_marketing_enqueue_scripts() {
    wp_enqueue_style('swift-marketing-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue custom JavaScript
    wp_enqueue_script('swift-marketing-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('swift-marketing-script', 'swift_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('swift_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'swift_marketing_enqueue_scripts');

// Custom post types
function swift_marketing_custom_post_types() {
    // Services post type
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'new_item' => 'New Service',
            'view_item' => 'View Service',
            'search_items' => 'Search Services',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'services'),
    ));

    // Case Studies post type
    register_post_type('case_studies', array(
        'labels' => array(
            'name' => 'Case Studies',
            'singular_name' => 'Case Study',
            'add_new' => 'Add New Case Study',
            'add_new_item' => 'Add New Case Study',
            'edit_item' => 'Edit Case Study',
            'new_item' => 'New Case Study',
            'view_item' => 'View Case Study',
            'search_items' => 'Search Case Studies',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'case-studies'),
    ));

    // Testimonials post type
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'swift_marketing_custom_post_types');

// Custom meta boxes
function swift_marketing_add_meta_boxes() {
    // Service meta box
    add_meta_box(
        'service_details',
        'Service Details',
        'swift_marketing_service_meta_box',
        'services',
        'normal',
        'high'
    );

    // Case study meta box
    add_meta_box(
        'case_study_details',
        'Case Study Details',
        'swift_marketing_case_study_meta_box',
        'case_studies',
        'normal',
        'high'
    );

    // Testimonial meta box
    add_meta_box(
        'testimonial_details',
        'Testimonial Details',
        'swift_marketing_testimonial_meta_box',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'swift_marketing_add_meta_boxes');

// Service meta box callback
function swift_marketing_service_meta_box($post) {
    wp_nonce_field('swift_marketing_service_nonce', 'swift_marketing_service_nonce_field');
    
    $icon = get_post_meta($post->ID, '_service_icon', true);
    $features = get_post_meta($post->ID, '_service_features', true);
    $trending = get_post_meta($post->ID, '_service_trending', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="service_icon">Icon Class</label></th>';
    echo '<td><input type="text" id="service_icon" name="service_icon" value="' . esc_attr($icon) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="service_features">Features (one per line)</label></th>';
    echo '<td><textarea id="service_features" name="service_features" rows="5" cols="50">' . esc_textarea($features) . '</textarea></td></tr>';
    echo '<tr><th><label for="service_trending">Trending Service</label></th>';
    echo '<td><input type="checkbox" id="service_trending" name="service_trending" value="1" ' . checked($trending, 1, false) . ' /></td></tr>';
    echo '</table>';
}

// Case study meta box callback
function swift_marketing_case_study_meta_box($post) {
    wp_nonce_field('swift_marketing_case_study_nonce', 'swift_marketing_case_study_nonce_field');
    
    $result = get_post_meta($post->ID, '_case_study_result', true);
    $category = get_post_meta($post->ID, '_case_study_category', true);
    $metrics = get_post_meta($post->ID, '_case_study_metrics', true);
    $technologies = get_post_meta($post->ID, '_case_study_technologies', true);
    $duration = get_post_meta($post->ID, '_case_study_duration', true);
    $budget = get_post_meta($post->ID, '_case_study_budget', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="case_study_result">Result</label></th>';
    echo '<td><input type="text" id="case_study_result" name="case_study_result" value="' . esc_attr($result) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="case_study_category">Category</label></th>';
    echo '<td><select id="case_study_category" name="case_study_category">';
    echo '<option value="Digital Marketing" ' . selected($category, 'Digital Marketing', false) . '>Digital Marketing</option>';
    echo '<option value="Project Management" ' . selected($category, 'Project Management', false) . '>Project Management</option>';
    echo '<option value="Software Development" ' . selected($category, 'Software Development', false) . '>Software Development</option>';
    echo '</select></td></tr>';
    echo '<tr><th><label for="case_study_metrics">Metrics (JSON format)</label></th>';
    echo '<td><textarea id="case_study_metrics" name="case_study_metrics" rows="3" cols="50">' . esc_textarea($metrics) . '</textarea></td></tr>';
    echo '<tr><th><label for="case_study_technologies">Technologies (comma separated)</label></th>';
    echo '<td><input type="text" id="case_study_technologies" name="case_study_technologies" value="' . esc_attr($technologies) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="case_study_duration">Duration</label></th>';
    echo '<td><input type="text" id="case_study_duration" name="case_study_duration" value="' . esc_attr($duration) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="case_study_budget">Budget</label></th>';
    echo '<td><input type="text" id="case_study_budget" name="case_study_budget" value="' . esc_attr($budget) . '" class="regular-text" /></td></tr>';
    echo '</table>';
}

// Testimonial meta box callback
function swift_marketing_testimonial_meta_box($post) {
    wp_nonce_field('swift_marketing_testimonial_nonce', 'swift_marketing_testimonial_nonce_field');
    
    $client_name = get_post_meta($post->ID, '_testimonial_client_name', true);
    $client_position = get_post_meta($post->ID, '_testimonial_client_position', true);
    $client_company = get_post_meta($post->ID, '_testimonial_client_company', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="testimonial_client_name">Client Name</label></th>';
    echo '<td><input type="text" id="testimonial_client_name" name="testimonial_client_name" value="' . esc_attr($client_name) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="testimonial_client_position">Client Position</label></th>';
    echo '<td><input type="text" id="testimonial_client_position" name="testimonial_client_position" value="' . esc_attr($client_position) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="testimonial_client_company">Client Company</label></th>';
    echo '<td><input type="text" id="testimonial_client_company" name="testimonial_client_company" value="' . esc_attr($client_company) . '" class="regular-text" /></td></tr>';
    echo '<tr><th><label for="testimonial_rating">Rating (1-5)</label></th>';
    echo '<td><select id="testimonial_rating" name="testimonial_rating">';
    for ($i = 1; $i <= 5; $i++) {
        echo '<option value="' . $i . '" ' . selected($rating, $i, false) . '>' . $i . '</option>';
    }
    echo '</select></td></tr>';
    echo '</table>';
}

// Save meta box data
function swift_marketing_save_meta_boxes($post_id) {
    // Check nonce and permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save service meta
    if (isset($_POST['swift_marketing_service_nonce_field']) && wp_verify_nonce($_POST['swift_marketing_service_nonce_field'], 'swift_marketing_service_nonce')) {
        if (isset($_POST['service_icon'])) {
            update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
        }
        if (isset($_POST['service_features'])) {
            update_post_meta($post_id, '_service_features', sanitize_textarea_field($_POST['service_features']));
        }
        update_post_meta($post_id, '_service_trending', isset($_POST['service_trending']) ? 1 : 0);
    }

    // Save case study meta
    if (isset($_POST['swift_marketing_case_study_nonce_field']) && wp_verify_nonce($_POST['swift_marketing_case_study_nonce_field'], 'swift_marketing_case_study_nonce')) {
        $fields = array('case_study_result', 'case_study_category', 'case_study_metrics', 'case_study_technologies', 'case_study_duration', 'case_study_budget');
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }

    // Save testimonial meta
    if (isset($_POST['swift_marketing_testimonial_nonce_field']) && wp_verify_nonce($_POST['swift_marketing_testimonial_nonce_field'], 'swift_marketing_testimonial_nonce')) {
        $fields = array('testimonial_client_name', 'testimonial_client_position', 'testimonial_client_company', 'testimonial_rating');
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action('save_post', 'swift_marketing_save_meta_boxes');

// AJAX handler for contact form
function swift_marketing_handle_contact_form() {
    check_ajax_referer('swift_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $service = sanitize_text_field($_POST['service']);
    $budget = sanitize_text_field($_POST['budget']);
    $timeline = sanitize_text_field($_POST['timeline']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Send email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nService: $service\nBudget: $budget\nTimeline: $timeline\n\nMessage:\n$message";
    
    $sent = wp_mail($to, $subject, $body);
    
    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! We\'ll get back to you within 24 hours.'));
    } else {
        wp_send_json_error(array('message' => 'Failed to send message. Please try again.'));
    }
}
add_action('wp_ajax_contact_form', 'swift_marketing_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'swift_marketing_handle_contact_form');

// AJAX handler for newsletter
function swift_marketing_handle_newsletter() {
    check_ajax_referer('swift_nonce', 'nonce');
    
    $email = sanitize_email($_POST['email']);
    
    // Here you would typically integrate with a newsletter service
    // For now, we'll just return a success message
    
    wp_send_json_success(array('message' => 'Successfully subscribed to our newsletter!'));
}
add_action('wp_ajax_newsletter', 'swift_marketing_handle_newsletter');
add_action('wp_ajax_nopriv_newsletter', 'swift_marketing_handle_newsletter');

// Customizer settings
function swift_marketing_customize_register($wp_customize) {
    // Add company info section
    $wp_customize->add_section('company_info', array(
        'title' => 'Company Information',
        'priority' => 30,
    ));

    // Phone number
    $wp_customize->add_setting('company_phone', array(
        'default' => '+27 (0)21 123 4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_phone', array(
        'label' => 'Phone Number',
        'section' => 'company_info',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('company_email', array(
        'default' => 'hello@swiftmarketing.co.za',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('company_email', array(
        'label' => 'Email Address',
        'section' => 'company_info',
        'type' => 'email',
    ));

    // Address
    $wp_customize->add_setting('company_address', array(
        'default' => 'Cape Town, South Africa',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_address', array(
        'label' => 'Address',
        'section' => 'company_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'swift_marketing_customize_register');

// Add custom body classes
function swift_marketing_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'homepage';
    }
    return $classes;
}
add_filter('body_class', 'swift_marketing_body_classes');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

?>