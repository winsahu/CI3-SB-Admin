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
	<div class="d-flex">
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
		<div class="ml-auto form-inline">
			<label class="control-label" for="search_text">Cari : &nbsp;
			<input type="search" class="form-control input-sm" placeholder="Cari Data" name="search_text" id="search_text"></label>
		</div>
	</div>
	<div class="table-responsive border border-primary">
		<table id="tblPerson" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead class="thead-dark"><tr>
				<th scope="col">Rec No</th>
				<th scope="col">Nama Depan</th>
				<th scope="col">Nama Belakang</th>
				<th scope="col">Kelamin</th>
				<th scope="col">Alamat</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Foto</th>
				<th scope="col" width="170px;">Ubah/Hapus</th>
			</tr></thead>
			<tbody></tbody>
			<tfoot class="thead-dark"><tr>
				<th scope="col">Rec No</th>
				<th scope="col">Nama Depan</th>
				<th scope="col">Nama Belakang</th>
				<th scope="col">Kelamin</th>
				<th scope="col">Alamat</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">Foto</th>
				<th scope="col" width="170px;">Ubah/Hapus</th>
			</tr></tfoot>
		</table>
	</div>
</div>
<div class="container">
	<!-- Paginate -->
	<div class="float-right text-right" style='margin-top: 10px;' id='pagination'></div>
</div>
<?php
$this->load->view('layout/footer');
?>
