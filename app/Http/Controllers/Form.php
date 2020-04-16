<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Form extends BaseController
{
    public function fileuplode()
    {
        return view('backend/forms/fileuplode');
    }

    public function advanced()
    {
        return view('backend/forms/advanced');
    }

    public function editors()
    {
        return view('backend/forms/editors');
    }

    public function generalf()
    {
        return view('backend/forms/generalf');
    }

    public function validation()
    {
        return view('backend/forms/validation');
    }
}

?>