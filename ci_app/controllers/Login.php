<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form', 'mysql_pwd'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		$this->load->model('login_model', 'lm');		
	}

	public function index() {
		$data['pesan'] = '';
		$data['title'] = 'Silahkan Login';
		$data['cssheader'] = array('vendor/fontawesome-free/css/all.min.css', 'css/signin.css');
		//$data['footer_modal'] = 'welcome/footer_modal';
		$data['footer_js'] = 'login/footer_js';
		$this->load->view('login/index', $data);
	}

	public function proses_login() {
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$ceklogin = $this->lm->login($user, $pass);
		if ($ceklogin) {
			$output['status'] = 'success';
			$output['pesan'] = '';
			foreach ($ceklogin as $row) {
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('level', $row->level);
			}
			if ($this->session->userdata('level') == 'admin') {
				$output['redirect'] = site_url('admin/index');
			} elseif ($this->session->userdata('level') == 'dosen') {
				$output['redirect'] = site_url('dosen/index');
			} elseif ($this->session->userdata('level') == 'operator') {
				$output['redirect'] = site_url('operator/index');
			} elseif ($this->session->userdata('level') == 'mahasiswa') {
				$output['redirect'] = site_url('mahasiswa/index');
			}
		} else {
			$output['status'] = 'fail';
			$output['pesan'] = 'User Name pilih antara: admin, dosen, mahasiswa, operator - Password untuk semua adalah : H4ru5.151';
			$output['redirect'] = site_url('login/index');
		}
		echo json_encode($output);
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>