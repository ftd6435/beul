<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminFormRequest extends FormRequest
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
            'title' => ['required', 'min:8'],
            'slug' => ['required', 'min:5', 'regex:/^[0-9a-z\-]+$/', Rule::unique('posts')->ignore($this->route()->parameter('post'))],
            'content' => ['required', 'min:10'],
            'category_id' => ['required', 'exists:categories,id'],
            'user_id' => ['required', 'exists:users,id'],
            'tags' => ['array', 'exists:tags,id', 'required'],
            'image' => ['image', 'max:2000'],
            'status' => ['string', 'min:6'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => $this->input('slug') ?: Str::slug($this->input('title'))
        ]);
    }
}
