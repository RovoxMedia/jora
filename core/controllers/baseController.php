<?php
/**
 * this is the baseController this is where the data is making ready to display
 */
class baseController extends application {
	public function __construct($controller, $database) {
		application::console('baseControler Loaded');
        if(empty($_GET['c'])){
            include ('lib/controllers/' . $controller['controller'] . '.php');
		    $load = new $controller['controller']($database);
        }else{
            if(file_exists('lib/controllers/' . $_GET['c'] . '.php')){
                include ('lib/controllers/' . $_GET['c'] . '.php');
                $load = new $_GET['c']($database);
            }else{
                application::showError("the controller " . $_GET['c'] . " does not exitst");
            }
            
           
        }

	}
}
