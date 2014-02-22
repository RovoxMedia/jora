<?php

	class application{
		
		public function __construct()
		{
			include_once('core/controllers/baseControler.php');
			include_once('core/models/baseModel.php');
			include_once('lib/addons/templateEngine/template.php');
			$this->config = parse_ini_file("config.ini", 1);
			$this->baseController = new baseControler;
			$this->baseModel = new baseModel;
			$this->template = new template('lib/templates');
			
			
			$this->template->show('home.php');
			
			
			echo "<pre>";
			print_r($this->config);
			echo "</pre>";
		}
		public function console($data){
		if ( is_array( $data ) )
	        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
	    else
	        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
	
	    echo $output;
		}
	}
	