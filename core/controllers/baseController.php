<?php
/**
 * this is the baseController this is where the data is making ready to display
 */
class baseController extends application {
	public function __construct($controller) {
		application::console('baseControler Loaded');
		include ('lib/controllers/' . $controller['controller'] . '.php');
		$load = new $controller['controller'];
	}
	public function template(){
	}

}
