<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => ['required', 'min:2', 'max:191'],
            'slug'          => ['nullable', 'min:2', 'max:191', 'unique:categories,slug,'.$this->category],
        ];
    }
}
