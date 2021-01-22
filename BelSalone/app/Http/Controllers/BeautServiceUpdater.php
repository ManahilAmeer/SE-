<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeautServiceUpdater extends Controller
{
    //
    public function update(Request $request)
    {
        # code...
        $service=$request->input('service');
        $category=$request->input('category');
        //$category;
        $price=$request->input('price');
 //       $password=$request->input('pass');
   //     $con_password=$request->input('conPass');
        $matchThese = ['category_name' => $category];
        $id=DB::table('category')->where($matchThese)->get()->toArray();
        foreach ($id as $user) {
        echo $category_id=$user->category_id;

    }
    DB::update('UPDATE service SET service_name=?,service_price=?,category_id=? WHERE service_name=? ',[$service,$price,$category_id,$service]);
    return view("beautServices");
}
}