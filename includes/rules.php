<?php

BB_Logic_Rules::register( array(
    'bb-query-var-layout-logic/layout-query-var' => 'bb_query_var_layout_logic',
) );

function bb_query_var_layout_logic( $rule ) {
	return BB_Logic_Rules::evaluate_rule( array(
		'value' 	=> get_query_var( BB_QUERY_VAR_LAYOUT_LOGIC_PARAM ), // Defined in main plugin file
		'operator' 	=> $rule->operator,
		'compare' 	=> $rule->var,
	) );
}
