<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Pages extends BaseController
{
    public function invoice()
    {
        return view('backend/examples/invoice');
    }

    public function profile()
    {
        return view('backend/examples/profile');
    }

    public function ecommerce()
    {
        return view('backend/examples/e_commerce');
    }

    public function projects()
    {
        return view('backend/examples/projects');
    }

    public function projectadd()
    {
        return view('backend/examples/project_add');
    }

    public function projectedit()
    {
        return view('backend/examples/project_edit');
    }

    public function projectdetail()
    {
        return view('backend/examples/project_detail');
    }

    public function contacts()
    {
        return view('backend/examples/contacts');
    }
}

?>