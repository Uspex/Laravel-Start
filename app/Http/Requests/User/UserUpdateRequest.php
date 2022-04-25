<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {
        $userId = request()->segment(2);

        return [
            'name'  => 'required|string|min:3|max:191',
            'email' => 'required|email|min:3|max:191|unique:users,email,'.$userId ,
        ];
    }
}
