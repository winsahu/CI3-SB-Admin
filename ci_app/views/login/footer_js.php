<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript">
$(document).ready(function() {
    $('#form_masuk').submit(function(e) {
        e.preventDefault();
        var fform = $(this);
        var fdata = fform.serialize();
        var furl = fform.attr('action');
        var fmethod = fform.attr('method');
        $.ajax({
            url: furl,
            method: fmethod,
            data: fdata,
            dataType: 'json',
            success: function(resp) {
                if (resp.pesan == '') {
                    window.location.href = resp.redirect;
                } else {
                    //location.reload();
                    $('#pesan').text(resp.pesan);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log( 'Ada sesuatu yang salah', textStatus, errorThrown );
                if (jqXHR.status) {
                    console.log(jqXHR.responseText);
                }
            }
        });
    });
});
</script>