<?php 
include_once "Log.php";

class Auth 
{
	
	 public static $password;
	 public static $username = 'guest';
	
	 public static function getPassword() 
	 {
	 	$filename = '../logdata/password.csv';
	 	$handle = fopen($filename,'r');
	 	self::$password = fread($handle, filesize($filename));
	 	fclose($handle);
	 	self::$password = trim(self::$password);
	 	
	 }



	 public static function attempt($username, $password) 
	 {
	 	self::getPassword();

	 	if ($username == self::$username && password_verify($password, self::$password)) {
			
			var_dump("i'm called");
			// this is code from the login ex
			$_SESSION['logged_in_user']= true;
			$_SESSION['username'] = $username;

			//Log the attempt
			$login = new Log();
			$login->info( $username .' is logged in');

			return true;

		} else {

			//Log the attempt
			$login = new Log();
			$login->error($username .' login failed');
			
			return false;
		}
	 }

	 public static function check() 
	 {
	 	if(!isset($_SESSION['logged_in_user']) || !$_SESSION['logged_in_user']){

	 		return true;

	 	} else {

	 		return false;
	 	}
	 }

	 public static function user() 
	 {
	 	return self::$username;
	 }

	 public static function logout() 
	 {
	 	  // clear $_SESSION array
	    session_unset();

	    // delete session data on the server and send the client a new cookie
	    session_regenerate_id(true);
	 }
}

Auth::getPassword();