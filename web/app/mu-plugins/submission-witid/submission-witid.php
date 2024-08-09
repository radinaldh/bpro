<?php

/**
 * Plugin Name: Submission by WIT.ID
 * Plugin URI: https://wit.id
 * Description: Custom post type for managing submissions with email and WhatsApp notifications.
 * Version: 1.0.0
 * Author: Radinal
 * Author URI: https://radinal.com
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * SUBMISSION 
 */

function register_submission_post_type()
{
    $args = array(
        'labels' => array(
            'name' => __('Submissions'),
            'singular_name' => __('Submission')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => array('title', 'editor', 'custom-fields'),
        'capabilities' => array(
            'create_posts' => 'do_not_allow', // Using 'do_not_allow' to disable creating new posts
        ),
        'map_meta_cap' => true, // Use the actual capabilities set above
    );

    register_post_type('submission', $args);
}
add_action('init', 'register_submission_post_type');

function enqueue_custom_js()
{
    wp_enqueue_script('custom-js', plugin_dir_url(__FILE__) . '/js/custom.js', array('jquery'), null, true);
    wp_localize_script('custom-js', 'ajax_params', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js');

function handle_form_submission()
{

    // $recaptcha_response = sanitize_text_field($_POST['g-recaptcha-response']);
    // $secret_key = '6Ld0hyIqAAAAAN_coXvQd6zatH7lJYbC8MU4lXWw'; // Replace with your actual secret key
    // $response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}");

    // $response_body = wp_remote_retrieve_body($response);
    // $result = json_decode($response_body);

    // if (!$result->success) {
    // 	wp_send_json_error('reCAPTCHA verification failed.');
    // 	return;
    // }

    // Check nonce and sanitize inputs as previously discussed
    $post_id = wp_insert_post([
        'post_title' => sanitize_text_field($_POST['name']),
        'post_content' => '',
        'post_status' => 'publish',
        'post_type' => 'submission',
        'meta_input' => [
            'email' => sanitize_email($_POST['email']),
            'phone' => sanitize_text_field($_POST['phone']),
            'checked_in' => 'false', // Initial status, not checked in
        ],
    ]);

    if ($post_id) {
        $token = generate_secure_token($post_id);
        update_post_meta($post_id, 'secure_token', $token); // Store token in post meta

        $qr_code_url = generate_qr_code_with_token($token); // Generate QR code using the token
        update_post_meta($post_id, 'qr_code_url', $qr_code_url); // Store QR code URL in post meta

        send_qr_code_email($post_id); // Send email with QR code

        $redirect_url = get_permalink($post_id); // Get the permalink to the post
        wp_send_json_success($redirect_url);
    } else {
        wp_send_json_error('There was an error with the submission.');
    }
}

add_action('wp_ajax_submit_form', 'handle_form_submission'); // For logged-in users
add_action('wp_ajax_nopriv_submit_form', 'handle_form_submission'); // For non-logged-in users

function modify_submission_columns($columns)
{
    $new_columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __('Name'),
        'email' => __('Email'),
        'phone' => __('Phone No.'),
        'checked_in' => __('Checked In'), // New column for checked-in status
        'send_email' => __('Send Email'),
        'date' => __('Date')
    );
    return $new_columns;
}
add_filter('manage_submission_posts_columns', 'modify_submission_columns');

function custom_submission_column_content($column, $post_id)
{
    switch ($column) {
        case 'email':
            echo get_post_meta($post_id, 'email', true);
            break;
        case 'phone':
            echo get_post_meta($post_id, 'phone', true);
            break;
        case 'checked_in':
            $checked_in = get_post_meta($post_id, 'checked_in', true);
            echo ($checked_in === 'true') ? 'Yes' : 'No'; // Explicitly check for the string "true"
            break;
    }
}
add_action('manage_submission_posts_custom_column', 'custom_submission_column_content', 10, 2);

function checked_in_meta_box_html($post)
{
    $checked_in = get_post_meta($post->ID, 'checked_in', true);
    wp_nonce_field('save_checked_in_meta_box_data', 'checked_in_meta_box_nonce');
?>
    <label for="checked_in_status">Checked In:</label>
    <select name="checked_in_status" id="checked_in_status">
        <option value="false" <?php selected($checked_in, 'false'); ?>>No</option>
        <option value="true" <?php selected($checked_in, 'true'); ?>>Yes</option>
    </select>
    <?php
}


function add_checked_in_meta_box()
{
    add_meta_box(
        'checked_in_status',      // ID of the meta box
        'Checked In Status',      // Title of the meta box
        'checked_in_meta_box_html', // Callback function to display the meta box content
        'submission',             // Post type
        'side',                   // Context where the box will show ('normal', 'side', 'advanced')
        'high'                    // Priority within the context
    );
}
add_action('add_meta_boxes', 'add_checked_in_meta_box');

function save_checked_in_meta_box_data($post_id)
{
    // Check if our nonce is set.
    if (!isset($_POST['checked_in_meta_box_nonce'])) {
        return $post_id;
    }
    $nonce = $_POST['checked_in_meta_box_nonce'];

    // Verify that the nonce is valid.
    if (!wp_verify_nonce($nonce, 'save_checked_in_meta_box_data')) {
        return $post_id;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'submission' == $_POST['post_type']) {
        if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
    }

    // Sanitize the user input.
    $new_value = (isset($_POST['checked_in_status']) && $_POST['checked_in_status'] === 'true') ? 'true' : 'false';

    // Update the meta field.
    update_post_meta($post_id, 'checked_in', $new_value);
}
add_action('save_post', 'save_checked_in_meta_box_data');


function custom_submission_sortable_columns($columns)
{
    $columns['email'] = 'email';
    $columns['phone'] = 'phone';
    return $columns;
}
add_filter('manage_edit-submission_sortable_columns', 'custom_submission_sortable_columns');

function hide_add_new_submission_button()
{
    global $pagenow, $typenow;

    // Only apply to the submission post type listings
    if ('edit.php' === $pagenow && 'submission' === $typenow) {
        echo '<style type="text/css">
			 .page-title-action { display: none; }
		 </style>';
    }
}
add_action('admin_head', 'hide_add_new_submission_button');

function register_check_in_route()
{
    register_rest_route('bethany/v1', '/check-in/', array(
        'methods' => 'GET',
        'callback' => 'handle_check_in',
        // 'permission_callback' => 'check_auth_token'
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'register_check_in_route');

function check_auth_token()
{
    $headers = getallheaders();
    if (isset($headers['Authorization'])) {
        $auth_token = $headers['Authorization'];
        $users = get_users(array(
            'meta_key' => 'login_token',
            'meta_value' => $auth_token,
            'number' => 1
        ));
        if (!empty($users)) {
            return true;
        }
    }
    return false;
}

function handle_check_in($request)
{
    $token = $request->get_param('token');
    $secret_key = $request->get_header('x-secret-key');
    $expected_key = 'aB7#dfG8*kLm@1nOpQr9+T!sUvWx2yZ';

    if (!$token || !$secret_key || $secret_key !== $expected_key) {
        return new WP_Error('unauthorized_access', 'Unauthorized access', array('status' => 403));
    }

    $args = [
        'post_type' => 'submission',
        'meta_query' => [
            [
                'key' => 'secure_token',
                'value' => $token,
                'compare' => '='
            ]
        ],
        'posts_per_page' => 1
    ];

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        $query->the_post();
        $checked_in = get_post_meta(get_the_ID(), 'checked_in', true);

        if ($checked_in === 'true') {
            return rest_ensure_response(['message' => 'User already checked in', 'success' => false]);
        }

        update_post_meta(get_the_ID(), 'checked_in', 'true');
        return rest_ensure_response(['message' => 'Check-in successful', 'success' => true]);
    } else {
        return new WP_Error('invalid_token', 'Invalid token', array('status' => 404));
    }
}


function handle_cors()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Authorization, Content-Type");
}

add_action('rest_api_init', function () {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
    add_filter('rest_pre_serve_request', function ($value) {
        handle_cors();
        return $value;
    });
}, 15);

function generate_secure_token($post_id)
{
    return hash('sha256', $post_id . NONCE_SALT);  // NONCE_SALT should be defined in your wp-config.php for security
}

function generate_qr_code_with_token($token)
{
    $data = urlencode('https://bethanyprofessional.com/wp-json/bethany/v1/check-in?token=' . $token);
    return "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=$data";
}

function check_in_participant()
{
    if (isset($_POST['token'])) {
        $token = sanitize_text_field($_POST['token']);
        $args = [
            'post_type' => 'submission',
            'meta_query' => [
                [
                    'key' => 'secure_token',
                    'value' => $token,
                    'compare' => '='
                ]
            ],
            'posts_per_page' => 1 // Limit the query to one result for efficiency
        ];
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            $query->the_post();
            update_post_meta(get_the_ID(), 'checked_in', 'Yes');
            wp_reset_postdata(); // Reset the global post object
            wp_send_json_success('Checked in successfully.');
        } else {
            wp_send_json_error('Invalid token.');
        }
    } else {
        wp_send_json_error('Token not provided.');
    }
}

add_action('wp_ajax_check_in_participant', 'check_in_participant');
add_action('wp_ajax_nopriv_check_in_participant', 'check_in_participant');


function add_panitia_role()
{
    add_role('panitia', 'Panitia', array(
        'read' => true,
        'manage_check_in' => false, // Add the manage_check_in capability
        'edit_posts' => false,
        'delete_posts' => false,
        'publish_posts' => false,
        'upload_files' => false,
    ));
}
add_action('init', 'add_panitia_role');

// Hide admin bar for users with the role "panitia"
function hide_admin_bar_for_panitia()
{
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        if (in_array('panitia', (array) $user->roles)) {
            show_admin_bar(false);
        }
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_panitia');

function custom_logout()
{
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        check_admin_referer('log-out');
        wp_logout();
        echo "<script>
			 localStorage.removeItem('loginToken');
			 window.location.href = '" . home_url('/panitia-login') . "';
		 </script>";
        exit;
    }
}
add_action('init', 'custom_logout');


function enqueue_custom_login_js()
{
    wp_enqueue_script('custom-login-js', plugin_dir_url(__FILE__) . '/js/custom-login.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_login_js');

function send_qr_code_email($post_id)
{
    $email = get_post_meta($post_id, 'email', true);
    $name = get_the_title($post_id);
    $phone = get_post_meta($post_id, 'phone', true);
    $qr_code_url = get_post_meta($post_id, 'qr_code_url', true);

    $subject = 'Invitation QR Code for DISCOVER CYBER SECURITY AND FINANCIAL TRAP';

    $body = '<p>Shallom profesional muda,</p>';
    $body .= '<p>Invitation for:</p>';
    $body .= '<p>Name: ' . $name . '<br>';
    $body .= 'Email: ' . $email . '<br>';
    $body .= 'Phone: ' . $phone . '</p>';
    $body .= '<p>QRCode Invitation:</p>';
    $body .= '<p><img src="' . $qr_code_url . '" alt="QR Code"></p>';
    $body .= '<p>Terima kasih.<br>Tuhan Yesus memberkati<br>Be Success, Be Profesional.</p>';

    $headers = array('Content-Type: text/html; charset=UTF-8');

    if (wp_mail($email, $subject, $body, $headers)) {
        update_post_meta($post_id, 'email_sent', true);
    }
}

function format_phone_number_for_whatsapp($phone)
{
    $phone = str_replace([' ', '-', '+'], '', $phone);

    if (strpos($phone, '0') === 0) {
        $phone = '62' . substr($phone, 1);
    }

    return $phone;
}


function add_send_email_button($column, $post_id)
{
    if ($column === 'send_email') {
        $email_sent = get_post_meta($post_id, 'email_sent', true);
        $button_text = $email_sent ? 'Send Email Again' : 'Send Email';
        echo '<button class="button send-email" data-post-id="' . $post_id . '"style="margin-right: 10px">' . $button_text . '</button>';

        $phone = get_post_meta($post_id, 'phone', true);
        $phone = format_phone_number_for_whatsapp($phone);

        $name = get_the_title($post_id);
        $email = get_post_meta($post_id, 'email', true);
        $qr_code_url = get_permalink();

        $whatsapp_message = urlencode(
            "*Invitation QR Code for DISCOVER CYBER SECURITY AND FINANCIAL TRAP*\n" .
                "Name: $name\n" .
                "Email: $email\n" .
                "Phone: +$phone\n\n" .
                "QR Code: $qr_code_url\n\n" .
                "This message was automatically generated."
        );

        $whatsapp_url = "https://api.whatsapp.com/send?phone=$phone&text=$whatsapp_message";

        echo '<a href="' . $whatsapp_url . '" target="_blank" class="button send-whatsapp">Send WhatsApp</a>';
    }
}
add_action('manage_submission_posts_custom_column', 'add_send_email_button', 10, 2);




function handle_send_email()
{
    if (isset($_POST['post_id'])) {
        $post_id = intval($_POST['post_id']);
        send_qr_code_email($post_id);
        set_transient('email_sent_success', true, 30);
        wp_send_json_success();
    } else {
        wp_send_json_error('Invalid post ID.');
    }
}
add_action('wp_ajax_send_email', 'handle_send_email');

function display_email_sent_notice()
{
    if (get_transient('email_sent_success')) {
    ?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e('Email sent successfully.', 'text-domain'); ?></p>
        </div>
<?php
        delete_transient('email_sent_success'); // Delete the transient after displaying the notice
    }
}
add_action('admin_notices', 'display_email_sent_notice');

function enqueue_admin_custom_js()
{
    wp_enqueue_script('custom-admin-js', plugin_dir_url(__FILE__) . '/js/custom-admin.js', array('jquery'), null, true);
    wp_localize_script('custom-admin-js', 'ajax_params', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'enqueue_admin_custom_js');
