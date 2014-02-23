<?php

class email extends application {
	private static $from;
	private static $to;
	private static $message;
	private static $subject;
	public static function sendEmail() {
		$headers = "From: " . self::$from . "\r\n" . "Reply-To:". self::$from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		if (!mail(self::$to, self::$subject, self::$message, $headers)) {
   		application::showError('Oops, Something went wrong with your email. Check if you had all the input.');
		}
	}
	public static function setFrom($data){
		self::$from = $data;	
	}
	public static function setTo($data){
		self::$to = $data;
	}
	public static function setMessage($message){
		self::$message = $message;
	}
	public static function setSubject($subject){
		self::$subject = $subject;
	}
}
