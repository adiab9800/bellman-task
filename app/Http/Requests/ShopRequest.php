<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }
    /**
    * Get the validation rules that apply to the request.
    * @return array
    */
    public function rules()
    {
        $id = request('id') ?: 'NULL'; //To identify if request is for add or edit just take autoincremented id parameter form request.

        return [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:shops,email,'.$id,
            'logo'     => 'nullable|image|dimensions:min_width=100,min_height=100',
            'website'  => 'nullable|url|max:255'
        ];

    }

    public function messages()
    {
        return [
            "name.required"    => "shop name is required",
            "name.string"      => "shop name should be string",
            "name.max"         => "shop name should be less than 255 characters",
           
            "email.required"   => "shop email is required",
            "email.email"      => "shop email should be a valid email",
            "email.unique"     => "this email is already exist",

            "logo.image"       => "logo must be an image",
            "logo.dimensions"  => "logo minimum dimensions should be 100 x 100",
           
            "website.url"      => "shop website must be a valid URL",
            "website.max"      => "shop website should be less than 255 characters",

        ];
    }
}
