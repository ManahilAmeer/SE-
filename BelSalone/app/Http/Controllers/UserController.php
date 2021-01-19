<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function store(request $request)
    {
//        print_r($request->input());
        $name=$request->input('name');
        $phone=$request->input('phone');
        $Address=$request->input('Address');
        $email=$request->input('email');
        $password=$request->input('password');
         echo   DB::insert('INSERT INTO beautician(id, name, email, password, Phone, Address) VALUES (?,?,?,?,?,?)',[null,$name,$email,$password,$phone,$Address]);
         return view('beautProfile',['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone]);
}
    public function logs(request $request)
    {
//        print_r($request->input());

        $email=$request->input('email');
        $password=$request->input('password');
        $matchThese = ['email' => $email, 'password' => $password];
        $id=DB::table('beautician')->where($matchThese)->get()->toArray();
        //$result = query($id);
        //$id = DB::select('select id from beautician where `email` = ? and `password`=?', [$email,$password]);
        $Address=DB::select('select address from beautician where email=? ',[$email]);
       $name=DB::select('select name from beautician where email=? ',[$email]);
        $phone=DB::select('select phone from beautician where email=? ',[$email]);
        // echo $data=['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone];
        foreach ($id as $user) {
          $name=$user->name;
          $Address=$user->Address;
          $phone=$user->Phone;
    }

        if(count($id)){
           return view('beautProfile',['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone]);
        }
        else{
            print_r("sorry");
        }
}
}
?>