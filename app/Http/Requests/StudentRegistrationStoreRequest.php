<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StudentRegistrationStoreRequest extends FormRequest
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
                'unique:students,nik'
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
            'email' => 'required|email:rfc,dns',
            'image_akte_kelahiran' => 'required',
            'ktp_foto' => 'required',
            'image_pas_foto' => 'required',
            'image_ijasah' => 'required',
        ];
    }
}
