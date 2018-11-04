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
<div class="container">
<a class="btn btn-primary text-center" href="<?= site_url('login/logout'); ?>">Logout</a>
</div>

<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal" data-whatever="@mdo">Buka modal utk @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal" data-whatever="@fat">Buka modal utk @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal" data-whatever="@getbootstrap">Buka modal utk @getbootstrap</button>
</div>

<div class="container mt-3 text-white">
  <h2>Justify content</h2>
  <p>Use the .justify-content-* classes to change the alignment of flex items. Choose from start (default), end, center, between or around:</p>
  <div class="d-flex justify-content-start bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-end bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-center bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-around bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
  </div>
  <div class="d-flex justify-content-between bg-secondary mb-3">
    <div class="p-2 bg-info">Flex item 1</div>
    <div class="p-2 bg-warning">Flex item 2</div>
    <div class="p-2 bg-primary">Flex item 3</div>
    <div class="p-2 bg-danger">Flex item 4</div>
  </div>
</div>

<div class="container">
  <div class="card-header bg-info text-white d-flex">
    <a href="#" class="text-white"><i class="fa fa-th"></i> Media Library</a>
    <a href="#" class="text-white ml-auto">Add Media</a>
  </div>
</div>

<div class="container">
  <h2>Contextual Backgrounds</h2>
  <p>Use the contextual background classes to provide "meaning through colors".</p>
  <p>Note that you can also add a .text-* class if you want a different text color:</p>
  <p class="bg-primary text-white">This text is important.</p>
  <p class="bg-success text-white">This text indicates success.</p>
  <p class="bg-info text-white">This text represents some information.</p>
  <p class="bg-warning text-white">This text represents a warning.</p>
  <p class="bg-danger text-white">This text represents danger.</p>
  <p class="bg-secondary text-white">Secondary background color.</p>
  <p class="bg-dark text-white">Dark grey background color.</p>
  <p class="bg-light text-dark">Light grey background color.</p>
</div>

<?php
$this->load->view('layout/footer');
?>
