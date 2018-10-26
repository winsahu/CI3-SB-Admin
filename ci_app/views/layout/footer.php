<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if (! empty($footer_modal)) $this->load->view($footer_modal); ?>
<script src="<?php echo site_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<?php if (! empty($footer_js)) $this->load->view($footer_js); ?>
</body>
</html>
