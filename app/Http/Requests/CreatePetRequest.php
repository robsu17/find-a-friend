<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CreatePetRequest extends FormRequest
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
            'name' => 'required|string',
            'about' => 'required|string|max: 300',
            'age' => 'required|string',
            'size' => 'required|string',
            'energy' => 'required|string',
            'dependency' => 'required|string',
            'ambience' => 'required|string',
            'requirement_values' => 'required|string',
            'photos' => 'required',
        ];
    }
}
