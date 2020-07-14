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
	      <a class="navbar-brand font-weight-bold" href="">
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
    <!-- Form -->
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex px-5">
            <div class="col-lg-6"><br><br>
                <div class="card1 pb-5r">

                    <div class="row"> <img src="../img/teklifceptelogo.png" style="width:128px;height:100px;" class="logo"> </div>

                </div>
                <div>
                  <h2>Teklif Cepteye Hoşgeldiniz <h2>
                </div>
                <div class="d-flex justify-content-center">
                  <p>Tebrikler. Giriş Yaparak, Acenteliğinizden talep edilen <b>teklif</b> detaylarını Görün !</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h3 class="mb-0 mr-4 mt-2">Kurumsal Hesabınıza Giriş Yapın!</h3>
                    </div >
                    <div class="row px-3 mb-4">
                      <style>
                      a {color: #00f;}
                    </style>
                      <a href="">Üye Değil misin? Hemen Ücretsiz Kayıt Ol</a>
                    </div>
                    <form>
  <div class="form-group">
    <label>Kullanıcı Adınız</label>
    <input type="text" class="form-control" required placeholder="Kullanıcı Adınız">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Şifreniz</label>
    <input type="password" class="form-control" required placeholder="Şifreniz">
  </div>
  <button type="submit" class="btn btn-primary">Giriş Yap</button>
</form>
                </div>
            </div>
        </div>

    </div>
</div>
  </body>

  </html>
