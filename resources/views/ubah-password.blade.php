<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Ubah | password </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
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

    #projects {
        background-color: #e2edff;
    }

          </style> 
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/absen">ABSENSI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <!-- <li class="nav-item">
        <a href= "{{route('ubah')}}"  class="btn btn-primary">ubah password</a>  
        </li> -->
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
  <div class="account-pages my-5 pt-sm-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
              <div class="row">
                <div class="col-7">
                  <div class="text-primary p-4">
                    <h5 class="text-primary">Welcome !</h5>
                    <p>Ubah Password</p>
                  </div>
                </div>
                <div class="col-5 align-self-end">
                  <img src="{{asset('/images/profile-')}}img.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="auth-logo">
                <a href="index.html" class="auth-logo-light">
                  <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                      <img src="{{asset('/images/logo-lig')}}ht.svg" alt="" class="rounded-circle" height="34">
                    </span>
                  </div>
                </a>

                <a href="index.html" class="auth-logo-dark">
                  <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                      <img src="{{asset('/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                    </span>
                  </div>
                </a>
              </div>
              <div class="p-2">
                <form class="ubah-password" method="POST">
                @csrf
                  <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="Email" placeholder="Masukkan username" required>
                    @if ($errors->has('Email')) 
                            <div class="text-danger"> 
                                {{ $errors->first('Email') }} 
                            </div> 
                        @endif 
                  </div>
                </form>

                <div class="p-2">
                <form class="ubah-password" method="POST">
                @csrf
                  <div class="mb-3">
                  <label for="email" class="form-label">Password Lama</label>
                    <input type="text" name="password lama" class="form-control" id="password lama" placeholder="Masukkan password lama" required>
                    @if ($errors->has('password')) 
                            <div class="text-danger"> 
                                {{ $errors->first('password') }} 
                            </div> 
                        @endif 
                  </div>
                </form>

                <div class="p-2">
                <form class="ubah-password" method="POST">
                @csrf
                  <div class="mb-3">
                  <label for="email" class="form-label">Password baru</label>
                    <input type="text" name="password baru" class="form-control" id="password baru" placeholder="Masukkan password baru" required>
                    @if ($errors->has('password')) 
                            <div class="text-danger"> 
                                {{ $errors->first('password') }} 
                            </div> 
                        @endif 
                  </div>
                </form>

                <div class="p-2">
                <form class="ubah-password" method="POST">
                @csrf
                  <div class="mb-3">
                  <label class="form-label">Verifikasi Password</label>
                  <div class="input-group auth-pass-inputgroup">
                    <input type="password" name="verifikasi-password" class="form-control" placeholder="Masukkan password baru" aria-label="Password" aria-describedby="password-addon" required>
                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                  </div>
                    @if ($errors->has('password')) 
                            <div class="text-danger"> 
                                {{ $errors->first('password') }} 
                            </div> 
                        @endif 
                        <div class="mt-3 d-grid">
                    <td class="mt-5 text-center">
                      <button class="btn btn-primary waves-effect waves-light" type="button" onclick="kirimPassword()">simpan</button>
                    </td>
                      </div>
                  </div>
                </form>
                  
                     

  <!-- JAVASCRIPT -->
  <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script>

   
    
    function kirimPassword() {
      // alert($("#Password baru").val())
            if ($("#Password baru").val() == "" || $("#Password baru").val() == null) {
               alert('Password Harus Diisi!');
            } else {
                $('.btn-kirim').addClass('d-none');
                
                let password = $("#password baru").val();

                $.ajax({
                    url: "{{ route('kirimPassword.proses') }}",
                    type: "post",
                    data: $(".ubah-password").serialize(),
                    success: function(response) {
                        // $('.btn-kirim-loading').addClass('d-none');
                        // $('.btn-kirim').removeClass('d-none');
                        if (response.status == "ada") {
                            alert('Link ubah password telah berhasil dikirim, silahkan cek (spam) email anda');
                        } else if (response.status == "kosong") {
                         
                            alert('password anda tidak terdaftar');

                        } else if (response.status == "gagal") {
                            alert('password ubah password gagal dikirim');
                            console.log(response.message);
                        }
                    },
                    error: function(request, status, error) {
                        // $('.btn-kirim-loading').addClass('d-none');
                        // $('.btn-kirim').removeClass('d-none');
                        // alert('Terjadi Kesalahan');
                        // console.log(request.responseText);
                    }
                });
            }
        }



  </script>
</body>

</html>