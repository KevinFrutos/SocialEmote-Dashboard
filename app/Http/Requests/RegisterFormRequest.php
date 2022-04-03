<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
        return [
            'user' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user' => strip_tags($this->user),
            'name' => strip_tags($this->name),
            'last_name' => strip_tags($this->last_name),
            'email' => strip_tags($this->email),
        ]);
    }
}
