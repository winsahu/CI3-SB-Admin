Ini Adalah arsip Codeigniter versi 3.1.9 yang ditambahkan template SB Admin - Bootstrap 4.1.3 <br />
Untuk integrasi gunakan cara sebagai berikut:<br />
1. Pada Controller function index buat sebagai berikut:<br />
```
public function index() {
	$data['title'] = 'Welcome to CodeIgniter';
	$data['cssheader'] = array('css/sb-admin.css', 'css/ci_welcome.css');
	//$data['footer_modal'] = 'welcome/footer_modal';
	$data['footer_modal'] = '';
	$data['footer_js'] = 'welcome/footer_js';
	$this->load->view('welcome/index', $data);
}
```
2. Pada file views/welcome/index.php buat sebagai berikut:<br />
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header');
$this->load->view('layout/fix_menu');
?>
<div class="container">
	<div class="row">
	   <div  class="col-md-12">
	       <h1 style="margin-top: 57px;"><?= $title; ?>!</h1>
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
	</div>
</div>
<?php
$this->load->view('layout/footer');
?>
```
3. Untuk file views/layout/header.php dan file views/layout/footer.php serta file views/layout/fix_menu.php dapat dilihat sendiri<br />
<br />
Saat ini sudah ditambahkan proses login menggunakan ajax juga codeigniter pagination + ajax
<br />
Penambahan CRUD dengan Bootstrap modals, AJAX dan Pagination serta Upload Image
