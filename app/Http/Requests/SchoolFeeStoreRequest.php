<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolFeeStoreRequest extends FormRequest
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
            'form' => 'required|numeric',
            'development_fund' => 'required|numeric',
            'education_development_donation' => 'required|numeric',
            'batik_uniform' => 'required|numeric',
            'scout_uniform' => 'required|numeric',
            'academic_year' => 'required',
        ];
    }
}
