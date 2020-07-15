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
                  <p>Türkiye' nin her il ve ilçesinden talep edilen teklif detaylarına tamamen <b>ücretsiz</b> ulaşın!</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h3 class="mb-0 mr-4 mt-2">Kayıt Ol</h3>
                    </div >

                    <div class="row px-3 mb-4">
                      <style>
                      a {color: #00f;}
                      </style>
                      <a href="<?php echo base_url('anasayfa/acentegiris'); ?>">Üye Misiniz? Üye Girişi İçin Tıklayın.</a>
                    </div>

                    <form>
                      <label>Acente Tipini Seçiniz</label>
                      <select class="browser-default custom-select" required>
                        <option selected=""></option>
                        <option value="1">Şahıs</option>
                        <option value="2">Tüzel</option>
                      </select>
                  <div class="form-group">
                    <label>Levha Kayıt Numaranız</label>
                    <input type="text" class="form-control" required placeholder="T0001-123456">
                  </div>
                  <div class="form-group">
                    <label >Adınız ve Soyadınız</label>
                    <input type="text" class="form-control" required placeholder="Adınız ve Soyadınız">
                  </div>
                  <div class="form-group">
                    <label>E-Mail Adresiniz</label>
                    <input type="email" class="form-control" required placeholder="E-Mail Adresiniz">
                  </div>
                  <div class="form-group">
                    <label >Cep Telefonu</label>
                    <input type="text" class="form-control" required placeholder="(___) ___-____">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" >
                    <label class="form-check-label"><a href=""><u>Kullanıcı sözleşmesini okudum ve kabul ediyorum.<u></a></label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" >
                    <label class="form-check-label"><a href=""><u>Kişisel Verilerin Korunması Hakkındaki Bilgilendirme Metnini okudum kabul ediyorum.<u></a></label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" >
                    <label class="form-check-label"><a href=""><u>Ürünler, yenilikler ve kampanyalar hakkında e-bülten ve sms almak istiyorum.<u></a></label>
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
