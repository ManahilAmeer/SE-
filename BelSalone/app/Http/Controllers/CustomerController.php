<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function CustomStore(request $request)
    {
//        print_r($request->input());
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $con_password=$request->input('password_confirmation');
        if($password==$con_password)
{         DB::insert('INSERT INTO customer(customer_id, customer_name, customer_email, customer_password) VALUES (?,?,?,?)',[null,$name,$email,$password]);
         //return view('beautProfile',['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone]);
         return view("index");
}
else{
    echo '<script>alert("Enter same password ")</script>'; 
    return view("CustomRegister");
}
}
    public function Customlogs(request $request)
    {
//        print_r($request->input());

        $email=$request->input('email');
        $password=$request->input('password');
        $matchThese = ['customer_email' => $email, 'customer_password' => $password];
        $id=DB::table('customer')->where($matchThese)->get()->toArray();
        //$result = query($id);
        //$id = DB::select('select id from beautician where `email` = ? and `password`=?', [$email,$password]);
//        $Address=DB::select('select address from beautician where email=? ',[$email]);
  //     $name=DB::select('select name from beautician where email=? ',[$email]);
    //    $phone=DB::select('select phone from beautician where email=? ',[$email]);
        // echo $data=['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone];
    //     foreach ($id as $user) {
    //       $name=$user->name;
    //       $Address=$user->Address;
    //       $phone=$user->Phone;
    // }

        if(count($id)){
        session_start();
        $request->session()->put('name',$email); 
            return view("index");
//           return view('beautProfile',['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone]);

        }
        else{
            echo '<script>alert("Enter right information")</script>'; 
            return view("CustomLogin");
        }
}
}
