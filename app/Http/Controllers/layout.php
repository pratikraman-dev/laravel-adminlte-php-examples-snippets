<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Layout extends Controller
{
    public function topnav()
    {

        return view('backend/layout/top-nav');
    }

    public function boxed()
    {

        return view('backend/layout/boxed');
    }

    public function fixfoo()
    {

        return view('backend/layout/fixed-footer');
    }

    public function fixsid()
    {

        return view('backend/layout/fixed-sidebar');
    }

    public function fixtop()
    {

        return view('backend/layout/fixed-topnav');
    }

    public function colsid()
    {

        return view('backend/layout/collapsed-sidebar');
    }

    public function home()
    {

        return view('home');
    }
}

?>