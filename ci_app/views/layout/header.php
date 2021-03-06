<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?= site_url('assets/img/favicon.ico'); ?>">
<title><?= $title; ?></title>
<!-- Bootstrap core CSS-->
<link type="text/css" rel="stylesheet" href="<?= site_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!-- Custom fonts for this template-->
<?php if (! empty($cssheader)) {
	foreach($cssheader as $css) {
		echo '<link rel="stylesheet" href="' . site_url('assets/') . $css . '">' . "\n";
	}
} ?>
</head>
<body id="page-top">
