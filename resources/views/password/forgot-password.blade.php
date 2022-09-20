<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <title>Forgot Password</title>
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
                    <p>Forgot Password.</p>
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
                <form  method="POST" class="form-email">
                  <div class="form-group">
                  <div class="p-2">
                    <label for="Email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="Email" placeholder="Masukkan email" required>
                  </div>

                  <div class="mt-3 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="button" onclick="kirimEmail()">Send</button>
                  </div>
                  <div class="mt-5 text-center">

            </form>
        </div>
                                
    </div>
</div>
 <!-- end account-pages -->

  <!-- JAVASCRIPT -->
  <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
      function kirimEmail(){
       
        if($('#Email').val() == ''){
          alert('Email Harus Diisi');
        }
          else {
              
                let email = ($('#Email').val(); 

                $.ajax({
                    url: "{{ route('kirimEmail.proses') }}",
                    type: "post",
                    data: $(".form-email").serialize(),
                    success: function(response) {
                        // $('.btn-kirim-loading').addClass('d-none');
                        // $('.btn-kirim').removeClass('d-none');
                        if (response.status == "ada") {
                            alert('Link reset password telah berhasil dikirim, silahkan cek (spam) email anda');
                        } else if (response.status == "kosong") {
                         
                            alert('NIK anda tidak terdaftar');

                        } else if (response.status == "gagal") {
                            alert('Email reset password gagal dikirim');
                            console.log(response.message);
                        }
                    },
                    error: function(request, status, error) {
                        // $('.btn-kirim-loading').addClass('d-none');
                        // $('.btn-kirim').removeClass('d-none');
                        alert('Terjadi Kesalahan');
                        console.log(request.responseText);
                    }
                });
            }

        }
  



  </script>
</body>
</html>