<!doctype html> 
<html lang="en"> 
 
<head> 
<style> 
body { 
    background-image: url('https://i.pinimg.com/originals/87/0d/5b/870d5baa31de3a42430189d34ec53620.jpg'); 
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: cover;
    padding-top: 50px;
    padding-right: 80px;
    padding-bottom: 50px;
    padding-left: 80px;
} 
</style>
    <title>Register</title> 
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
 
    <!-- Bootstrap CSS v5.0.2 --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
 
</head> 
 
<body> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6 offset-md-3"> 
                <h1 class="text-center">Register</h1> 
                @if (session('error')) 
                    <div class="alert alert-danger"> 
                        {{ session('error') }} 
                    </div> 
                @endif 
                @if (session('success')) 
                    <div class="alert alert-danger"> 
                        {{ session('success') }} 
                    </div> 
                @endif 
                <form action="/register" method="post"> 
                    @csrf 
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
                        @if ($errors->has('nama')) 
                            <div class="text-danger"> 
                                {{ $errors->first('access') }} 
                            </div> 
                        @endif 
                    </div> 
                    <div class="form-group"> 
                        <label for="nama">Nama</label> 
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama"> 
                        @if ($errors->has('nama')) 
                            <div class="text-danger"> 
                                {{ $errors->first('nama') }} 
                            </div> 
                        @endif 
                    </div> 
                    <div class="form-group"> 
                        <label for="email">Email</label> 
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"> 
                        @if ($errors->has('email')) 
                            <div class="text-danger"> 
                                {{ $errors->first('email') }} 
                            </div> 
                        @endif 
                    </div> 
                    <div class="form-group"> 
                        <label for="password">Password</label> 
                        <input type="password" class="form-control" id="password" name="password" 
                            placeholder="Enter password"> 
                        @if ($errors->has('password')) 
                            <div class="text-danger"> 
                                {{ $errors->first('password') }} 
                            </div> 
                        @endif 
                    </div> 
                    <style> 
                        div { 
                            margin-top: 20px;
                            margin-bottom: 20px;
                            margin-right: 0px;
                            margin-left: 0px;
                        } 
                    </style> 
                    <button type="submit" class="btn btn-primary">Simpan</button> 
                </form> 
            </div> 
        </div> 
    </div> 
 
    <!-- Bootstrap JavaScript Libraries --> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"> 
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"> 
    </script> 
</body> 
 
</html>