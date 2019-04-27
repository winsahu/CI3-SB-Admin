<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layout/header');
$this->load->view('layout/fix_menu');
?>
<div class="container">
	<div class="row">
	   <div  class="col-md-12">
	       <h1 style="margin-top: 57px;"><?= $title; ?>!</h1>
            <div id="body">
		      <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		      <p>If you would like to edit this page you'll find it located at:</p>
		      <code>application/views/welcome_message.php</code>

		      <p>The corresponding controller for this page is found at:</p>
		      <code>application/controllers/Welcome.php</code>

		      <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="/user_guide/" target="_blank">User Guide</a>.</p>
            </div>
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	   </div>
	</div>
</div>
<div class="container">
<a class="btn btn-primary text-center" href="<?= site_url('login/logout'); ?>">Logout</a>
</div>

<div class="jumbotron text-center">
	<h1>My First Bootstrap Page</h1>
	<p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<h3>Column 1</h3>
			<p>Lorem ipsum dolor..</p>
			<p>Ut enim ad..</p>
		</div>
		<div class="col-sm-4">
			<h3>Column 2</h3>
			<p>Lorem ipsum dolor..</p>
			<p>Ut enim ad..</p>
		</div>
		<div class="col-sm-4">
			<h3>Column 3</h3>
			<p>Lorem ipsum dolor..</p>
			<p>Ut enim ad..</p>
		</div>
	</div>
</div>

<div class="container">
    <h2>Pagination</h2>
    <p>To create a basic pagination, add the .pagination class to an ul element. Then add the .page-item to each li element and a .page-link class to each link inside li:</p>                  
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">&laquo; Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next &raquo;</a></li>
    </ul>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 text-center"><i class="fas fa-car"> Font Awesome normal size</i></div>
		<div class="col-md-6 text-center"><i class="fas fa-car" style="font-size:48px;"> Font Awesome 48px</i></div>
	</div><br>

	<div class="row">
		<div class="col-md-12 text-center"><i class="fas fa-car" style="font-size:60px;color:red;"> Font Awesome 60px</i></div>
	</div><br>

	<div class="row">
		<div class="col-md-6 text-center"><i class="fas fa-trash" style="font-size:16px;"> Font Awesome Trash 16px</i></div>
		<div class="col-md-6 text-center"><i class="fas fa-edit" style="font-size:16px;"> Font Awesome Edit 16px</i></div>
	</div>

	<br><br>
	<div class="row">
		<div class="col bg-dimgray border">1 of 2</div>
		<div class="col bg-dimgray border">2 of 2</div>
	</div>
	<div class="row">
		<div class="col bg-dimgray border">1 of 3</div>
		<div class="col bg-dimgray border">2 of 3</div>
		<div class="col bg-dimgray border">3 of 3</div>
	</div>

	<br><br>
	<div class="row">
		<div class="col bg-dimgray border">1 of 3</div>
		<div class="col-6 bg-dimgray border">2 of 3 (wider)</div>
		<div class="col bg-dimgray border">3 of 3</div>
	</div>
	<div class="row">
		<div class="col bg-dimgray border">1 of 3</div>
		<div class="col-5 bg-dimgray border">2 of 3 (wider)</div>
		<div class="col bg-dimgray border">3 of 3</div>
	</div>

	<br><br>
	<div class="row">
		<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166b418c31f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166b418c31f%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded"><span>&nbsp;&nbsp;</span>
		<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166b418c31f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166b418c31f%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded-top"><span>&nbsp;&nbsp;</span>
		<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166b418c31f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166b418c31f%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded-right"><span>&nbsp;&nbsp;</span>
		<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166b418c31f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166b418c31f%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded-bottom"><span>&nbsp;&nbsp;</span>
		<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166b418c31f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166b418c31f%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded-left"><span>&nbsp;&nbsp;</span>
		<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166b418c31f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166b418c31f%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded-circle"><span>&nbsp;&nbsp;</span>
		<img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_166b418c31f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_166b418c31f%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2218.5%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="rounded-0">
	</div>
	<br><br>
	<div class="row justify-content-md-center">
		<div class="col col-lg-2 border bg-dimgray">1 of 3</div>
		<div class="col-md-auto border bg-dimgray">Variable width content</div>
		<div class="col col-lg-2 border bg-dimgray">3 of 3</div>
	</div>
	<div class="row">
		<div class="col border bg-dimgray">1 of 3</div>
		<div class="col-md-auto border bg-dimgray">Variable width content</div>
		<div class="col col-lg-2 border bg-dimgray">3 of 3</div>
	</div>
	<br><br>
</div>

<div class="container mt-3">
  <h2>Align Content Center</h2>
  <p>Use the .align-content-*-center classes to align gathered items in the center on different screens.</p>

  <p><code>.align-content-center</code>:</p>
  <div class="d-flex flex-wrap align-content-center bg-light" style="height:100px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-sm-center</code>:</p>
  <div class="d-flex flex-wrap align-content-sm-center bg-light" style="height:100px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-md-center</code>:</p>
  <div class="d-flex flex-wrap align-content-md-center bg-light" style="height:100px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>

  <p><code>.align-content-lg-center</code>:</p>
  <div class="d-flex flex-wrap align-content-lg-center bg-light" style="height:100px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
  <br>
  
  <p><code>.align-content-xl-center</code>:</p>
  <div class="d-flex flex-wrap align-content-xl-center bg-light" style="height:100px">
    <div class="p-2 border">Flex item 1</div>
    <div class="p-2 border">Flex item 2</div>
    <div class="p-2 border">Flex item 3</div>
    <div class="p-2 border">Flex item 4</div>
    <div class="p-2 border">Flex item 5</div>
    <div class="p-2 border">Flex item 6</div>
    <div class="p-2 border">Flex item 7</div>
    <div class="p-2 border">Flex item 8</div>
    <div class="p-2 border">Flex item 9</div>
    <div class="p-2 border">Flex item 10</div>
    <div class="p-2 border">Flex item 11</div>
    <div class="p-2 border">Flex item 12</div>
    <div class="p-2 border">Flex item 13 </div>
    <div class="p-2 border">Flex item 14</div>
    <div class="p-2 border">Flex item 15</div>
    <div class="p-2 border">Flex item 16</div>
    <div class="p-2 border">Flex item 17</div>
    <div class="p-2 border">Flex item 18</div>
    <div class="p-2 border">Flex item 19</div>
    <div class="p-2 border">Flex item 20</div>
    <div class="p-2 border">Flex item 21</div>
    <div class="p-2 border">Flex item 22</div>
    <div class="p-2 border">Flex item 23</div>
    <div class="p-2 border">Flex item 24</div>
    <div class="p-2 border">Flex item 25</div>
  </div>
</div>
<br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-3">.col-sm-3</div>
		<div class="col-sm-3">.col-sm-3</div>
		<div class="col-sm-3">.col-sm-3</div>
		<div class="col-sm-3">.col-sm-3</div>
	</div>
	<div class="row">
		<div class="col-sm-4">.col-sm-4</div>
		<div class="col-sm-8">.col-sm-8</div>
	</div>
</div>
<br><br>
<div class="container">
	<h1>h1 Bootstrap heading (2.5rem = 40px)</h1>
	<h2>h2 Bootstrap heading (2rem = 32px)</h2>
	<h3>h3 Bootstrap heading (1.75rem = 28px)</h3>
	<h4>h4 Bootstrap heading (1.5rem = 24px)</h4>
	<h5>h5 Bootstrap heading (1.25rem = 20px)</h5>
	<h6>h6 Bootstrap heading (1rem = 16px)</h6>
</div>

<div class="container">
  <h1>Display Headings</h1>
  <p>Display headings are used to stand out more than normal headings (larger font-size and lighter font-weight):</p>
  <h1 class="display-1">Display 1 - .display-1</h1>
  <h1 class="display-2">Display 2 - .display-2</h1>
  <h1 class="display-3">Display 3 - .display-3</h1>
  <h1 class="display-4">Display 4 - .display-4</h1>
</div>

<div class="container">
	<h1>Lighter, Secondary Text</h1>
	<p>The small element is used to create a lighter, secondary text in any heading:</p>       
	<h1>h1 heading <small>secondary text</small></h1>
	<h2>h2 heading <small>secondary text</small></h2>
	<h3>h3 heading <small>secondary text</small></h3>
	<h4>h4 heading <small>secondary text</small></h4>
	<h5>h5 heading <small>secondary text</small></h5>
	<h6>h6 heading <small>secondary text</small></h6>
</div>
<?php
$this->load->view('layout/footer');
?>