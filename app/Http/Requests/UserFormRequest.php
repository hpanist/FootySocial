<?php

namespace App\Http\Requests;
//file: app/Http/Requests/UserFormRequest.php

use Response;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{

    public function rules()
    {
        return [
            'username' => 'required|alpha_dash',
            'email'    => 'required|email',
            'password' => 'required|between:8,20|confirmed'
        ];
    }

    public function authorize()
    {
        return true;
    }

}
