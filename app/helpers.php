<?php

/**
 * Theme helpers.
 */

namespace App;

$GLOBALS['query_filters'] = array( 
	'tag'	=> 'tag', 
);

// add_action('pre_get_posts', function($query) {

//   // bail early if is in admin
// 	if( is_admin() ) return;
	
	
// 	// bail early if not main query
// 	// - allows custom code / plugins to continue working
//   if( !$query->is_main_query() ) return;


//   	// loop over filters
// 	foreach( $GLOBALS['query_filters'] as $key => $name ) {
		
//     // continue if not found in url
// 		if( empty($_GET[ $name ]) ) {
			
// 			continue;
			
// 		}
		
		
// 		// get the value for this filter
// 		// eg: http://www.website.com/events?city=melbourne,sydney
// 		$value = explode(',', $_GET[ $name ]);
		
// 		//print_r($value);
// 		// append meta query

//     if(isset($value) && $value) :

  
//       if(isset($_GET['tag'])):
//         $query->set('tax_query', array(
//           array(
//             'taxonomy'		=> 'post_tag',
//             'field'		=> 'slug',
//             'terms'	=> $value,
//           )
//         ));
//       endif;
  
//     endif;

        
// 	} 
  
  
// });


// add_action('wp', function() {
//   //Check if login page and redirect to member-resources
//   if ( is_user_logged_in() && is_page(128) ) {
//     wp_redirect('/resources');
//     exit;
// }
// });