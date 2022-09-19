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
  <div class="account-pages my-5 pt-sm-5"> 
    <div class="container-fluid">
      <div class="row justify-content-center"> 
        <div class="col-md-cover col-lg-cover col-xl-cover"> 
          <div class="card overflow-hidden"> 
            <div class="bg-primary bg-soft"> 
              <div class="row"> 
                <div class="col-7"> 
                  <div class="text-primary p-4 font-family" > 
                    <h1>Welcome !</h1> 
                    <h2><p>Profile</p></h2> 
                  </div> 
                </div> 
                <div class="col-5 align-self-end">  
                  <img src="{{asset('/images/profile-')}}img.png" class="img-fluid" alt=""> 
                </div>
                <nav class="navbar navbar-default">
                <div class="container-fluid">
			<div class="navbar-header">
      <a class="navbar-brand" href="https://www.malasngoding.com"></a>
	</div>
		
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
				<a class="navbar-brand"></a>
			</div>
      <div class="mb-3">
			<ul class="navigation">
      <li><a href="/">Home</a></li>
				<li><a href="/">Aktivitas</a></li>
				<li><a href="/">Profile</a></li> 
				<li><a href="/">Kontak</a></li> 
			</ul>
      <style>
        body{
         padding-left: 2px;
         padding-right: 2px;
         padding-top: 2px;
         padding-bottom: 2px;
        }
        </style>

		<div class="p-2">
      <form class="navbar-form navbar-left" role="search">
      <form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
        <div class="mt-3 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                  </div>
</form>
</div><!-- /.navbar-collapse -->
    </div>
                </div>
              </div>
            </div>
            <div class="p-0">
                <form action="{{ route('profile') }}" method="POST">
                @csrf

	</div>
</nav>
 
		</div>
	</nav>

</div>   
                </div>
                </div> 
                </div> 
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