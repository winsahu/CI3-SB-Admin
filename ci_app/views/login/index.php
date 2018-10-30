<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header');
$this->load->view('layout/fix_menu');
?>

<form class="form-signin" id="form_masuk" action="<?= site_url('login/proses_login') ?>" method="POST">
	<img class="rounded mx-auto d-block" src="<?= site_url('assets/img/winston.png'); ?>" alt="" width="150" height="150">
	<h1 class="h3 mb-3 font-weight-normal text-center"><?= $title ?></h1>
	<div class="form-group">
		<label for="username" class="control-label">User Name</label>
		<input type="text" name="username" class="form-control" placeholder="User Name">
	</div>
	<div class="form-group">
		<label for="inputPassword" class="control-label">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>
	<div class="checkbox mb-3">
		<label><input type="checkbox" value="remember-me"> Remember me</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" form="form_masuk" type="submit">Sign in</button>
	<div class="text-center" id="pesan"><div>;
<!--
	<?php if (! empty($pesan)) {
		echo '<div class="text-center">' . $pesan . '<div>';
	} ?>
-->
</form>

<?php
$this->load->view('layout/footer');
?>
