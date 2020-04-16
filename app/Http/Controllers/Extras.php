<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Extras extends BaseController
{
    public function login()
    {
        return view('backend/examples/login');
    }

    public function register()
    {
        return view('backend/examples/register');
    }

    public function forgotpassword()
    {
        /*return view('backend/examples/forgot-password');*/
        return view('vendor/adminlte/passwords/reset');
    }

    public function recoverpassword()
    {
        /*return view('backend/examples/recover-password');*/
        return view('vendor/adminlte/passwords/reset');
    }

    public function lockscreen()
    {
        return view('backend/examples/lockscreen');
    }

    public function legacyusermenu()
    {
        return view('backend/examples/legacy');
    }

    public function languagemenu()
    {
        return view('backend/examples/language');
    }

    public function error404()
    {
        return view('backend/examples/404');
    }

    public function error500()
    {
        return view('backend/examples/500');
    }

    public function pace()
    {
        return view('backend/examples/pace');
    }

    public function blankpage()
    {
        return view('backend/examples/blank');
    }

    public function starterpage()
    {
        return view('backend/examples/starterpage');
    }
}

?>