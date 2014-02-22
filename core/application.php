<?php

class application {

	public static $lang;

	public function __construct() {
		include_once ('core/controllers/baseController.php');
		include_once ('core/models/baseModel.php');
		include_once ('lib/addons/templateEngine/template.php');
		$this -> config = parse_ini_file("config.ini", 1);
		$this -> settingGeneral = $this -> config['general'];
		$this -> getlang($this -> settingGeneral['lang']);
		$this -> boostrap($contoller = $this -> settingGeneral);
	}

	public function getlang($lang) {
		include_once ('lib/lang/' . $lang . '.php');
	}

	public function boostrap($controller) {

		$this -> baseController = new baseController($controller);
		$this -> baseModel = new baseModel;
		
	}
	
	public function showtemplate($template, $data = null){
		$this -> template = new template('lib/templates');
		$this -> template -> show($template, $data , $lang = self::$lang);
	}

	public function console($data) {
		if (is_array($data))
			$output = "<script>console.log( 'Debug Objects: " . implode(',', $data) . "' );</script>";
		else
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
		echo $output;
	}

}
