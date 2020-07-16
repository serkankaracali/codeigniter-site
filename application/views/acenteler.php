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
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/lightbox.min.css">
	<script type = 'text/javascript' src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/lightbox.min.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/main.js"></script>
  <script type = 'text/javascript' src="<?php echo base_url(); ?>js/custom.js"></script>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQCQFej5LFgnxkeS_B4JAC9IJCckxEZ2Q&callback=initMap"
    defer
  ></script>
  <style type="text/css">
    #map {
      height: 87%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>


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



          <div id="map">
          </div>




    <script>
      function initMap(){
        var options={
          zoom:6,
          center:{lat:38.9025,lng:34.979530}
        };
        var map = new google.maps.Map(document.getElementById('map'),options);
        var image = '../img/teklifceptepin1.png';
        var markers = [
          {
            coordinates:{lat:41.015137,lng:28.979530},
            content:'<h3>A Sigorta</h3><h3><label class="text-primary"><a href="<?php echo base_url('anasayfa/teklifal'); ?>">Teklif Al</a></label></h3>'
          },
          {
            coordinates:{lat:38.015137,lng:33.979530},
            content:'<h3>B Sigorta</h3><h3><label class="text-primary"><a href="<?php echo base_url('anasayfa/teklifal'); ?>">Teklif Al</a></label></h3>'
          },
          {
            coordinates:{lat:39.015137,lng:35.979530},
            content:'<h3>C Sigorta</h3><h3><label class="text-primary"><a href="<?php echo base_url('anasayfa/teklifal'); ?>">Teklif Al</a></label></h3>'
          },
          {
            coordinates:{lat:40.015137,lng:30.979530},
            content:'<h3>D Sigorta</h3><h3><label class="text-primary"><a href="<?php echo base_url('anasayfa/teklifal'); ?>">Teklif Al</a></label></h3>'
          },
        ];
        for(var i=0;i<markers.length;i++){
          AddMarker(markers[i])
        }


        function AddMarker(options){
          var marker = new google.maps.Marker({
            position:options.coordinates,
            map:map,
            icon:image
          });
          var infoWindow = new google.maps.InfoWindow({
            content:options.content
          });
          marker.addListener('click',function(){
            infoWindow.open(map,marker);
          });
        }

      }
    </script>

  </body>

  </html>
