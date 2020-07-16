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
  <link rel="stylesheet" type = "text/css" hr/ornek/anasayfaef = "<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="/<?php echo base_url(); ?>css/bootstrap-steps.min.css" />
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
    <!-- 2 -->
		  <div class="hero-wrap" style="background-image: url('../img/aile2.jpg');" data-stellar-background-ratio="0.5">
		  <div class="container">
				</br></br>
		    <div class="h2 pb-3 text-center text-white" data-aos="fade-up">En Uygun Sigorta Tekliflerini Ücretsiz Alın!</div>
		    <p class="h4 px-5 pb-5 text-center text-white" data-aos="fade-up">Türkiye'nin Her ili ve İlçesinde Hizmet Veren 16.000 Profesyonel Sigorta Acentelerinden
Ücretsiz Teklif Almak İçin Ürün Seçiniz !</p>
		    <div class="row">
		      <div class="col-md-3">
          	<div class="text-center text-white">
							<a href="<?php echo base_url('anasayfa/trafikteklif'); ?>">
								<img src="<?php echo base_url('img/trafik.png'); ?>" style="width:175px;height:175px;" class="logo" alt="a">
							</a>
		            <div class="h5 pb-3">Trafik Teklifi Al</div>

		         </div>
		      </div>
		      <div class="col-md-3">
		          <div class="text-center text-white">
								<a href="<?php echo base_url('anasayfa/kaskoteklif'); ?>">
					        <img src="<?php echo base_url('img/kasko.png'); ?>" style="width:175px;height:175px;" class="logo" alt="a">
					      </a>
		            <div class="h5 pb-3">Kasko Teklifi Al</div>
							</br></br>
							</div>
		      </div>
		      <div class="col-md-3">

		          <div class="text-center text-white">
								<a href="<?php echo base_url('anasayfa/daskteklif'); ?>">
					        <img src="<?php echo base_url('img/dask.png'); ?>" style="width:175px;height:175px;" class="logo" alt="a">
					      </a>
								<div class="h5 pb-3">Dask Sigortası Teklifi Al</div>

		          </div>

		      </div>
					<div class="col-md-3">

		          <div class="text-center text-white">
								<a href="<?php echo base_url('anasayfa/seyahatteklif'); ?>">
					        <img src="<?php echo base_url('img/seyahat.png'); ?>" style="width:175px;height:175px;" class="logo" alt="a">
					      </a>
		            <div class="h5 pb-3">Seyahat Sağlık Teklifi Al</div>

		          </div>
              <br><br><br><br><br>
		      </div>
		    </div>
		  </div>
		</div>
  </body>

  </html>
