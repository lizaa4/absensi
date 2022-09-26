<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Update | data | diri</title>
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

<body>
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
                    <p>Update Data Diri</p>
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
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan email" required>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" required>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="nomor hp" placeholder="Masukkan nomor hp" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Enskripsi Password</label>
                    <div class="input-group auth-pass-inputgroup">
                      <input type="password" class="form-control" placeholder="Masukkan Password" aria-label="Password" aria-describedby="password-addon" required>
                      <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                    </div>
                  </div>
                  <form action="{{ route('update.proses') }}" method="POST">
              <div class="form-group"> 
                        <label for="nama">Perusahaan</label> 
                        <select name="access" id="access"> 
                            <option value="Telkom">Telkom</option> 
                            <option value="Ish">Ish</option>
                            <option value="Mitratel">Mitratel</option>
                            <option value="Pst">Pst</option>
                            <option value="Telkom Akses8">Telkom Akses</option>
                            <option value="Infomedia">Infomedia</option>
                            <option value="Lain-Lain">Lain-lain</option>
                        </select> 
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
                }     
          </style> 
                  <div class="mt-3 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">simpan</button>
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