<?php

namespace App\Http\Requests\Institution;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionRegisterRequest extends FormRequest
{
    protected $redirect = '/institution/register';

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:institutions,email'],
            'password' => ['required'],
            'cnpj' => ['required', 'numeric', 'unique:institutions,cnpj'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'email.required' => 'O email é obrigatório',
            'email.unique' => 'O email informado já está cadastrado',
            'password.required' => 'A senha é obrigatório',
            'cnpj.required' => 'O CNPJ é obrigatório',
            'cnpj.numeric' => 'O CNPJ deve conter apenas números',
            'cnpj.unique' => 'O CNPJ informado já está cadastrado',
        ];
    }
}
