<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('mysql_password')) {
	function mysql_password($str_pwd) {
		$pass = strtoupper(sha1(sha1($str_pwd, true)));
		$pass = '*' . $pass;
		return $pass;
	}
}
?>