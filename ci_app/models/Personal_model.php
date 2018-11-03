<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal_model extends CI_Model {

	var $tbl_name = 'persons';

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
	public function getAllData($rowno, $rowperpage, $search="") {
		$this->db->select('*');
		$this->db->from($this->tbl_name);
		if (! empty($search)) {
			$this->db->like('firstName', $search);
			$this->db->or_like('lastName', $search);
			$this->db->or_like('gender', $search);
			$this->db->or_like('address', $search);
			$this->db->or_like('dob', $search);
		}
		$this->db->limit($rowperpage, $rowno);
		$query = $this->db->get();
 
		return $query->result_array();
	}

	// Get records count
	public function getTotalRec($search="") {
		$this->db->from($this->tbl_name);
		if ($search != '') {
			$this->db->like('firstName', $search);
			$this->db->or_like('lastName', $search);
			$this->db->or_like('gender', $search);
			$this->db->or_like('address', $search);
			$this->db->or_like('dob', $search);
			$query = $this->db->get();
			return $query->num_rows();
		} else {
			return $this->db->count_all_results();
		}
	}

	public function get_by_id($id) {
		$this->db->from($this->tbl_name);
		$this->db->where('id', $id);
		$query = $this->db->get();
 		return $query->row();
	}

	public function addRecord($data) {
		$this->db->insert($this->tbl_name, $data);
		return $this->db->insert_id();
	}

	public function updRecord($where, $data) {
		$this->db->update($this->tbl_name, $data, $where);
		return $this->db->affected_rows();
	}

	public function delRecord($id) {
		$this->db->where('id', $id);
		$this->db->delete($this->tbl_name);
	}
}
?>
