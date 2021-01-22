<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //
    public function getSession(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->get('name');
        }
        else{
            echo "No data in the session";
        }
    }
    public function storeSession(Request $req)
    {
        echo $data=$req->input('email');
        $req->session()->put('name',$data);
        //echo "Data has been stored";
    }
    public function deleteSession(Request $req)
    {
        $req->session()->forget('name');
        echo "Data has been removed";
    }
}
