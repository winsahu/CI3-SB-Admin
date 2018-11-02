<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pdf extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$dbconfig = array(
			'dsn' => '',
			'hostname' => 'localhost',
			'username' => 'admin',
			'password' => 'H4ru5.151',
			'database' => 'crud_db',
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE,
			'db_debug' => (ENVIRONMENT !== 'production'),
			'cache_on' => FALSE,
			'cachedir' => '',
			'char_set' => 'utf8',
			'dbcollat' => 'utf8_general_ci',
			'swap_pre' => '',
			'encrypt' => FALSE,
			'compress' => FALSE,
			'stricton' => FALSE,
			'failover' => array(),
			'save_queries' => TRUE
		);
		$this->load->database($dbconfig);
		$this->load->library('pdf');
	}

	public function index()	{
		$pdf = new FPDF('L','mm','A5');
		// membuat halaman baru
		$pdf->AddPage();
		// setting jenis font yang akan digunakan
		$pdf->SetFont('Arial','B',16);
		// mencetak string 
		$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,7,'',0,1);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(20,6,'NIM',1,0);
		$pdf->Cell(85,6,'NAMA SISWA',1,0);
		$pdf->Cell(27,6,'NO HP',1,0);
		$pdf->Cell(27,6,'TANGGAL LHR',1,1);
		$pdf->SetFont('Arial','',10);
		$mahasiswa = $this->db->get('siswa')->result();
		foreach ($mahasiswa as $row){
			$pdf->Cell(20,6,$row->nim,1,0);
			$pdf->Cell(85,6,$row->nama_lengkap,1,0);
			$pdf->Cell(27,6,$row->no_hp,1,0);
			$pdf->Cell(27,6,$row->tanggal_lahir,1,1);
		}
		$pdf->Output();		
	}
}

?>