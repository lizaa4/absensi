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
    html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-var {
			height: 600px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
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
  <h1>{{$user->name}}</h1>
  <p>Hai {{$user->name}} anda telah melakukan absens pada
  <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
                    Pukul :
                    <span id="clock"></span>
                    @php 
                    $date = new DateTime('now');
                    echo $date->format('d-m-Y');

                    @endphp
                  </body>
                  <p>pada lokasi anda saat ini: <span type="text" id="lokasi"></span></p>
  </p>
  <div class="mt-3 d-grid">
  <!-- <p class="lead">Anda sudah melakukan absensi</p> -->
  <div class="register-box-body">
    <!-- <h2 style="text-align: center"><b>Absen Masuk Data Center</b></h2> -->
    <div class="content">
      <div class="row">
        <div class="col-sm-12">
          <div class="align-center">       

         
          
                  <div class="container">
                    <form action="/absentap/simpan/" method="POST" enctype="multipart/form-data">
                      @csrf
                      @if (session('pesan'))
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i>Success</h4>
                        {{ session('pesan') }}.





                        @endif
                        <input type="hidden" name="lat" class="latAbsen">
                        <input type="hidden" name="lon" class="lonAbsen">
                      </div>
                    </form>
                    <div id='map'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                      <path fill="#ffffff" fill-opacity="0.8" d="M0,96L34.3,112C68.6,128,137,160,206,149.3C274.3,139,343,85,411,90.7C480,96,549,160,617,160C685.7,160,754,96,823,101.3C891.4,107,960,181,1029,192C1097.1,203,1166,149,1234,117.3C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
                    </svg>
                    </div>
  </section>
  <!-- Akhir Jumbotron -->@section('content')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js "></script>
  <!-- <script src="{{ asset('absen/template/jquery/jquery.min.js') }}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      tampilLokasi();
    });
    // untuk mengeksekusi walaupun tnpa perintah dari user

    function tampilLokasi() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPositionTs);
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    }


    function showPositionTs(position) {

      var lat = position.coords.latitude;
      var lon = position.coords.longitude;
      // alert(lat +'/'+ lon);

      $('#lattitude').val(lat);
      $('#longitude').val(lon);
      $('#lokasi').text('latitude : ' + lat + ' longitude : ' + lon);
      $('.latAbsen').val(lat);
      $('.lonAbsen').val(lon);

    }

    function simpan() {
      //  alert('13')
      $.ajax({
        url: '{{ route("simpanAbsen.proses") }}',
        type: 'post',
        data: {
          "_token": "{{ csrf_token() }}",
          'lat': $('#lattitude').val(),
          'lon': $('#longitude').val(),

        },
        success: function(response) {
          if (response.status == 'berhasil') {
            alert("berhasil");
            window.location.href = "{{url('/tampilan')}}";


          } else if (response.status == 'gagal') {
            alert("gagal");
          }
        },
        error: function(request, status, error) {

          console.log(request.responseText);
        }
      });
    }

    function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
      var waktu = new Date(); //membuat object date berdasarkan waktu saat
      var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
      var sm = waktu.getMinutes() + ""; //memunculkan nilai detik
      var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
      document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
    }
    
    var map = L.map('map').setView([-7.284821403182769, 112.78123272468126], 11);
   

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker = L.marker([-7.28481921903077, 112.78121355255732]).addTo(map)
  .bindPopup('<b>lokasi anda saat ini</b><br />Telkom Landmark Tower.').openPopup();


var popup = L.popup()
  .setLatLng([-7.28481921903077, 112.78121355255732])
  .setContent('Halo {{$user->name}}')
  .openOn(map);

function onMapClick(e) {
  popup
    .setLatLng(e.latlng)
    .setContent('You clicked the map at ' + e.latlng.toString())
    .openOn(map);
}



  function showPositionTs(position) {

var lat = position.coords.latitude;
var lon = position.coords.longitude;
// alert(lat +'/'+ lon);

$('#lattitude').val(lat);
$('#longitude').val(lon);
$('#lokasi').text('latitude : ' + lat + ' longitude : ' + lon);
$('.latAbsen').val(lat);
$('.lonAbsen').val(lon);

}
  map.on('click', onMapClick);

  </script>

</body>
</html>
