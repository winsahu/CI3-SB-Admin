<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
	}

	public function index() {
		$data['title'] = 'Welcome to CodeIgniter';
		$data['cssheader'] = array('css/sb-admin.css', 'css/ci_welcome.css');
		//$data['footer_modal'] = 'welcome/footer_modal';
		$data['footer_modal'] = '';
		$data['footer_js'] = 'welcome/footer_js';
		$this->load->view('welcome/index', $data);
	}
}
