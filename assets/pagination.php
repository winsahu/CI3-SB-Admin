<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
/* This Application Must Be Used With BootStrap 4 *  */
$config['full_tag_open'] 	= '<div class="container text-center"><ul class="pagination">';
$config['full_tag_close'] 	= '</ul></div>';
$config['num_tag_open'] 	= '<li class="page-item">';
$config['num_tag_close'] 	= '</li>';
$config['cur_tag_open'] 	= '<li class="page-item active"><a class="page-link" href="#">';
$config['cur_tag_close'] 	= '</a></li>';
$config["next_link"]		= 'Next &raquo;';
$config['next_tag_open'] 	= '<li class="page-item">';
$config['next_tag_close'] 	= '</li>';
$config["prev_link"]		= '&laquo; Prev';
$config['prev_tag_open'] 	= '<li class="page-item">';
$config['prev_tag_close'] 	= '</li>';
$config['first_link']		= '&laquo; First';
$config['first_tag_open'] 	= '<li class="page-item">';
$config['first_tag_close']	= '</li>';
$config['last_link']		= 'Last &raquo;';
$config['last_tag_open'] 	= '<li class="page-item">';
$config['last_tag_close'] 	= '</li>';
$config['attributes'] = array('class' => 'page-link');