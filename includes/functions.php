<?php
function cf7_limiter_manage_recaptcha_assets() {
    global $post;

    // Check if the current page contains the CF7 shortcode
    $has_contact_form = is_singular() && isset($post->post_content) && has_shortcode($post->post_content, 'contact-form-7');

    // Dequeue scripts and styles if the page doesn't contain the shortcode
    if (!$has_contact_form) {
        wp_dequeue_script('google-recaptcha');
        wp_dequeue_script('wpcf7-recaptcha');
        wp_dequeue_style('wpcf7-recaptcha');
    }
}
add_action('wp_print_scripts', 'cf7_limiter_manage_recaptcha_assets', 100);
?>