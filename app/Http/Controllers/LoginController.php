<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\UserModel;
use App\registrationModel;
class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    function registration()
    {
        return redirect()->route("registration");
        
    }
    function verifyLogin(LoginRequest $request )
    {
     $user=UserModel::where('email',$request->email)
                    ->where('password',$request->password)
                    ->first();
     $customer=registrationModel::where('email',$request->email)
                    ->where('password',$request->password)
                    ->first();
                
        
        if($user)
        {
            $request->session()->put("username",$user->username);
            $request->session()->put("usertype",$user->role);
            
            return redirect()->route("home");
        }
        elseif($customer)
        {
            $request->session()->put("username",$customer->username);
            $request->session()->put("usertype","customer");
            
            return redirect()->route("home");
        }
    else{
        $request->session()->flash("msg","Credentials Error!");
       // return redirect()->route("login");
       return Back();
    }
        
    }
}
