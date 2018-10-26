# CI3-SB-Admin
Ini Adalah arsip Codeigniter versi 3.1.9 yang ditambahkan template SB Admin - Bootstrap 4.1.3
Cara integrasi dapat dilihat pada controller Welcome yang sudah di modifikasi untuk menunjuk ke folder view/welcome

//Controller:
pada Controller Welcome function index:
$data['title'] = 'Welcome to CodeIgniter';
$data['cssheader'] = array('css/sb-admin.css', 'css/ci_welcome.css');
//$data['footer_modal'] = 'welcome/footer_modal';
$data['footer_modal'] = '';
$data['footer_js'] = 'welcome/footer_js';
$this->load->view('welcome/index', $data);


Bila ingin menambahkan bootstrap modal dialog maka buatlah pada file views/welcome/footer_modal.php

//View
// file: views/welcome/index.php
$this->load->view('layout/header');
$this->load->view('layout/fix_menu');

<div id="container">
	<h1><?= $title; ?>!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="/user_guide/" target="_blank">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

$this->load->view('layout/footer');


Untuk file view/layout/header.php, view/layout/footer.php, view/layout/fix-menu.php dan views/welcome/footer_js.php silahkan di lihat langsung
