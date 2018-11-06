<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header');
$this->load->view('layout/fix_menu');
?>
<div class="container">
	<h3 align="center"><?= $title; ?></h3>
	<div class="d-flex justify-content-between">
		<div class="form-inline">
			<label class="control-label" for="rowperpage">Menampilkan :&nbsp;
				<select class="form-control input-sm" name="rowperpage" id="rowperpage">
					<option value="10"">10</option>
					<option value="25"">25</option>
					<option value="50"">50</option>
					<option value="100"">100</option>
				</select>&nbsp; Baris per Halaman
			</label>
		</div>
		<div class="form-inline">
			<label class="control-label" for="search_text">Cari : &nbsp;
			<input type="search" class="form-control input-sm" placeholder="Cari Data" name="search_text" id="search_text"></label>
		</div>
	</div>
	<div class="row">
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id='postsList'>
				<thead class="thead-dark"><tr>
					<th scope="col">Rec No</th>
					<th scope="col">Country Code</th>
					<th scope="col">Country Name</th>
				</tr></thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>
<div class="container">
	<div class="d-flex justify-content-end">
		<!-- Paginate -->
		<div class="text-right" style='margin-top: 10px;' id='pagination'></div>
	</div>
</div>

<?php
$this->load->view('layout/footer');
?>
