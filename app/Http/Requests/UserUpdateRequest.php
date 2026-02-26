<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            "name"      =>  "required",
            "email"     =>  "required | email",
            'password'  =>  "sometimes | nullable | min:8",
        ];
    }

    public function messages()
    {
        return [
            "name.required"     =>  "O Nome é obrigatório",
            "email.required"    =>  "O e-mail é um campo obrigatório",
            "email.email"       =>  "É necessário que este campo seja um e-mail válido",
            "password.min"      =>  "É necessário que a senha tenha ao menos 8 caracteres"

        ];
    }
}