<?php

namespace App\Http\Requests\EmployerUser\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:255',
            'contact_no'=>'required|unique:employer_user',
            'email'=>'required|unique:employer_user,email',
            'password'=>'required|confirmed'
        ];

    }
}
