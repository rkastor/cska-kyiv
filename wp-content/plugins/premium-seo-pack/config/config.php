<?php

/**
 * The configuration file
 */
define('PSP_REQUEST_TIME', microtime(true));
if (!defined('_PSP_NONCE_ID_')) {
    if (defined('NONCE_KEY')) {
        define('_PSP_NONCE_ID_', NONCE_KEY);
    } else {
        define('_PSP_NONCE_ID_', md5(date('Y-d')));
    }
}
define('_PSP_DASH_URL_', 'https://my.squirrly.co/');
defined('_PSP_API_URL_') || define('_PSP_API_URL_', 'https://api.squirrly.co/');


if (!defined('PHP_VERSION_ID')) {
    $version = explode('.', PHP_VERSION);
    define('PHP_VERSION_ID', ((int) @$version[0] * 1000 + (int) @$version[1] * 100 + ((isset($version[2])) ? ((int) $version[2] * 10) : 0)));
}
if (!defined('PSP_VERSION_ID')) {
    $version = explode('.', PSP_VERSION);
    define('PSP_VERSION_ID', ((int) @$version[0] * 1000 + (int) @$version[1] * 100 + ((isset($version[2])) ? ((int) $version[2] * 10) : 0)));
}

/* No path file? error ... */
require_once(dirname(__FILE__) . '/paths.php');
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

/* Define the record name in the Option and UserMeta tables */
define('PSP_OPTION', '_psp_options');


define('PSP_ALL_SEP', json_encode(array(
    'sc-dash' => '-',
    'sc-ndash' => '&ndash;',
    'sc-mdash' => '&mdash;',
    'sc-middot' => '&middot;',
    'sc-bull' => '&bull;',
    'sc-star' => '*',
    'sc-smstar' => '&#8902;',
    'sc-pipe' => '|',
    'sc-tilde' => '~',
    'sc-laquo' => '&laquo;',
    'sc-raquo' => '&raquo;',
    'sc-lt' => '&lt;',
    'sc-gt' => '&gt;',
)));

