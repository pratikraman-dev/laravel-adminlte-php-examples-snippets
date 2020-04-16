<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Table extends BaseController
{
    public function data()
    {
        return view('backend/tables/data');
    }

    public function jsgrid()
    {
        return view('backend/tables/jsgrid');
    }

    public function simple()
    {
        return view('backend/tables/simple');
    }
}

?>