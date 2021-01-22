<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class BeautProfileUpdater extends Controller
{
    //
    public function update(Request $request)
    {
        # code...
        $name=$request->input('name');
        $phone=$request->input('phone');
        $Address=$request->input('address');
        $email=$request->input('email');
        $password=$request->input('pass');
        $con_password=$request->input('conPass');
        if($password==$con_password)
{   DB::update('UPDATE beautician SET beautician_name=?,beautician_email=?,beautician_password=?,beautician_Phone=?,beautician_Address=? WHERE beautician_email=? ',[$name,$email,$password,$phone,$Address,$email]);
         return view('beautProfile',['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone]);
}
else{
    echo '<script>alert("Enter same password")</script>'; 
    return view("register");
}
    }
}
