<?php
	if (!defined('INITIALIZED'))
		exit;

	ob_start();
	$main_content = '';
	include("pages/" . $page . ".php");
	$main_content .= ob_get_clean();