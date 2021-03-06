<?php 

class Session {

	public static function init() {
		session_start();
	}

	public static function set($key, $value) {
		$_SESSION[$key] = $value;
 	}

 	public static function get($key) {
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		} else {
			return false;
		}
 	}

 	public static function checkSessionAdmin() {
 		if (self::get("login_admin") == false || self::get("login_admin") == "") {
			header('Location: '.BASE_URL."/admin");
 		}
 	}

 	public static function destroy() {
 		session_destroy();
 	}

 	public static function unset($key) {
 		unset($_SESSION[$key]);
 	}

}

?>