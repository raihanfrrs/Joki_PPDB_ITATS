<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StudentRegistrationUpdateRequest extends FormRequest
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
            'nisn' => [
                'required',
                Rule::unique('students', 'nisn')->ignore($this->route('student'))
            ],
            'nik' => [
                'required',
                Rule::unique('students', 'nik')->ignore($this->route('student'))
            ],
            'name' => 'required',
            'school_year' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'subdistrict' => 'required',
            'regency' => 'required',
            'religion' => 'required',
            'phone' => 'required',
            'email' => 'required|email:rfc,dns'
        ];
    }
}
