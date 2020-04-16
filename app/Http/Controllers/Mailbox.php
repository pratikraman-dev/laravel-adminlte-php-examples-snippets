<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Mailbox extends BaseController
{
    public function inbox()
    {
        return view('backend/mailbox/inbox');
    }

    public function compose()
    {
        return view('backend/mailbox/compose');
    }

    public function read()
    {
        return view('backend/mailbox/read-mail');
    }
}

?>