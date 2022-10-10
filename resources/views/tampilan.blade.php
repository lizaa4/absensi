<!DOCTYPE html>
<html lang="en">
<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Tampilan | Absensi | Leaflet</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

	<style>
		html, body {
      background-image: url('https://i.pinimg.com/originals/fd/b9/f9/fdb9f947f4653d9608ca47cde736e7a7.jpg'); 
      background-repeat: no-repeat; 
      background-attachment: fixed;   
      background-size: cover; 
      padding-bottom: 20px; 
      padding-left: 100px; 
      padding-top: 100px; 
      padding-right: 100px;
      min-height: 2000px;
      margin: 0;
	
    }
    .jumbotron {
      padding-top: 2rem;
      background-color: #e2edff;
    }

		.leaflet-container {
      height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
    #projects {
        background-color: #e2edff;
    }
	</style>

	
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
  <a class="navbar-brand" href="#">Tampilan</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
  <img src="{{asset('/images/profile-')}}img.png" alt="rofile" width="200" />
  <h1 class="display-cover">Welcome </h1>
  <div class="mt-3 d-grid">
  <p class="lead">Anda telah melakukan Absensi</p>
  <div class="register-box-body">
  <!-- <h2 style="text-align: center"><b>Absen Masuk Data Center</b></h2> -->
  <div class="content">
  <div class="row">
  <div class="col-sm-12">
  <div class="align-center">
  <p>lokasi anda saat ini: <span type="text" id="lokasi"></span></p>
  <div id="map" style="width: 900px; height: 500px;"></div>
  <script>

	var map = L.map('map').setView([-7.28481921903077, 112.78121355255732], 13);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	var marker = L.marker([-7.28481921903077, 112.78121355255732]).addTo(map)
		.bindPopup('<b>Telkom Indonesia regional 5</b><br />Ini adalah tempat magangku.').openPopup();


	var popup = L.popup()
		.setLatLng([-7.28481921903077, 112.78121355255732])
		.setContent('Halo kamu.')
		.openOn(map);

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent('You clicked the map at ' + e.latlng.toString())
			.openOn(map);
	}

	map.on('click', onMapClick);

  </script>



</body>
</html>
