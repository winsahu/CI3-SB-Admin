<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('date', 'url', 'tgl_indo', 'form', 'mysql_pwd'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		$this->load->model('personal_model', 'pm');
		$level = $this->session->userdata('level');
		if (($level == 'admin') || ($level == 'dosen') || ($level == 'mahasiswa') || ($level == 'operator')) {
			//do nothing
		} else {
			redirect('login');
		}
	}

	public function index() {
		$data['title'] = 'CRUD dengan Bootstrap modals, AJAX dan Pagination serta Upload Image';
		$data['footer_modal'] = "personal/footer_modal";
		$data['footer_js'] = "personal/footer_js";
		$data['cssheader'] = array("vendor/fontawesome-free/css/all.css","vendor/bootstrap/datepicker/css/bootstrap-datepicker.min.css", "css/style.css");
		$this->load->view('personal/index', $data);
	}

	public function loadRecord($pagno=1) {
		// Search text
		$search_text = "";
		// Row per page
		$rowperpage = 10;

		if ($this->input->post('search_text') != '' ) {
			$search_text = $this->input->post('search_text');
		}

		// All records count
		$totalRec = $this->pm->getTotalRec($search_text);

		if ($this->input->post('rowperpage') != 10 ) {
			$rowperpage = $this->input->post('rowperpage');
		}

		// Row position
		$total_page = ceil($totalRec / $rowperpage);
		if ($pagno > $total_page) {
			$pagno = $total_page;
		}
		$rowno = ($pagno - 1) * $rowperpage;

		// Get records
		$personal_record = $this->pm->getAllData($rowno, $rowperpage, $search_text);

		// Pagination Configuration
		$config = array();
		$config['base_url'] = base_url() . 'personal/loadRecord';
		//$config["base_url"] = "#";
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $totalRec;
		$config['per_page'] = $rowperpage;
		$config["uri_segment"] = 3;
		$config["full_tag_open"] = '<div class="container"><ul class="pagination">';
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
		$data['result'] = $personal_record;
		$data['rowno'] = $rowno;
		$data['search_text'] = $search_text;

		//echo json_encode($data);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}

	public function get_by_id($id) {
		$data = $this->pm->get_by_id($id);
		$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		//echo json_encode($data);
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));
	}

	public function addRecord() {
		$this->_validate();

		$data = array(
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'gender' => $this->input->post('gender'),
			'address' => $this->input->post('address'),
			'dob' => $this->input->post('dob'),
		);

		if (!empty($_FILES['photo']['name'])) {
			$upload = $this->_do_upload();
			$data['photo'] = $upload;
		}

		$insert = $this->pm->addRecord($data);

		//echo json_encode(array("status" => TRUE));
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode(array("status" => TRUE)));
	}
 
	public function updRecord($id) {
		$this->_validate();
		$data = array(
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'gender' => $this->input->post('gender'),
			'address' => $this->input->post('address'),
			'dob' => $this->input->post('dob'),
		);

		if ($this->input->post('remove_photo')) { // if remove photo checked
			if (file_exists('upload/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
				unlink('upload/'.$this->input->post('remove_photo'));
			$data['photo'] = '';
		}

		if (!empty($_FILES['photo']['name'])) {
			$upload = $this->_do_upload();
			//delete file
			$person = $this->pm->get_by_id($id);
			if (file_exists('upload/'. $person->photo) && $person->photo)
				unlink('upload/'.$person->photo);
 			$data['photo'] = $upload;
		}

		$this->pm->updRecord(array('id' => $id), $data);
		//echo json_encode(array("status" => TRUE));
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode(array("status" => TRUE)));
	}
 
	public function delRecord($id) {
		//delete file
		$person = $this->pm->get_by_id($id);
		if (file_exists('upload/'.$person->photo) && $person->photo)
			unlink('upload/'.$person->photo);

		$this->pm->delRecord($id);
		//echo json_encode(array("status" => TRUE));
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode(array("status" => TRUE)));
	}

	private function _do_upload() {
		$config['upload_path'] = 'upload/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 300; //set max size allowed in Kilobyte
		$config['max_width'] = 500; // set max width image allowed
		$config['max_height'] = 500; // set max height allowed
		$config['file_name'] = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('photo')) { //upload and validate
			$data['inputerror'][] = 'photo';
			$data['error_string'][] = 'Upload error: ' . $this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			//echo json_encode($data);
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($data));
			exit();
		}
		return $this->upload->data('file_name');
	}

	private function _validate() {
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if ($this->input->post('firstName') == '') {
			$data['inputerror'][] = 'firstName';
			$data['error_string'][] = 'Nama Depan tidak boleh kosong';
			$data['status'] = FALSE;
		}

		if ($this->input->post('lastName') == '') {
			$data['inputerror'][] = 'lastName';
			$data['error_string'][] = 'Nama Belakang tidak boleh kosong';
			$data['status'] = FALSE;
		}
 
		if ($this->input->post('dob') == '') {
			$data['inputerror'][] = 'dob';
			$data['error_string'][] = 'Tanggal Lahir tidak boleh kosong';
			$data['status'] = FALSE;
		}

		if ($this->input->post('gender') == '') {
			$data['inputerror'][] = 'gender';
			$data['error_string'][] = 'Harap pilih jenis kelamin';
			$data['status'] = FALSE;
		}

		if ($this->input->post('address') == '') {
			$data['inputerror'][] = 'address';
			$data['error_string'][] = 'Alamat tidak boleh kosong';
			$data['status'] = FALSE;
		}

		if ($data['status'] === FALSE) {
			//echo json_encode($data);
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode($data));
			exit();
		}
	}
}
?>
