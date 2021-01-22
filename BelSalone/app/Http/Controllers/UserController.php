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
        $con_password=$request->input('password_confirmation');
        if($password==$con_password)
{   DB::insert('INSERT INTO beautician(beautician_id, beautician_name, beautician_email, beautician_password, beautician_Phone, beautician_Address) VALUES (?,?,?,?,?,?)',[null,$name,$email,$password,$phone,$Address]);
         return view('beautProfile',['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone]);
}
else{
    echo '<script>alert("Enter same password")</script>'; 
    return view("register");
}
}
    public function logs(request $request)
    {
//        print_r($request->input());

        $email=$request->input('email');
        $password=$request->input('password');
        $matchThese = ['beautician_email' => $email, 'beautician_password' => $password];
        $id=DB::table('beautician')->where($matchThese)->get()->toArray();
        //$result = query($id);
        //$id = DB::select('select id from beautician where `email` = ? and `password`=?', [$email,$password]);
        $Address=DB::select('select beautician_address from beautician where beautician_email=? ',[$email]);
       $name=DB::select('select beautician_name from beautician where beautician_email=? ',[$email]);
        $phone=DB::select('select beautician_phone from beautician where beautician_email=? ',[$email]);
        // echo $data=['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone];
        foreach ($id as $user) {
          $name=$user->beautician_name;
          $Address=$user->beautician_Address;
          $phone=$user->beautician_Phone;

    }

        if(count($id)){
            session_start();
            $_SESSION['email']=$email;
           $request->session()->put('name',$email); 
           $output=$request->session()->get('name');
           return view('beautProfile',['name'=>$name,'address'=>$Address,'email'=>$email,'phone'=>$phone]);
        }
        else{
            echo '<script>alert("Enter right information")</script>'; 
            return view("login");
        
        }
}


}
?>