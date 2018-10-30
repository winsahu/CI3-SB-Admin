<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header');
$this->load->view('layout/fix_menu');
?>
<div class="container">
	<h3 align="center"><?= $title; ?></h3>
	<div class="row">
		<div class="col-sm-6 form-inline">
			<label class="control-label" for="rowperpage">Tampilkan 
				<select class="form-control input-sm" name="rowperpage" id="rowperpage">
					<option value="10"">10</option>
					<option value="25"">25</option>
					<option value="50"">50</option>
					<option value="100"">100</option>
				</select> Baris per Halaman
			</label>
		</div>
		<div class="col-sm-6 form-inline text-right">
			<label class="control-label" for="search_text">Cari: </label>
			<input type="search" class="form-control" placeholder="Cari Data" name="search_text" id="search_text">
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
	<div class="row">
 		<!-- Paginate -->
		<div align="right" style='margin-top: 10px;' id='pagination'></div>
	</div>
</div>
<?php
$this->load->view('layout/footer');
?>