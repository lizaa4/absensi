<!doctype html> 
<html lang="en"> 
<head> 
<style> 
body { 
  background-image: url('https://i.pinimg.com/originals/73/d3/eb/73d3eb6181f834ba7b0879067b32ec19.jpg'); 
  background-repeat: no-repeat; 
  background-attachment: fixed;   
  background-size: cover; 
  padding-bottom: 100px; 
    padding-left:50px; 
    padding-top: 100px; 
    padding-right: 100px; 
}     
</style> 
 
    <title>Login</title> 
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
                <h1 class="text-center">Login</h1> 
                @if (session('error')) 
                    <div class="alert alert-danger"> 
                        {{ session('error') }} 
                    </div> 
                @endif 
                <form action="{{ route('login.proses') }}" method="POST"> 
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
                        <input type="password" class="form-control" id="password" name="password" 
                            placeholder="Enter password"> 
                        @if ($errors->has('password')) 
                            <div class="text-danger"> 
                                {{ $errors->first('password') }} 
                            </div> 
                        @endif 
                        <div class="center">            

                    <a href= "{{route('login')}}"  class="btn">forgot password?</a> 

                    <a href= "{{ route('login') }}"  class="btn">forgot password?</a> 

         
                    </style> 
                    </div> 
                    <button type="submit" class="btn btn-primary">Login</button> 
                    <style> 
                        div { 
                            margin-top: 20px;
                            margin-bottom: 20px;
                            margin-right: 0px;
                            margin-left: 0px;
                        } 
                        
                        div {
                        } 
                    </style>  
                    
                    <div class="center"> 
                    <a href="{{ route('register') }}" class="btn btn-md btn-success mb-3">register</a> 
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