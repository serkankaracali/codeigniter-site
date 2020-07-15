<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font -->
  <link rel="stylesheet" type = "text/css" href="<?php echo base_url(); ?>css/all.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" type = "text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
  <!-- Custom -->
  <link rel="stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/style.css">
  <!-- Lightbox -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/lightbox.min.css">
	<script type = 'text/javascript' src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>

  <title> En Uygun Sigorta Teklifleri Ücretsiz Cebinizde | Teklif Cepte</title>
  <link rel="icon" href=''>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	    <div class="container">
	      <a class="navbar-brand font-weight-bold" href="/ornek/anasayfa">
	        <img src="<?php echo base_url('img/teklifceptepin.svg'); ?>" height="55" width="75" class="logo" alt="a">Teklif Cepte
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	        <ul class="navbar-nav ml-auto ">
	            <a class="nav-link font-weight-bold text-dark" href="/ornek/anasayfa">Ana Sayfa</a>
	            <a class="nav-link font-weight-bold text-dark" href="<?php echo base_url('anasayfa/acenteler'); ?>">Acenteler</a>
	            <a class="nav-link font-weight-bold text-dark" href="<?php echo base_url('anasayfa/teklifal'); ?>">Teklif Al</a>
	        </ul>

					<form action="<?php echo base_url('anasayfa/bireyselgiris'); ?>">
    				<button class="btn btn-danger" type="submit">Bireysel Girişi</button>
  				</form>
					<form action="<?php echo base_url('anasayfa/acentegiris'); ?>">
						<button class="btn btn-info" type="submit">Acente Girişi</button>
					</form>
	      </div>
	    </div>
	  </nav>

  </body>

  </html>
