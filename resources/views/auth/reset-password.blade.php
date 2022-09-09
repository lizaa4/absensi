@extends('layouts.app', ['title' => 'Reset Password - SantriKoding.com'])

@section('content')
<div class="col-md-5">
    <div class="card">

        <div class="card-body">

            <form method="POST" action="{{ route('reset.proses') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group"> 
                        <label for="email">Email</label> 
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"> 
                        @if ($errors->has('email')) 
                            <div class="text-danger"> 
                                {{ $errors->first('email') }} 
                            </div> 
                        @endif 

                <div class="form-group"> 
                        <label for="password">Password</label> 
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                         
                        @if ($errors->has('password')) 
                            <div class="text-danger"> 
                                {{ $errors->first('password') }} 
                            </div> 
                        @endif 

                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Konfirmasi Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Masukkan Konfirmasi Password Baru">
                </div>

                <button type="submit" class="btn btn-primary btn-block">RESET PASSWORD</button>
            </form>

        </div>
    </div>
</div>
@endsection