<?php
/**
 * Plugin Name: Bangla Date and Digit
 * Plugin URI: https://www.linkerstech.com/plugins
 * Description: Convert English days, months and digit into Bangla language.
 * Version: 1.0
 * Author: Masudul Alam
 * Author URI: https://masud.best/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: bangla-date-and-digit
 * Domain Path: /languages
 *
 * @package Bangla_Date_And_Digit
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants.
define( 'BANGLA_DATE_AND_DIGIT_VERSION', '1.0' );
define( 'BANGLA_DATE_AND_DIGIT_FILE', __FILE__ );
define( 'BANGLA_DATE_AND_DIGIT_PATH', plugin_dir_path( __FILE__ ) );
define( 'BANGLA_DATE_AND_DIGIT_URL', plugin_dir_url( __FILE__ ) );
define( 'BANGLA_DATE_AND_DIGIT_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Load plugin textdomain.
 */
function bangla_date_and_digit_load_textdomain() {
    load_plugin_textdomain( 'bangla-date-and-digit', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'bangla_date_and_digit_load_textdomain' );

/**
 * Convert English days to Bangla.
 *
 * @param string $str The input string.
 * @return string The converted string.
 */
function bangla_date_and_digit_convert_days( $str ) {
    $day_en = array( 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'SATURDAY', 'SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday' );
    $day_hi = array( 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার' );
    return str_replace( $day_en, $day_hi, $str );
}

/**
 * Convert shortened English days to Bangla.
 *
 * @param string $str The input string.
 * @return string The converted string.
 */
function bangla_date_and_digit_convert_days_shorten( $str ) {
    $days_en = array( 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'SAT', 'SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri' );
    $days_hi = array( 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার' );
    return str_replace( $days_en, $days_hi, $str );
}

/**
 * Convert English months to Bangla.
 *
 * @param string $str The input string.
 * @return string The converted string.
 */
function bangla_date_and_digit_convert_months( $str ) {
    $month_en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december' );
    $month_hi = array( 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
    return str_replace( $month_en, $month_hi, $str );
}

/**
 * Convert shortened English months to Bangla.
 *
 * @param string $str The input string.
 * @return string The converted string.
 */
function bangla_date_and_digit_convert_months_shorten( $str ) {
    $months_en = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec' );
    $months_hi = array( 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
    return str_replace( $months_en, $months_hi, $str );
}

/**
 * Convert English digits to Bangla.
 *
 * @param string $str The input string.
 * @return string The converted string.
 */
function bangla_date_and_digit_convert_digits( $str ) {
    $english_digits = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
    $bangla_digits  = array( '০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯' );
    return str_replace( $english_digits, $bangla_digits, $str );
}

/**
 * Main function to convert all date and digit elements to Bangla.
 *
 * @param string $output The input string.
 * @return string The converted string.
 */
function bangla_date_and_digit( $output ) {
    $output = bangla_date_and_digit_convert_days( $output );
    $output = bangla_date_and_digit_convert_days_shorten( $output );
    $output = bangla_date_and_digit_convert_months( $output );
    $output = bangla_date_and_digit_convert_months_shorten( $output );
    $output = bangla_date_and_digit_convert_digits( $output );
    return $output;
}

/**
 * Apply Bangla date and digit conversion to various WordPress hooks.
 */
function bangla_date_and_digit_apply_filters() {
    $filters = array(
        'the_date', 'get_the_date', 'date_i18n', 'get_comment_date', 'widget_text',
        'get_calendar', 'get_the_archive_title', 'get_feed_build_date',
        'get_the_modified_date', 'the_modified_date', 'the_weekday_date',
        'wp_date', 'the_weekday', 'number_format_i18n'
    );

    foreach ( $filters as $filter ) {
        add_filter( $filter, 'bangla_date_and_digit' );
    }
}
add_action( 'init', 'bangla_date_and_digit_apply_filters' );

/**
 * Set transient on plugin activation.
 */
function bangla_date_and_digit_activation_hook() {
    set_transient( 'bangla-date-and-digit-notification', true, 5 );
}
register_activation_hook( __FILE__, 'bangla_date_and_digit_activation_hook' );

/**
 * Display activation notification.
 */
function bangla_date_and_digit_activation_notification() {
    if ( get_transient( 'bangla-date-and-digit-notification' ) ) {
        ?>
        <div class="updated notice is-dismissible">
            <p><?php esc_html_e( 'Thank you for installing Bangla Date and Digit!', 'bangla-date-and-digit' ); ?></p>
        </div>
        <?php
        delete_transient( 'bangla-date-and-digit-notification' );
    }
}
add_action( 'admin_notices', 'bangla_date_and_digit_activation_notification' );