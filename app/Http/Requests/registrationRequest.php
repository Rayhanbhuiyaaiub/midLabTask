<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "firstName"=>"required|max:30|min:3|alpha_dash",
            "lastName"=>"required|max:30",
            "userName"=>"required|max:30|unique:customertable,username|unique:usertable,username",
            "email"=>"required|email|max:50|min:10|unique:customertable,email|unique:usertable,email",
            "password"=>"required|min:8|max:20|alpha_num|confirmed",
            "phone"=>"required|digits_between:11,15|numeric",
            "address"=>"required|max:30",
            "companyName"=>"required|max:30",
            "city"=>"required|max:20|min:3",
            "country"=>"required|max:20|min:3",



            

        ];
    }
}
