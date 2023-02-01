<?php

namespace App\Http\Requests\Backoffice;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() AND (auth()->user()->type  == 'alumni');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = auth()->user();
        return [
            //
            'fname' => "required",
            'lname' => "required",
            'email' => "required|unique:users,email,{$user->id}",
            'gender' => "required",
            'year_graduated' => "required",
            'course' => "required",
            'company' => "required",
            'work_position' => "required",
        ];
    }
}
