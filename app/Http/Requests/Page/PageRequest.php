<?php

namespace App\Http\Requests\Page;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'slug'          => ['nullable', 'min:2', 'max:191', 'unique:pages,slug,'.$this->page],
        ];
    }
}
