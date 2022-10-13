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
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
  margin: 0px;
  padding: 0px;
  overflow: hidden;
  background-color: black;
  position: fixed;
  top: 0px;
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
  margin: 0px;
  text-decoration: none;
  width: 100%;
  }

  li a:hover:not(.active) {
  background-color: white;
  }

  .active {
  background-color: black;
  }
	
   
  </style>
  <body>
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
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
        <li class="nav-item">
        <a href="{{route('tampilan')}}">Cek</a>
        </li>
        <li class="nav-item">
        <a href="{{route('ubah')}}">Ubah password</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Jumbotron -->
  <section class="jumbotron text-center">
  <img src="{{asset('/images/profile-')}}img.png" alt="rofile" width="200" />
  <h1 class="display-4">Welcome</h1>
  <h1>{{$user->name}}</h1>
  <p>{{$user->name}}</p>
  <div>
  <a href="absen" class="fw-medium text-primary">kembali ke absen</a>
  </div>

  <div class="mt-3 text-center" >

  <div>
  <a href="update" class="btn btn-primary btn-lg">Update</a> 
  </div>
  </li>
        <li class="nav-item">
        <a href="{{route('ubah')}}">Ubah password</a>
        </li>

  </div>


  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.8" d="M0,96L34.3,112C68.6,128,137,160,206,149.3C274.3,139,343,85,411,90.7C480,96,549,160,617,160C685.7,160,754,96,823,101.3C891.4,107,960,181,1029,192C1097.1,203,1166,149,1234,117.3C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir Jumbotron -->

  </html>