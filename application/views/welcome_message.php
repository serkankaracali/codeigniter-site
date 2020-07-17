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
  <link rel="stylesheet" type = "text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  <!-- Custom -->
  <link rel="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/custom.css">
  <!-- Lightbox -->
  <link rel="stylesheet" type = "text/css" href="<?php echo base_url(); ?>css/lightbox.min.css">
  <link rel="stylesheet" type = "text/css" href="<?php echo base_url(); ?>css/aos.css">
  <link rel="stylesheet" type = "text/css" href="<?php echo base_url(); ?>css/ekko-lightbox.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script type = 'text/javascript' src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>

  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/custom.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/aos.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/ekko-lightbox.min.js"></script>


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
		  <div class="hero-wrap" style="background-image: url('img/aile.png');" data-stellar-background-ratio="0.5">
		  <div class="container">
				</br></br>
		    <div class="h2 pb-3 text-center text-white">En Uygun Sigorta Tekliflerini Ücretsiz Alın!</div>
		    <p class="h4 px-5 pb-5 text-center text-white">Türkiye'nin Her ili ve İlçesinde Hizmet Veren 16.000 Profesyonel Sigorta Acentelerinden
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

    <!-- 3 -->
    <div class="row">
      <div class="col-sm">
        <img src="<?php echo base_url('img/el.jpg'); ?>"  alt="a">
      </div>
      <div class="col-sm">
      <div class="row mx-0">
        <div ><br><br><br><br>
          <div class="row">
            <div class="col-1 da-project-icon"><i class="text-warning fas fa-shield-alt fa-3x"></i></div>
            <div class="col-10">
              <div class="h4" >Sadece Yetkili Acenteler.</div>
              <p>Bilgilerinizi Onaymalanız Halinde, Hazine Müsteşarlığında Levhaya Kayıtlı Profesyonel Sigorta Acenteleri İle Paylaşılır.</p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-1 da-project-icon"><i class="text-info fas fa-sync fa-3x"></i></div>
            <div class="col-10">
              <div class="h4">Teklifleri Karşılaştırın.</div>
              <p>Size En Uygun Sigorta Fiyatını Sunan Profesyonel Sigorta Acentesi İle İletişime Geçin.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-1 da-project-icon"><i class="text-primary far fa-clock fa-3x"></i></div>
            <div class="col-10">
              <div class="h4">Zamandan Tasarruf Edin.</div>
              <p>Siz Gündelik İşleriniz ile Uğraşırken, Seçmiş Olduğunuz Profesyonel Sigorta Acenteleri Size En Uygun Teklifleri Sunsun.</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

<!-- Footer -->
<footer>
<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
<div class="row">
  <div class="col-lg-5 col-xs-12 about-company">
    <h3>
    <p class="pr-5 text-white-50">Sigorta Teklifi almak isteyenler ile Sigorta Acentelerini 7/24 Hizmet Sağlayan Ücretsiz Çalışan bir platformdur.</h3></p>

  </div>
  <div class="col-lg-3 col-xs-12 links">
    <h4 class="mt-lg-0 mt-sm-3">Ürünler</h4>
      <ul class="m-0 p-0">
        <li>- <a href="<?php echo base_url('anasayfa/trafikteklif'); ?>">Trafik</a></li>
        <li>- <a href="<?php echo base_url('anasayfa/kaskoteklif'); ?>">Kasko</a></li>
        <li>- <a href="<?php echo base_url('anasayfa/daskteklif'); ?>">Dask</a></li>
        <li>- <a href="<?php echo base_url('anasayfa/seyahatteklif'); ?>">Seyahat Sağlık</a></li>
      </ul>
  </div>
</div>
</div>
</div>
</div>
</footer>
	<!-- ./Footer -->
</body>

</html>
