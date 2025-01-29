<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrincipleStoreRequest extends FormRequest
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
            'nip' => 'required|unique:principles,nip',
            'name' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required|email:rfc,dns',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'principle_images' => 'required'
        ];
    }
}
