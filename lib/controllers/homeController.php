<?php

/**
 * the home controller
 */
class homeController extends baseController {
	
	function __construct() {
		$data = array('content' => 'Dashboard!', 'title' => 'Jora');
		application::showtemplate('home.php', $data);
	}
}
