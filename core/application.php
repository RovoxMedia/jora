<?php
session_start();
class application {

	public static $lang;

	public function __construct() {
		include_once ('core/controllers/baseController.php');
		include_once ('core/models/baseModel.php');
		include_once ('core/addons/templateEngine/template.php');
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
	
	public function loadAddon($name){
		include ('lib/addons/' . $name . '/index.php' );
	}

	public function console($data) {
		if (is_array($data))
			$output = "<script>console.log( 'Debug Objects: " . implode(',', $data) . "' );</script>";
		else
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
		echo $output;
	}
	public static function showError($msg){
		echo "<div style='color:red; float:left; background-color:white; margin:10px; padding:10px;'>there was a error see below for more details:<h3><b>";
		die ($msg);
		echo "<b></h3></div>";
	}
	public static function coreAddons($name){
		include"core/addons/$name/index.php";
	}
	
	public static function showview($name){
		include("/views/$name.php");
	} 

}
