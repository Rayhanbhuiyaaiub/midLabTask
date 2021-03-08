<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registrationRequest;
use App\registrationModel;

class registrationController extends Controller
{
    public function registration()
    {
        return view('login.registrationIndex');
    }
    function verifyRegistration(registrationRequest $request)
    {
       $registration=new registrationModel;
       $registration->first_name=$request->firstName;
       $registration->last_name=$request->lastName;
       $registration->username=$request->userName;
       $registration->email=$request->email;
       $registration->password=$request->password;
       $registration->address=$request->address;
       $registration->company_name=$request->companyName;
       $registration->phone=$request->phone;
       $registration->address=$request->address;
       $registration->city=$request->city;
       $registration->country=$request->country;
       $registration->save();
       $request->session()->flash("msg","Inserted successfully");
       return redirect()->route("registration");








       
    }
}
