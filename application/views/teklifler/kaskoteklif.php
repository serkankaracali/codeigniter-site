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
  <!-- Custom -->
  <link rel="stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/custom.css">
  <!-- Lightbox -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/lightbox.min.css">
	<script type = 'text/javascript' src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.bundle.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/custom.js"></script>
  <title> En Uygun Sigorta Teklifleri Ücretsiz Cebinizde | Teklif Cepte</title>
  <link rel="icon" href=''>

  <style>
  body {

    margin: 0;
    padding: 0;
  }
  </style>
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
    <div class="container"></div>,<div class="container">

<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Kimlik</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Yapı</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Acente</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
        <p>Teklif Al</p>
      </div>
    </div>
  </div>

  <form role="form">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">1 - Kimlik Bilgileri</h3>
            </div>
            <div class="panel-body">
                <div class="form-group mb-2">
                    <label class="control-label">Kimlik/Vergi Numarası</label>
                    <input maxlength="100" type="text" required class="form-control" placeholder="Kimlik/Vergi Numarası" />
                </div>
                <div class="form-group mb-2">
                    <label class="control-label">Ad Soyad</label>
                    <input maxlength="100" type="text" required class="form-control" placeholder="Ad Soyad" />
                </div>
                <div class="form-group mb-2">
                    <label class="control-label">Cep Telefonu</label>
                    <input maxlength="100" type="text" required class="form-control" placeholder="(___) ___-___" />
                </div>
                <div class="form-group mb-2">
                    <label class="control-label">E-Mail</label>
                    <input maxlength="100" type="email" required class="form-control" placeholder="ornek@example.com" />
                </div>

                        <div class="form-group mb-2">
                          <label class="control-label">İl</label>
                            <select name="il" id="il" class="form-control">
                                <option value="">Seçin...</option>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                          <label class="control-label">İlçe</label>
                            <select name="ilce" id="ilce" class="form-control" disabled="disabled">
                                <option value="">Seçin...</option>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                        <label>İletişim Türü</label>
                        <select class="browser-default custom-select" required>
                          <option selected=""></option>
                          <option value="1">Telefon ile iletişimi tercih ediyorum</option>
                          <option value="2">SMS ile iletişimi tercih ediyorum</option>
                          <option value="2">Email ile iletişimi tercih ediyorum</option>
                        </select>
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
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">İleri</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title"></h3>
            </div>
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Geri</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">İleri</button>
        </div>

        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title"></h3>
            </div>
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Geri</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">İleri</button>

        </div>

        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title"></h3>
            </div>
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Geri</button>
          <button class="btn btn-success btn-lg pull-right" type="submit">Gönder</button>
        </div>
    </form>

</div>
</div>
  <script>
  $.getJSON("../il-bolge.json", function(sonuc){
      $.each(sonuc, function(index, value){
          var row="";
          row +='<option value="'+value.il+'">'+value.il+'</option>';
          $("#il").append(row);
      })
  });


  $("#il").on("change", function(){
      var il=$(this).val();

      $("#ilce").attr("disabled", false).html("<option value=''>Seçin..</option>");
      $.getJSON("../il-ilce.json", function(sonuc){
          $.each(sonuc, function(index, value){
              var row="";
              if(value.il==il)
              {
                  row +='<option value="'+value.ilce+'">'+value.ilce+'</option>';
                  $("#ilce").append(row);
              }
          });
      });
  });
  </script>
  </body>

  </html>
