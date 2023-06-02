<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class SignUpFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:4'],
            'username' => ['required', 'string', 'min:4'],
            'email' => ['required', 'email', 'min:4'],
            'role' => ['required', 'string', 'min:4'],
            'password' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'password' => Hash::make($this->input('password'))
        ]);
    }
}
