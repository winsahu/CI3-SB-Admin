<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?= site_url('assets/vendor/bootstrap/datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
<script type="text/javascript">
var base_url = '<?= site_url();?>';
var pageno = 1;
var rowperpage = 10;
var search_text = '';

$(document).ready(function() {
	$('#rowperpage').val(10);
	$("#search_text").val('');
	rowperpage = $('#rowperpage').val();
	search_text = $("#search_text").val();

	loadRecord(pageno, rowperpage, search_text);

	// Detect pagination click
	$('#pagination').on('click','a',function(e) {
		e.preventDefault();
		if ($(this).attr('href') != '#') {
			pageno = Number($(this).attr('data-ci-pagination-page'));
			loadRecord(pageno, rowperpage, search_text);
		}
	});

	$("#search_text").on("change paste keyup", function() {
		search_text = $(this).val();
		loadRecord(pageno, rowperpage, search_text);
	});

	$("select").change(function() {
		rowperpage = Number($('#rowperpage').val());
		loadRecord(pageno, rowperpage, search_text);
	});

	$('#btnSubmit').click(function(e) {
		e.preventDefault();
		var aksi = $(this).attr('data-aksi');
		var id = $(this).attr('data-id');
		doSubmit(aksi, id);
	})

	//datepicker
	$('.datepicker').datepicker({
		autoclose: true,
		format: "yyyy-mm-dd",
		todayHighlight: true,
		orientation: "auto",
		todayBtn: true,
		todayHighlight: true,  
	});

	$('#modal_form').on('hidden.bs.modal', function (e) {
		$('#pform')[0].reset();
		$('#fotoku').html('');
		$('[name="photo"]').val('');
		$('.help-block').text('');
	});
});

// Load Record in pagination
function loadRecord(pagno=1, numrows=10, stext='') {
	var furl = "<?= site_url('personal/loadRecord/')?>"+pagno
	$.ajax({
		url: furl,
		type: 'POST',
		data: {rowperpage: numrows, search_text: stext},
		dataType: 'JSON',
		success: function(response) {
			$('#pagination').html(response.pagination);
			$('#search_text').val(response.search_text);
			createTable(response.result,response.rowno);
		},
		error: function (jqXHR, textStatus, errorThrown) {
			if (jqXHR.status) {
				console.log(jqXHR.responseText);
			}
			console.log('Error get data via ajax - Status: '+textStatus);
		}
	});
}

// Display table list
function createTable(result, sno) {
	var photo_url = "<?= site_url('upload/'); ?>";
	sno = Number(sno);
	$('#tblPerson tbody').empty();
	for (index in result) {
		var id = result[index]['id'];
		var firstName = result[index]['firstName'];
		var lastName = result[index]['lastName'];
		var gender = result[index]['gender'];
		var address = result[index]['address'];
		var dob = result[index]['dob'];
		var photo = result[index]['photo'];
		sno+=1;
		var tr = "<tr>";
		tr += "<td>" + sno + "</td>";
		tr += "<td>" + firstName + "</td>";
		tr += "<td>" + lastName + "</td>";
		tr += "<td>" + gender + "</td>";
		tr += "<td>" + address + "</td>";
		tr += "<td>" + dob + "</td>";
		if ((photo === '') || (photo === null)) {
			tr += "<td>(Tak ada foto)</td>";
		} else {
			tr += "<td><a href='"+photo_url+photo+ "' target='_blank'><img src='"+photo_url+photo+"' class='img-responsive' width='70px' height='70px'></a></td>";
		}
		tr += "<td><button class='btn btn-sm btn-primary' id='btnUbah' onclick='btnUbahClick("+id+")'><i class='fa fa-edit'></i>Ubah</button>&nbsp;<button class='btn btn-sm btn-danger' id='btnHapus' onclick='btnHapusClick("+id+")'><i class='fa fa-trash'></i>Hapus</button></td>";
		tr += "</tr>";
		$('#tblPerson tbody').append(tr);
	}
}

function reload_table() {
	loadRecord(pageno, rowperpage, search_text);
}

function btnTambahClick() {
	//$('#btnSubmit').removeClass();
	//$('#btnSubmit').addClass("btn btn-primary");
	$('#btnSubmit').attr("data-aksi", "tambah");
	$('#btnSubmit').attr("data-id", 0);
	$('#btnSubmit').text('Tambah');
	$('.modal-title').text('Tambah Data');
	$('#modal_form').modal('show');
}

function btnUbahClick(id) {
	$.ajax({
		url: "<?= site_url('personal/get_by_id') ?>/"+id,
		method: "GET",
		dataType: "JSON",
		success: function(data) {
			$('[name="id"]').val(data.id);
			$('[name="firstName"]').val(data.firstName);
			$('[name="lastName"]').val(data.lastName);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="dob"]').datepicker('update',data.dob);

			$('#photo-preview').show(); // show photo preview modal
			if (data.photo) {
				$('#label-photo').text('Ganti Photo'); // label photo upload
				$('#fotoku').html('<img src="'+base_url+'upload/'+data.photo+'" class="img-fluid" width="300px" height="300px">'); // show photo
				$('#fotoku').append('&nbsp;&nbsp;&nbsp;'+'<input type="checkbox" name="remove_photo" value="'+data.photo+'"> Hapus photo saat disimpan'); // remove photo
			}
			else {
				$('#label-photo').text('Unggah Photo'); // label photo upload
				$('#photo-preview').text('(No photo)');
			}

			//$('#btnSubmit').removeClass();
			//$('#btnSubmit').addClass("btn btn-primary");
			$('#btnSubmit').attr("data-aksi", "ubah");
			$('#btnSubmit').attr("data-id", id);
			$('#btnSubmit').text('Ubah');
			$('.modal-title').text('Ubah Data dibawah ini');
			$('#modal_form').modal('show');

		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert('Error get data from ajax - Text Satus: ' + textStatus);
			if (jqXHR.status) {
				console.log(jqXHR.responseText);
			}
		}

	});
}

function btnHapusClick(id) {
	var furl = "<?= site_url('personal/get_by_id') ?>/"+id;
	$.ajax({
		url: furl,
		method: "GET",
		dataType: "JSON",
		success: function(data) {
			$('[name="id"]').val(data.id);
			$('[name="firstName"]').val(data.firstName);
			$('[name="lastName"]').val(data.lastName);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="dob"]').datepicker('update',data.dob);

			$('#photo-preview').show(); // show photo preview modal
			if (data.photo) {
				$('#fotoku').html('<img src="'+base_url+'upload/'+data.photo+'" class="img-fluid" width="300px" height="300px">'); // show photo
				$('#label-photo').hide();
				$('input[name="photo"]').hide();
			}
			else {
				$('#label-photo').text(''); // label photo upload
				$('#photo-preview').text('');
			}
			//$('#btnSubmit').removeClass();
			//$('#btnSubmit').addClass("btn btn-danger");
			$('#btnSubmit').attr("data-aksi", "hapus");
			$('#btnSubmit').attr("data-id", id);
			$('#btnSubmit').text('Hapus');
			$('.modal-title').text('Data dibawah ini akan di hapus');
			$('#modal_form').modal('show');

		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert('Error get data from ajax - Text Satus: ' + textStatus);
			if (jqXHR.status) {
				console.log(jqXHR.responseText);
			}
		}

	});
}

function doSubmit(aksi, id) {
	if (aksi == 'tambah') {
		addRecord();
	} else if (aksi == 'ubah') {
		updRecord(id);
	} else if (aksi == 'hapus') {
		delRecord(id);
	}
}
function delRecord(id) {
	var furl = base_url+"personal/delRecord/"+id;
	$.ajax({
		url : furl,
		method: "POST",
		dataType: "JSON",
		success: function(data) {
			// if success reload ajax table
			$('#modal_form').modal('hide');
			reload_table();
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert('Error deleting data');
			if (jqXHR.status) {
				console.log(jqXHR.responseText);
			}
		}
	});
}

function updRecord(id) {
	var formData = new FormData($('#pform')[0]);
	var furl = base_url+"personal/updRecord/"+id;
	$.ajax({
		url : furl,
		method: "POST",
		data: formData,
		contentType: false,
		processData: false,
		dataType: "JSON",
		success: function(data) {
			if (data.status) { //if success close modal and reload ajax table
				$('#modal_form').modal('hide');
				reload_table();
			}
			else {
				for (var i = 0; i < data.inputerror.length; i++) {
					$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
					$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
				}
			}
 		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert('Error adding / update data');
			if (jqXHR.status) {
				console.log(jqXHR.responseText);
			}
 		}
	});
}

function addRecord() {
	var formData = new FormData($('#pform')[0]);
	var furl = base_url+"personal/addRecord/";
	$.ajax({
		url : furl,
		method: "POST",
		data: formData,
		contentType: false,
		processData: false,
		dataType: "JSON",
		success: function(data) {
			if (data.status) { //if success close modal and reload ajax table
				$('#modal_form').modal('hide');
				reload_table();
			}
			else {
				for (var i = 0; i < data.inputerror.length; i++) {
					$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
					$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
				}
			}
 		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert('Error adding / update data');
			if (jqXHR.status) {
				console.log(jqXHR.responseText);
			}
 		}
	});
}

</script>