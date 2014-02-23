<?php

class session extends application{
	public static function createSession($name = null, $data = null)
	{
        if(!$name == null){
		$_SESSION[$name] = $data;
        }else{
			application::showError("Fatal error: No name for the session is given");
		}
	}
	public static function readSession($name = null){	
		if(!$name == null){
			if(isset($_SESSION[$name])){
				return $_SESSION[$name];
			}
			application::showError("Fatal error: Session '$name' does not exits");
		}else{
			application::showError("Fatal error: No name for the session is given");
		}
			
	
	}
	public static function distroySession(){
			session_destroy();
	}
}
