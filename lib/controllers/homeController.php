<?php

/**
 * the home controller
 */
class homeController extends baseController {
	
	function __construct() {
		$data = array('content' => 'Dashboard!', 'title' => 'Jora');
		application::showtemplate('home.php', $data);
		application::loadAddon('session');
		session::createSession('test', 'hoi');
		echo session::readSession('test');
		session::distroySession('test');
		application::loadAddon('encrypt');
		echo encrypt::encryptData('hoi','hoi');
		
		
	}
}
