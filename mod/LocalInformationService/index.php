<?php
//grab the login form
$login = elgg_view("core/account/login_dropdown");
// lay out the content
$params = array(
	'login' => $login
);
$body = elgg_view_layout('custom_index', $params);

// no RSS feed with a "widget" front page
global $autofeed;
$autofeed = FALSE;

echo elgg_view_page('', $body);

?>
