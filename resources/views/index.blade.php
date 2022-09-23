<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
  <!-- owl.carousel css -->
  <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('libs/owl.carousel/assets/owl.theme.default.min.css') }}">
  <!-- Bootstrap Css -->
  <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="style.csss">
  <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
</head>

<body>
  
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="btn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Hello</label>
    <ul>
        <li><a class="active" href="/">HOME</a></li>
        <li><a href="/">Profile</a></li>
        <li><a href="/">About</a></li>
        <li><a href="/">Contact</a></li>
    </ul>
</nav>
            <style>

              * {
                margin: 0;
                padding: 0;
                text-decoration: none;
                list-style: none;
                box-sizing: border-box;

              }
              body {
                background-image: url("{{asset('/images/profile-')}}img.png");
                background-position: center;
                background-size: 100% 100%;
                background-attachment: fixed;

              }
              nav {
                height: 80px;
                width: 100%;
                background: rgba(0, 0, 0, 0.4);
                border-bottom: 1px solid white;
                
              }
              nav .logo {
                font-size: 35px;
                line-height: 80px;
                font-weight: bold;
                color: white;
                padding: 0 50px;
                text-transform: uppercase;

              }
              nav ul {
                float: right;
                margin-right: 20px;
              }
              nav ul li {
                display: inline-block;
                line-height: 50px;
                margin: 0 5px;
              }
              nav ul li a {
                font-size: 17px;
                text-transform: uppercase;
                color: white;
                padding: 10px 17px;
                border-radius: 3px;

              }
              a.active, a:hover {
                background: rgba(0, 0, 0, 0.6);
                transition: 0.5s;

              }
              .btn {
                float: right;
                font-size: 30px;
                color: white;
                line-height: 80px;
                margin-right: 40px;
                cursor: pointer;
                display: none;

              }
              #check {
                display: none;
              }

              @media (max-width: 952px){
                nav .logo {
                  font-size: 30px;
                  padding-left: 50px;
                }

                nav ul li a {
                  font-size: 16px;
                }
              }

              @media (max-width: 858px){
                .btn {
                  display: block;
                }

                ul {
                  height: 100vh;
                  width: 100%;
                  position: fixed;
                  top: 80px;
                  left: -100%;
                  text-align: center;
                  background: rgba(0, 0, 0, 0.2);
                  transition: all .5s;

                }

                #check:checked ~ ul {
                  left: 0;

                }

                nav ul li {
                  margin: 50px 0;
                  line-height: 30px;
                  display: block;

                }

                a.active, a:hover {
                  color: white;
                  background: rgba(0, 0, 0, 0.6);
                }

              }
              
            </style>
            
  <!-- JAVASCRIPT -->
  <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

</body>
</html>