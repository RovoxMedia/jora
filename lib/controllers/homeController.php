<?php

/**
 * the home controller
 */
class homeController extends baseController {
	function __construct($database) {
        application::loadAddon('pagespeed');
        pagespeed::startLoading();
		$data = array('content' => 'Dashboard!', 'title' => 'Jora');
		application::showtemplate('home.php', $data);
        echo pagespeed::getTime();
        application::loadAddon('auth');
	}
}
