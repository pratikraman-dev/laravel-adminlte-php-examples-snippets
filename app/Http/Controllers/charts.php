<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Charts extends Controller
{
    public function chartjs()
    {

        return view('backend/charts/chartjs');
    }

    public function flot()
    {

        return view('backend/charts/flot');
    }

    public function inline()
    {

        return view('backend/charts/inline');
    }
}

?>