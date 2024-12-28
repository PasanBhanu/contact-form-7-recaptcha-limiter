<?php
/*
Plugin Name: CF7 reCAPTCHA Limiter
Plugin URI: https://softinklab.com
Description: Limits reCAPTCHA loading to pages containing Contact Form 7 forms.
Version: 1.0
Author: Pasan Guruge
Author URI: https://pasanbhanu.me
License: Apache 2.0
License URI: https://www.apache.org/licenses/LICENSE-2.0
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define constants
define('CF7_LIMITER_PATH', plugin_dir_path(__FILE__));
define('CF7_LIMITER_URL', plugin_dir_url(__FILE__));

// Include additional functionality
require_once CF7_LIMITER_PATH . 'includes/functions.php';
?>