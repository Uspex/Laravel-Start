<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class PermissionCreateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = request()->segment(2);

        return [
            'name'          => ['required', 'min:3', 'max:200', 'unique:permissions,name,'.$id],
            'display_name'  => ['nullable', 'min:3', 'max:200'],
            'description'   => ['nullable', 'min:3'],
        ];
    }
}
