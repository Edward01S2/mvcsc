<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
  return '';
});

add_filter('wpseo_breadcrumb_separator', function () {
    return '<svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 text-black" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
  </svg>';
});

add_filter('acf/fields/google_map/api', function($api) {
  // Eventually move to private file
  $api['key'] = 'AIzaSyAhv4kCi2_Cl7Xqgcxs3tIWd96vOHDvFGI';
  return $api;
});

add_action('acf/init', function() {
  acf_update_setting('google_api_key', 'AIzaSyAhv4kCi2_Cl7Xqgcxs3tIWd96vOHDvFGI');
});