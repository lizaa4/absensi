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
                  <div class="mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Password lama</label>
                    <input type="text" class="form-control" name="password lama" id="password lama" placeholder="Masukkan password lama" required>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Password baru</label>
                    <input type="text" class="form-control" name="password baru" id="password baru" placeholder="Masukkan password baru" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Verifikasi Password</label>
                    <div class="input-group auth-pass-inputgroup">
                      <input type="password" class="form-control" placeholder="Masukkan Password" aria-label="Password" aria-describedby="password-addon" required>
                      <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
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