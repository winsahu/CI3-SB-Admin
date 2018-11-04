<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?php echo site_url('assets/js/sb-admin.js'); ?>"></script>

<script type="text/javascript">
$('#demoModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var recipient = button.data('whatever') // Extract info from data-* attributes
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Kirim pesan ke ' + recipient)
	modal.find('.modal-body input').val(recipient)
	modal.find('[name="recipient-name"]').next().text('Pesan untuk penerima '+recipient)
	modal.find('[name="message-text"]').text('Hai '+recipient+' Selamat menempuh ujian akhir semester')
	modal.find('[name="id"]').val(10)
})
$('#form_modal').on('submit', function(e){
    e.preventDefault();
    var data = $(this).serialize();
    alert(data);
    $('#demoModal').modal('hide');
});
</script>
