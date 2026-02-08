<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'      => "required",
            "max_users" => "integer | required",
            "status"    => "required",
        ];
    }

    public function message()
    {
        return [
            "name.required"      =>  "O Nome é obrigatório",
            "max_users.integer"  =>  "A quantidade de usuários deve ser um número",
            "max_users.required" =>  "A quantidade de usuários é obrigatória"
        ];
    }
}
