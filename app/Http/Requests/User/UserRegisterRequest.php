<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    protected $redirect = '/user/register';

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
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'cpf' => ['required', 'numeric', 'unique:users,cpf'],
            'birthday' => ['required'],
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
            'cpf.required' => 'O CPF é obrigatório',
            'cpf.numeric' => 'O CPF deve conter apenas números',
            'cpf.unique' => 'O CPF informado já está cadastrado',
            'birthday.required' => 'A data de nascimento é obrigatória'
        ];
    }
}
