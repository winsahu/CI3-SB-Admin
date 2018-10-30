<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negara_model extends CI_Model {
	private $tbl_name = 'countries';
	public function __construct() {
		parent::__construct();
		$dbconfig = array(
			'dsn' => '',
			'hostname' => 'localhost',
			'username' => 'admin',
			'password' => 'H4ru5.151',
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

	// Get records
	public function getData($rowno, $rowperpage, $search="") {
		$this->db->select('*');
		$this->db->from($this->tbl_name);
		if (! empty($search)) {
			$this->db->like('country_code', $search);
			$this->db->or_like('country_name', $search);
		}
		$this->db->limit($rowperpage, $rowno);
		$query = $this->db->get();
 
		return $query->result_array();
	}

	// Get records count
	public function count_all($search="") {
		$this->db->from($this->tbl_name);
		if ($search != '') {
			$this->db->like('country_code', $search);
			$this->db->or_like('country_name', $search);
			$query = $this->db->get();
			return $query->num_rows();
		} else {
			return $this->db->count_all_results();
		}
	}
}

?>