<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
/**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
class LogoutController extends Controller
{
    
    public function getLogout()
    {
        $this->auth->logout();

        Session::flush();

        return redirect('/');


}
}