<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Ui extends BaseController
{
    public function general()
    {
        return view('backend/ui/general');
    }

    public function icons()
    {
        return view('backend/ui/icons');
    }

    public function button()
    {
        return view('backend/ui/button');
    }

    public function modals()
    {
        return view('backend/ui/modals');
    }

    public function navbar()
    {
        return view('backend/ui/navbar');
    }

    public function ribbons()
    {
        return view('backend/ui/ribbons');
    }

    public function sliders()
    {
        return view('backend/ui/sliders');
    }

    public function timeline()
    {
        return view('backend/ui/timeline');
    }
}

?>