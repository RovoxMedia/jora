<?php

class session extends application{
	public static function createSession($name, $data)
	{
		$_SESSION[$name] = $data;
	}
	public static function readSession($name = null){	
		if(!$name == null){
			if(isset($_SESSION[$name])){
				return $_SESSION[$name];
			}
			application::showError("Fatal error: Session name does not exits");
		}else{
			application::showError("Fatal error: No name for the session is given");
		}
			
	
	}
	public static function distroySession(){
			session_destroy();
	}
}
