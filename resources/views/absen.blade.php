<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="tabel.blade.php">
  </head>
  <style>
    body {margin: 0;
      background-image: url('https://i.pinimg.com/originals/fd/b9/f9/fdb9f947f4653d9608ca47cde736e7a7.jpg'); 
      background-repeat: no-repeat; 
      background-attachment: fixed;   
      background-size: cover; 
      padding-bottom: 0; 
      padding-left: 0; 
      padding-top: 0; 
      padding-right: 0;
      
    }

     .jumbotron {
      padding-top: 20px;
      margin-top: 30px;
      height: 1500px;
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

  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #e2edff;
  position: fixed;
  top: 0;
  width: 100%;
  }

  li {
  float: left;
  }

  li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  margin: 0;
  text-decoration: none;
  }

  li a:hover:not(.active) {
  background-color: #ddd;
  }

  .active {
  background-color: #04AA6D;
  }
	
   
  </style>
  <body>
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">Absen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a href= "{{route('profile')}}">profile</a>  
        </li>
        <li class="nav-item">            
        <a href= "{{route('history')}}">history</a>          
        </li>   
        <li class="nav-item">            
        <a href= "{{route('login')}}">Logout</a>          
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
  <img src="{{asset('/images/profile-')}}img.png" alt="rofile" width="200" />
  <h1 class="display-4">Welcome to Absensi</h1>
  <div class="mt-3 d-grid">
  <p class="lead">Silahkan melakukan absensi</p>
  <div class="register-box-body">
    <h2 style="text-align: center"><b>Absen Masuk Data Center</b></h2>
    <div class="content">
      <div class="row">
        <div class="col-sm-12">
          <div class="align-center">
            <body>

<p>lokasi anda saat ini: <span type="text" id="lokasi"></span></p>


</body>
</html>
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
                   </div>
        
            </div>
          </div>
          
          <div class="mt-4 text-center">
          <div class="nav-item">            
                
                      </div>
          
                        
</a>
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.8" d="M0,96L34.3,112C68.6,128,137,160,206,149.3C274.3,139,343,85,411,90.7C480,96,549,160,617,160C685.7,160,754,96,823,101.3C891.4,107,960,181,1029,192C1097.1,203,1166,149,1234,117.3C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </div>


        </div>
      
      </section>
      <!-- Akhir Jumbotron -->@section('content')
      
      <div class="container">
        <form action="/absentap/simpan/" method="POST" enctype="multipart/form-data" >
          @csrf
          @if (session('pesan'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i>Success</h4>
            {{ session('pesan') }}.
          </div>




          @endif
          <input type="hidden" name="lat" class="latAbsen">
          <input type="hidden" name="lon" class="lonAbsen">
          <button  class="btn btn-primary">Submit</button>    
        </form>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js "></script>     
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

            var lat = position.coords.latitude ;
            var lon = position.coords.longitude ;
                // alert(lat +'/'+ lon);

            $('#lattitude').val(lat);
            $('#longitude').val(lon);
            $('#lokasi').text('latitude : '  +lat +' longitude : '+ lon);
            $('.latAbsen').val(lat);
            $('.lonAbsen').val(lon);
           
        }

        function simpan() {
          //  alert('13')
                    $.ajax({
                        url: '{{ route('simpanAbsen.proses') }}',
                        type: 'post',
                        data: {
                          "_token": "{{ csrf_token() }}",
                            'lat':   $('#lattitude').val(),
                            'lon':   $('#longitude').val(),
                            
                        },
                        success: function(response) {
                            if (response.status == 'berhasil') {
                               alert("berhasil");
                            

                            } else if (response.status == 'gagal') {
                              alert("gagal");
                            }
                        },
                        error: function(request, status, error) {
                        
                            console.log(request.responseText);
                        }
                    });
        }

  function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
      var waktu = new Date();            //membuat object date berdasarkan waktu saat
      var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
      var sm = waktu.getMinutes() + "";  //memunculkan nilai detik
      var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
      document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }

</script>