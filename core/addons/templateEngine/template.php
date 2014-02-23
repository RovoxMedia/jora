<?php
/**
 * the temapalte file
 */
class template extends application {

	function __construct($folder) {
		$this -> folder = $folder;
	}

	function show($filename, $data = null, $lang = null) {
		application::console('template ' . $filename . ' loaded');
		echo $this -> getTemplate('home.php', $data, $lang);

	}

	public function getTemplateUrl($filename) {
		return file_get_contents($this -> folder . '/' . $filename);
	}

	public function getTemplate($filename, $data = null, $lang = null) {
		$template = $this -> getTemplateUrl($filename);
		foreach ($data as $key => $value) {
			$template = str_replace('{' . $key . '}', $value, $template);
		}
		foreach ($lang as $key => $value) {
			$template = str_replace('{' . $key . '}', $value, $template);
		}

		return $template;
	}

}
