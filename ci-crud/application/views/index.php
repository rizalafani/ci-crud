<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contoh CRUD Buku tamu Code Igniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi CRUD Buku Tamu dengan Codeigniter dan Bootstrap">
    <meta name="author" content="Ahmad Rizal Afani">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	
    <script src="<?php echo base_url(); ?>asset/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/colorbox/colorbox.css" />
	<script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
	<script>
		  $(document).ready(function(){
			  $(".medium-box").colorbox({rel:'group', iframe:true, width:"90%", height:"90%"});	
		  });
	</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="">CRUD Codeigniter</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-tasks icon-white"></i> Menu Utama</button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url().'index.php/welcome/add' ?>"><i class="icon-user"></i> Tambah Tamu</a></li>
			  </ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">	
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3>Aplikasi CRUD Buku Tamu dengan Codeigniter dan Bootstrap</h3>
		  <p>Oleh <a href="https://www.facebook.com/Ahmad.Rizal.Afani" target="_blank">Ahmad Rizal Afani</a> 
		  (<a href="http://calonpresident.blogspot.com" target="_blank">calonpresident.blogspot.com</a>)</p>
		</div>
	  </div>
	</div>
	<?php if($message == 1){ ?>
	<div class="alert alert-success">
	  	<h4>Sukses Simpan data !</h4>
	</div>
	<?php }else if($message == 2){ ?>
	<div class="alert alert-success">
	  	<h4>Sukses Update data !</h4>
	</div>
	<?php }else if($message == 3){ ?>
	<div class="alert alert-success">
	  	<h4>Sukses Hapus data !</h4>
	</div>
	<?php } ?>
  <div class="well">
  
	  <section>
  <table class="table table-hover table-condensed">
    <thead style="background-color:#812c5a; color:#FFFFFF; margin-bottom:10px;">
      <tr style="height:40px; vertical-align:middle;">
        <th width="30%">Nama Tamu</th>
        <th width="15%" style="text-align:center">
			Email</th>
        <th width="20%" style="text-align:center">
			Alamat</th>
        <th width="15%">Action</th>
      </tr>
    </thead>
    <tbody>
	<?php foreach($content->result_array() as $c){ ?>
		    <tr>
	        <td>
				<b><?php echo $c['nama']; ?></b>
	        </td>
	        <td style="text-align:center">
				<b><?php echo $c['email']; ?></b>
			</td>
			<td style="text-align:center">
				<b><?php echo $c['alamat']; ?></b>
	        </td>
			<td>
		        <div class="btn-group">
		          <a class="btn btn-small" href="<?php echo base_url().'index.php/welcome/edit/'.$c['id']; ?>"><i class="icon-pencil"></i> Edit</a>
				  <a class="btn btn-small" href="<?php echo base_url().'index.php/welcome/delete/'.$c['id']; ?>" onclick="return confirm('yakin hapus data ini ?')"><i class="icon-trash"></i> Hapus</a>
		        </div><!-- /btn-group -->
			</td>
		</tr>
	<?php } ?>
	</tbody>
  </table> 
</section>
  </div>
      <footer class="well">
        <p>
        	Programming By : http://calonpresident.blogspot.com <br />
            Design By : http://gedelumbung.com (Aplikasi simpeg)
        </p>
      </footer>

    </div> <!-- /container -->

  </body>
<script>
	$('.alert').fadeIn('slow').delay(1500).fadeOut('slow');
</script>
</html>
