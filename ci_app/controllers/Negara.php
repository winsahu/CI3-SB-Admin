<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negara extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		$this->load->model('negara_model', 'nm');
		$level = $this->session->userdata('level');
		if (($level == 'admin') || ($level == 'dosen') || ($level == 'mahasiswa') || ($level == 'operator')) {
			//do nothing
		} else {
			redirect('login');
		}
	}

	public function index()	{
		$data['title'] = 'Table Negara with Pagination + AJAX';
		//$data['footer_modal'] = "negara/footer_modal";
		$data['footer_modal'] = "";
		$data['footer_js'] = "negara/footer_js";
		//pastikan semua file css berada pada folder assets/css
		$data['cssheader'] = array("vendor/fontawesome-free/css/all.css","vendor/bootstrap/datepicker/css/bootstrap-datepicker.min.css", "css/style.css");
		$this->load->view('negara/index', $data);
	}

	public function loadRecord($pagno=1) {
		// Search text
		$search_text = "";
		// Row per page
		$rowperpage = 10;
 
		if ($this->input->post('search_text') != '' ) {
			$search_text = $this->input->post('search_text');
		}
		if ($this->input->post('rowperpage') != 10 ) {
			$rowperpage = $this->input->post('rowperpage');
		}

		// All records count
		$allcount = $this->nm->count_all($search_text);
		// Get records
		$countries_record = $this->nm->getData($rowno, $rowperpage, $search_text);

		$max_pagno = ceil($allcount / $rowperpage);
		if ($pagno > $max_pagno) {
			$pagno = $max_pagno;
		}
		// Row position
		$rowno = ($pagno - 1) * $rowperpage;

		// Pagination Configuration
		$config = array();
		$config['base_url'] = base_url() . 'negara/loadRecord';
		//$config["base_url"] = "#";
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config["uri_segment"] = 3;
		$config["full_tag_open"] = '<div class="container text-center"><ul class="pagination">';
		$config["full_tag_close"] = '</ul></div>';
		$config['first_link'] = '&laquo; First';
		$config["first_tag_open"] = '<li class="page-item">';
		$config["first_tag_close"] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config["last_tag_open"] = '<li class="page-item">';
		$config["last_tag_close"] = '</li>';
		$config["next_link"] = 'Next &gt;';
		$config["next_tag_open"] = '<li class="page-item">';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = '&lt; Prev';
		$config["prev_tag_open"] = '<li class="page-item">';
		$config["prev_tag_close"] = '</li>';
		$config["cur_tag_open"] = '<li class="page-item active"><a class="page-link" href="#">';
		$config["cur_tag_close"] = '</a></li>';
		$config["num_tag_open"] = '<li class="page-item">';
		$config["num_tag_close"] = '</li>';
		$config['attributes'] = array('class' => 'page-link');

		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $countries_record;
		$data['row'] = $rowno;
		$data['search_text'] = $search_text;

		//echo json_encode($data);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}
}

?>