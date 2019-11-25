<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Users;
class StoreRegisterNew extends FormRequest
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
            'Username' => 'required|max:32',
            'Email' => 'required|unique:users,email',
            'Password' => 'required|max:32|min:6|confirmed',
            'Password_confirmation' => 'required',
        ];
    }
}
