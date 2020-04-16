<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Hello extends Controller
{
    public function callhello()
    {

        return view('hello');
    }

    public function widgets()
    {

        return view('backend/widgets');
    }

    public function dashboard()
    {

        return view('backend/dashboard');
    }

    public function dashboard1()
    {

        return view('backend/dashboard1');
    }

    public function dashboard2()
    {

        return view('backend/dashboard2');
    }

    public function gallery()
    {

        return view('backend/gallery');
    }

    public function calendar()
    {

        return view('backend/calendar');
    }
}

?>