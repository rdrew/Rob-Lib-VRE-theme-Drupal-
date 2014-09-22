<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * upei_vre theme.
 */

function upei_vre_field__field_proxy_link__proxy_test($variables) {
// the name of the function came from the devel themer tool after 1st putting dpm() in themename_field()
	
// dpm($variables);
// this dumps the vars using the devel mod. use it to target the varibles printed below.
	
	$output = '';

	$output = '<a href="http://proxy.library.upei.ca/login?url=' . $variables['items'][0]['#element']['url'] . '">' . $variables['items'][0]['#element']['title'] .  '</a>';
	
	return $output;
}
