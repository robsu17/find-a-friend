<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterOrgRequest extends FormRequest
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
            'admin' => 'required|string',
            'nameOrg' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
            'cep' => 'required|string',
            'address' => 'required|string',
            'whatsapp' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'admin.required' => 'O campo nome do responsável é obrigatório.',
            'nameOrg.required' => 'O campo nome da organização é obrigatório',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email deve ser válido.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'cep.required' => 'O campo CEP é obrigatório.',
            'address.required' => 'O campo endereço é obrigatório.',
            'whatsapp.required' => 'O campo whatsapp é obrigatório.'
        ];
    }
}
