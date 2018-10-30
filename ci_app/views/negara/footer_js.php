<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript">
var pageno;
var rowperpage;
var search_text;
$(document).ready(function() {
	$('#rowperpage').value = 10;
	$("#search_text").value = '';
	pageno = 1;
	rowperpage = $('#rowperpage').val();
	search_text = $("#search_text").val();

	loadPagination(pageno, rowperpage, search_text);

	// Detect pagination click
	$('#pagination').on('click','a',function(e) {
		e.preventDefault();
		if ($(this).attr('href') != '#') {
			pageno = Number($(this).attr('data-ci-pagination-page'));
			loadPagination(pageno, rowperpage, search_text);
		}
	});

	$("#search_text").on("change paste keyup", function() {
		search_text = $(this).val();
		loadPagination(pageno, rowperpage, search_text);
	});

	$("select").change(function() {
		rowperpage = Number($('#rowperpage').val());
		loadPagination(pageno, rowperpage, search_text);
	});

	// Load pagination
	function loadPagination(pagno=1, numrows=10, stext='') {
		$.ajax({
			url: "<?php echo site_url('negara/loadRecord/')?>"+pagno,
			type: 'POST',
			data: {rowperpage: numrows, search_text: stext},
			dataType: 'JSON',
			success: function(response) {
				$('#pagination').html(response.pagination);
				$('#search_text').value = response.search_text;
				createTable(response.result,response.row);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				if (jqXHR.status) {
					console.log(jqXHR.responseText);
				}
				console.log('Error get data via ajax');
			}
		});
	}

	// Create table list
	function createTable(result, sno) {
		sno = Number(sno);
		$('#postsList tbody').empty();
		for (index in result) {
			var code = result[index]['country_code'];
			var name = result[index]['country_name'];
			sno+=1;
			var tr = "<tr>";
			tr += "<td>" + sno + "</td>";
			tr += "<td>" + code + "</td>";
			tr += "<td>" + name + "</td>";
			tr += "</tr>";
			$('#postsList tbody').append(tr);
		}
	}

}); //end of ready function
</script>