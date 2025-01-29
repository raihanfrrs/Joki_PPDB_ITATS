<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Principle; // Tambahkan ini

class PrincipleUpdateRequest extends FormRequest
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
        // Ambil data Principle berdasarkan ID dari route
        $principle = Principle::where('id', $this->route('principle')->id)->first();
        $user_id = $principle ? $principle->user_id : null; // Pastikan hanya mengambil ID user

        return [
            'nip' => [
                'required',
                Rule::unique('principles', 'nip')->ignore($this->route('principle')) // Abaikan ID principle saat update
            ],
            'name' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required|email:rfc,dns',
            'username' => [
                'required',
                Rule::unique('users', 'username')->ignore($user_id) // Abaikan ID user terkait
            ],
        ];
    }
}
