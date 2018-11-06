<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header');
$this->load->view('layout/fix_menu');
?>
<div class="container">
	<h1 class="text-center"><?php echo $title ?></h1>
	<h2>Data Personal</h2>
	<button class="btn btn-primary" id="btnTambah" onclick="btnTambahClick()">
		<i class="fa fa-plus" style="font-size:12px;"></i> Tambah Data</button>
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
			<input type="search" class="form-control input-sm" placeholder="Ketik data yang dicari" name="search_text" id="search_text"></label>
		</div>
	</div>
	<div class="table-responsive border border-primary">
		<table id="tblPerson" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead class="thead-dark"><tr>
				<th class="align-middle text-center" scope="col">Rec No</th>
				<th id="sorting" class="sorting" scope="col">Nama Depan</th>
				<th id="sorting" class="sorting" scope="col">Nama Belakang</th>
				<th id="sorting" class="sorting" scope="col">Kelamin</th>
				<th id="sorting" class="sorting" scope="col">Alamat</th>
				<th id="sorting" class="sorting" scope="col">Tanggal Lahir</th>
				<th class="align-middle text-center" scope="col">Foto</th>
				<th class="align-middle text-center" scope="col" width="170px;">Ubah/Hapus</th>
			</tr></thead>
			<tbody></tbody>
			<tfoot class="thead-dark"><tr>
				<th class="align-middle text-center" scope="col">Rec No</th>
				<th class="align-middle text-center" scope="col">Nama Depan</th>
				<th class="align-middle text-center" scope="col">Nama Belakang</th>
				<th class="align-middle text-center" scope="col">Kelamin</th>
				<th class="align-middle text-center" scope="col">Alamat</th>
				<th class="align-middle text-center" scope="col">Tanggal Lahir</th>
				<th class="align-middle text-center" scope="col">Foto</th>
				<th class="align-middle text-center" scope="col" width="170px;">Ubah/Hapus</th>
			</tr></tfoot>
		</table>
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
