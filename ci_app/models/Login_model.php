<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	var $tblName = 'auth';

	public function __construct() {
		parent::__construct();
		$dbconfig = array(
			'dsn' => '',
			'hostname' => 'localhost',
			'username' => 'winston',
			'password' => 'jz09bht0126',
			'database' => 'crud_db',
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE,
			'db_debug' => (ENVIRONMENT !== 'production'),
			'cache_on' => FALSE,
			'cachedir' => '',
			'char_set' => 'utf8',
			'dbcollat' => 'utf8_general_ci',
			'swap_pre' => '',
			'encrypt' => FALSE,
			'compress' => FALSE,
			'stricton' => FALSE,
			'failover' => array(),
			'save_queries' => TRUE
		);
		$this->load->database($dbconfig);
	}	

	public function login($user, $pass) {
		$this->db->select('username, password, level');
		$this->db->from($this->tblName);
		$this->db->where('username', $user);
		$this->db->where('password', mysql_password($pass));
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}
?>