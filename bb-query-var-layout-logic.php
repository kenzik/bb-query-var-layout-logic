<?php
/**
 * Plugin Name: Beaver Logic - Query Var
 * Plugin URI: https://github.com/kenzik/bb-query-var-layout-logic
 * Description: Down and dirty way to use a query parameter to route a themer layout
 * Version: 1.0
 * Author: David Kenzik
 * Author URI: https://github.com/kenzik
 */

define( 'BB_QUERY_VAR_LAYOUT_LOGIC_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_QUERY_VAR_LAYOUT_LOGIC_URL', plugins_url( '/', __FILE__ ) );

// ?bbtl=value_you_are_looking_for
//
define( 'BB_QUERY_VAR_LAYOUT_LOGIC_PARAM', 'bbtl' );

add_action( 'bb_logic_init', function() {

	require_once BB_QUERY_VAR_LAYOUT_LOGIC_DIR . 'includes/rules.php';

});

add_action( 'bb_logic_enqueue_scripts', function() {

	wp_enqueue_script(
		'bb-logic-example-rules',
		BB_QUERY_VAR_LAYOUT_LOGIC_URL . 'js/rules.js',
		array( 'bb-logic-core' ),
		'1.0',
		true
	);

} );

// This isn't working as expected
add_filter( 'query_vars', 'bb_query_rule_vars' );
function bb_query_rule_vars( $vars ) {

	$vars[] .= BB_QUERY_VAR_LAYOUT_LOGIC_PARAM;
	return $vars;

}