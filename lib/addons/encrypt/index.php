<?php

class encrypt extends application {
    	public static function encryptData($data, $key) {
            return hash('sha512',$key . $data);
	}
}
