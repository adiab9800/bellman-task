<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
    * @return array
    */
    public function rules()
    {
        $id = request('id') ?: 'NULL'; //To identify if request is for add or edit just take autoincremented id parameter form request.

        return [
            'first_name'     => 'required|string|max:255',
            'last_name'      => 'required|string|max:255',
            'email'          => 'required|email|unique:customers,email,'.$id,
            'shop_id'        => 'required|numeric|exists:shops,id',
            'phone'          => 'required|numeric|max:20'
        ];

    }

    public function messages()
    {
        return [
            "first_name.required" => "customer first name is required",
            "first_name.string"   => "customer first name should be string",
            "first_name.max"      => "customer first name should be less than 255 characters",
           
            "last_name.required"  => "customer last name is required",
            "last_name.string"    => "customer last name should be string",
            "last_name.max"       => "customer last name should be less than 255 characters",

            "email.required"      => "customer email is required",
            "email.email"         => "customer email should be a valid email",
            "email.unique"        => "this email is already exist",

            "shop_id.required"    => "shop is required",
            "shop_id.numeric"     => "shop must be numeric value",
            "shop_id.exists"      => "please enter a valid shop",

            "phone.required"      => "customer phone is required",
            "phone.numeric"       => "customer phone should be numeric",
            "phone.max"           => "customer phone should be less than 20 characters",
            
        ];
    }
}
