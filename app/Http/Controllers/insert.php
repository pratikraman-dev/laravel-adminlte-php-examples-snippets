<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Insert extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Insert(Request $req)
    {
        $firstName = $req->input('firstName');
        $lastName = $req->input('lastName');
        $mobile = $req->input('mobile');

        $data = array('firstName' => $firstName, 'lastName' => $lastName, 'mobile' => $mobile);

        DB::table('demotbl')->insert($data);

        echo "inserted";
    }

}

?>