<!doctype html> 
<html lang="en"> 
<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
 
    <!-- Bootstrap CSS v5.0.2 --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
 
<style>
    body{
    background-color: lightblue;
    padding-top: 80px;
    padding-bottom: 50px; 
    padding-left: 80px;  
    padding-right: 50px; 
    }
</style>
</head>
<body>
<div class="col-md-5">
    <div class="card">

        <div class="card-body">

                <form action="{{ route('forgot.proses') }}" method="POST"> 
                    @csrf 
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
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"> 
                        @if ($errors->has('password')) 
                            <div class="text-danger"> 
                                {{ $errors->first('password') }} 
                            </div> 
                        @endif 
                    </div> 
                    <button type="submit" class="btn btn-md btn-success mb-3">SEND RESET PASSWORD</button> 
                    <style> 
                        div { 
                            margin-top: 20px;
                            margin-bottom: 20px;
                            margin-right: 0px;
                            margin-left: 0px;
                        } 
                    </style> 
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
</body>
</head>
</html>