<?php

class session extends application{
	public static function createSession($name, $data)
	{
		$_SESSION[$name] = $data;
	}
	public static function readSession($name = null){	
		if(!$name == null){
			return $_SESSION[$name];
		}else{
			application::showError("<h3><b style='color:red;'>Fatal error: No name for the session is given</b><h3>");
		}
			
	
	}
	public static function distroySession(){
			session_destroy();
	}
}
