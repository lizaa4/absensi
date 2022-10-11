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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">History</a>
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
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
  <img src="{{asset('/images/profile-')}}img.png" alt="rofile" width="200" />
  <h1 class="display-4">Welcome to History Absensi! </h1>
  <p class="lead"> anda sudah melakukan absensi!</p>
  
  <style>
      table{
          margin-left: auto;
          margin-right:auto;
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 65%;
        }
        
        td, th {
            border: 3px solid #809bce;
            text-align: center;
            padding: 10px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<body>
    
    <h2>History Absensi</h2>
    <div class="center">
    <table>
        <tr>
            <th>Date</th>
            <th>Geografi</th>
            <th>id</th>
        </tr>
        
    </table>
    </div>
</body>
</style>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.8" d="M0,96L34.3,112C68.6,128,137,160,206,149.3C274.3,139,343,85,411,90.7C480,96,549,160,617,160C685.7,160,754,96,823,101.3C891.4,107,960,181,1029,192C1097.1,203,1166,149,1234,117.3C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>

<div class="mt-3 text-center" >

<div>
  <p>back to absen?<a href="absen" class="fw-medium text-primary"> Back now </a> </p>
</div>

</div>




  </section>

</head>
</html>
  <!-- Akhir Jumbotron -->
  