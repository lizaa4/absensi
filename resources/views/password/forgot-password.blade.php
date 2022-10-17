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
                <form action="/reset" method="POST">
                @csrf
                  <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="text" name="Email" class="form-control" id="Email" placeholder="Masukkan Email" required>
                    @if ($errors->has('Email')) 
                            <div class="text-danger"> 
                                {{ $errors->first('Email') }} 
                            </div> 
                        @endif 
                  </div>
                  <div class="container">
        <form action="/reset" method="POST" enctype="multipart/form-data" >
          @csrf
          @if (session('pesan'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i>Success</h4>
            {{ session('pesan') }}.





          @endif
          <input type="hidden" name="Email" class="Email">
          <div class="mt-3 d-grid">
          <td class="text-center">
          <button  class="btn btn-primary">Send</button>
          </td> 
                      </div>  
        </form>
        <div class="mt-4 text-center">
          <a href="login" class="text-muted">selesai</a>
          </div>

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

    $(document).ready(function(reset) 
    {
    kirimEmail();
    });
    
      function kirimEmail(){
       
        if($('#Email').val() == ''){
          alert('Email Harus Diisi');
        }
          else {
            $('.btn-kirim').addClass('d-none');
            $('.btn-kirim-loading').removeClass('d-none');
            let email = $(".email").val();

      function kirimEmail(){
        alert('kirimEmail');
      }      

            $.ajax({
                    email: $("email"),
                    url: "{{ route('kirimEmail.proses') }}",
                    type: "post",
                    data: $(".reset-password").serialize(),
                    success: function(response) {
                        $('.btn-kirim-loading').addClass('d-none');
                         $('.btn-kirim').removeClass('d-none');
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
                        $('.btn-kirim-loading').addClass('d-none');
                         $('.btn-kirim').removeClass('d-none');
                        // alert('Terjadi Kesalahan');
                        console.log(request.responseText);
                    }
                });
                const reset = document.getElementById('reset');
                reset.addEventListener('click', function(){
                    clearTimeout(reset);
                    console.log('selesai');
                });
            }

        }
  



  </script>
</body>
</html>