<!doctype html>  
<html lang="en">  
  
<head>  
  <meta charset="utf-8" />  
  <title>Profile</title>  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />  
  <meta content="Themesbrand" name="author" />   
  <!-- App favicon -->  
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">  
  <!-- owl.carousel css -->  
  <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.carousel.min.css') }}">  
  <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.theme.default.min.css') }}">  
  <!-- Bootstrap Css -->  
  <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css"/>  
  <!-- Icons Css -->  
  <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css"/>  
  <!-- App Css-->  
  <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>  
</head>  
<body>  
<style>
    * {margin:0; padding:0;}
     
    body {
     background-color: #fff;
     font-family:Arial, Helvetica, sans-serif;
     color:#000;
     margin: auto;
    }

    nav {
     margin:auto;
     text-align: center;
     width: 100%;
    } 

    nav ul ul {
     display: none;
    }

    nav ul li:hover > ul{
    display: block;
    width: 150px;
    }

    nav ul {
     background: lightgreen;
     padding-left: 20px;
     list-style: none;
     position: 20px;
     display: block;
     width: 100%;
     font-family: Arial, Helvetica, sans-serif;

    }

    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }

    nav ul li{
     float:left;
    }

    nav ul li:hover{
     background:#666;
    }

    nav ul li:hover a{
     color:#fff;
    }

    nav ul li a{
     display: block;
     padding: 25px;
     color: #fff;
     text-decoration: none;
    }

    nav ul ul{
     background: #53bd84;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 1px soild #53bd84;
     border-bottom: 1px solid #53bd84;
     position: relative;
    }

    nav ul ul li a{
     padding: 15px 40px;
     color: #fff;
    }

    nav ul ul li a:hover{
     background-color: #666;
    }

    nav ul ul ul{
     position: absolute;
     left: 100%;
     top: 0;
    }
    </style>
  <div class="account-pages my-5 pt-sm-5">  
    <div class="container"> 
      <div class="row justify-content-center">  
        <div class="col-md-cover col-lg-cover col-xl-cover">  
          <div class="card overflow-hidden">  
            <div class="bg-primary bg-soft">  
              <div class="row">  
                <div class="col-7">  
                  <div class="text-primary p-4 font-family" >  
                    <h1>Welcome !</h1>  
                    <h2><p>Profile Absensi.</p></h2>  
                  </div>  
                </div>  
                <div class="col-5 align-self-end">   
                  <img src="{{asset('/images/profile-')}}img.png" class="img-fluid" alt="">  
                </div> 
                <body>
<nav>
    <ul>
     	<li><a href="/">Home</a></li>
     	<li><a href="/">Input</a>
         	<ul>
             	<li><a href="/app/$_ENV">Data diri</a></li>
             	<li><a href="/app/$_ENV">History</a></li>

         	</ul>
         </li>
         <ul>
          <li><a href="/">Nama</a></li>
          <li><a href="/">Contact</a></li>
          <li><a href="/">Email</a></li>
          <li><a href="/">Password</a></li>
         </ul>
      
         <li><a href="#" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
    <style> 
        body{ 
         padding-left: 50px; 
         padding-right: 50px; 
         padding-top: 50px; 
         padding-bottom: 50px; 
        } 
        </style> 

</nav>
</body>
                <nav class="navbar navbar-default"> 
                <div class="container-fluid"> 
   <div class="navbar-header"> 
      <a class="navbar-brand" href="{{ asset('libs/owl.carousel/assets/owl.theme.default.min.css') }}"></a> 
 </div> 
 <div class="p-0"> 
                <form action="{{ route('profile') }}" method="POST"> 
                @csrf 
   <ul class="dropdown-menu"> 
    <li><a href="#">HTML</a></li> 
    <li><a href="#">CSS</a></li> 
    <li><a href="#">Bootstrap</a></li>  
   </ul> 
  </li> 
 </ul> 
   </div> 
</nav> 
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
    <span class="sr-only">Toggle navigation</span> 
    <span class="icon-bar"></span> 
    <span class="icon-bar"></span> 
    <span class="icon-bar"></span> 
   </button> 
    <a class="navbar-brand" href="{{ asset('libs/owl.carousel/assets/owl.theme.default.min.css') }}"></a>  
 </div> 
</div>    
          </div>
        </div>
</div> 

                    <!-- JAVASCRIPT -->  
                    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>  
                    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>  
                    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>  
                    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>  
                    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>  
  
                    <!-- App js -->  
                    <script src="{{ asset('js/app.js') }}"></script>  
</body>  
  
</html>