<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class RoleUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => ['required', 'min:3', 'max:200'],
            'display_name'  => ['nullable', 'min:3', 'max:200'],
            'description'   => ['nullable', 'min:3'],
        ];
    }
}
