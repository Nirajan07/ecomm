<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
class UserController extends Controller
{
    //
    function login(Request $request)
    {
        
$user=User::where(['email'=>$request->email])->first();

    if (!$user || !Hash::check($request->password, $user->password))
    {
        return "Username or password doesn't match";

    }else{
         Session::put('user', $user);
        //$id=$user->id;
        //print_r($id);
       
        return redirect('/');
        //$request->session()->put('user', '$user');
       
    }

    }
    function registers(Request $request)
{  
     
         $user=new User;
        
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));

       
        $user->save();
        redirect('/login');
   
}

}
