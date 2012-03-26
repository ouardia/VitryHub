<?php
/**
 * External pages menu
 *
 * @uses $vars['type']
 */

$type = $vars['type'];

//set the url
$url = $vars['url'] . "mod/homepage _1_8/homepage?type=";
 
$pages = array('about', 'terms', 'privacy');
$tabs = array();
foreach ($pages as $page) {
	$tabs[] = array(
		'title' => elgg_echo("expages:$page"),
		'url' => "mod/homepage _1_8/homepage?type=$page",
		'selected' => $page == $type,
	);
}

echo elgg_view('navigation/tabs', array('tabs' => $tabs, 'class' => 'elgg-form-settings'));
