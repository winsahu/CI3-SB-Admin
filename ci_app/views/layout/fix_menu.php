<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="<?= site_url(); ?>">Home</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('negara') ?>">Negara</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= site_url('personal') ?>">Personal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Action 3</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/jquery-tutor" target="_blank">JQuery Tutor</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/user_guide">CI 3 User Guide</a>
			</li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= site_url('admin'); ?>">Admin</a>
          <a class="dropdown-item" href="<?= site_url('operator'); ?>">Operator</a>
          <a class="dropdown-item" href="<?= site_url('dosen'); ?>">Dosen</a>
          <a class="dropdown-item" href="<?= site_url('mahasiswa'); ?>">Mahasiswa</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= site_url('login'); ?>">Login</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>