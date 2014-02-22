<?php

	class application{
		
		public function __construct()
		{
			include_once('lib/controllers/baseControler.php');
			include_once('lib/models/baseModel.php');
			$this->config = parse_ini_file("config.ini", 1);
			echo "<pre>";
			print_r($this->config);
			echo "</pre>";
		}
	}
	