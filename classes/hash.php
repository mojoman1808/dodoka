<?php
class hash{
	public static function make($string, $salt=''){
		return utf8_encode(hash('sha256', $string, $salt));
	}
	public static function salt($length){
		return random_bytes($length);
	}
	public static function unique(){
		return self::make(uniqid());
	}
}