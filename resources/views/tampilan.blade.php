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
body {
        background-image: url('https://i.pinimg.com/originals/fd/b9/f9/fdb9f947f4653d9608ca47cde736e7a7.jpg'); 
        background-repeat: no-repeat; 
        background-attachment: fixed;   
        background-size: cover; 
        padding-bottom: 20px; 
        padding-left: 100px; 
        padding-top: 100px; 
        padding-right: 100px;
        min-height: 2000px;
    }
    .jumbotron {
        padding-top: 2rem;
        background-color: #e2edff;
    }
    #projects {
        background-color: #e2edff;
    }

  </style>
  <body>
       <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="absen">ABSENSI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a href= "{{route('profile')}}"  class="btn btn-primary">profile</a>  
        </li>
        <li class="nav-item">            
        <a href= "{{route('history')}}"  class="btn btn-primary">history</a>          
        </li>   
        <li class="nav-item">            
        <a href= "{{route('login')}}"  class="btn btn-primary">Logout</a>          
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Akhir Navbar -->


 
  <!-- Jumbotron -->
  <section class="jumbotron text-center">
  <img src="{{asset('/images/profile-')}}img.png" alt="rofile" width="200" />
  <h1 class="display-4">Welcome</h1>
  <div class="mt-3 d-grid">
  <p class="lead">Anda sudah melakukan absensi</p>
  <div class="register-box-body">
    <!-- <h2 style="text-align: center"><b>Absen Masuk Data Center</b></h2> -->
    <div class="content">
      <div class="row">
        <div class="col-sm-12">
          <div class="align-center">
         
<p>lokasi anda saat ini: <span type="text" id="lokasi"></span></p>

                        @php
                        $date=date_create(null,timezone_open("Asia/Jakarta"));

                        $tz=date_timezone_get($date);

                        echo timezone_name_get($tz);

                        $tanggal = mktime(date('m'), date("d"), date('Y'));
                        
                        echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . " |</b>";
                        
                        date_default_timezone_set("Asia/Jakarta");
                        
                        $jam = date ("H:i:s");
                        //echo " | Pukul : <b align='center'> " . $jam . " " ." </b> ";
                        
                        $a = date ("H");
                        
                       
                        $absen_user = date("H:i:s");
                        $absen_masuk_awal = "07:30:00";

                        $absen_masuk_akhir ="16:20:00";


                        if($absen_user < $absen_masuk_awal)
                        {
                          die("Anda belum boleh absen");
                        }
                        else
                        {
                          if($absen_user > $absen_masuk_akhir)
                          {
                            die("Anda sudah terlambat absen");
                          }
                          else
                          {
                            echo "Anda hadir pada waktu yang tepat";
                          }
                        }


                        @endphp
                        <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
                            Pukul :
                            <span id="clock"></span>
                        </body>
                   <div class="container">
        <form action="/tampilan" method="POST" enctype="multipart/form-data" >
          @csrf
          @if (session('pesan'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i>Success</h4>
            {{ session('pesan') }}.




          @endif
          <input type="hidden" name="lat" class="latAbsen">
          <input type="hidden" name="lon" class="lonAbsen">
          <br><button  class="btn btn-primary">Submit</button></br>  
                      </div>  
        </form>
        <div class="mt-3 d-grid"></div>
        <div  class="m" id="map" style="width: 900px; height: 500px;"></div>
      <script>

var map = L.map('map').setView([-7.28481921903077, 112.78121355255732], 11);

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([-7.28481921903077, 112.78121355255732]).addTo(map)
  .bindPopup('<b>Telkom Landmark Tower</b><br />Ini adalah tempat magangku.').openPopup();


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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.8" d="M0,96L34.3,112C68.6,128,137,160,206,149.3C274.3,139,343,85,411,90.7C480,96,549,160,617,160C685.7,160,754,96,823,101.3C891.4,107,960,181,1029,192C1097.1,203,1166,149,1234,117.3C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      </section>
      <!-- Akhir Jumbotron -->@section('content')
      




</body>
</html>
