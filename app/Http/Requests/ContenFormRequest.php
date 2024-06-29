<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContenFormRequest extends FormRequest
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
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [

            'firstName.required' => 'Add alanı zorunludur.',
            'firstName.string' => 'Ad alanı metin olmalıdır.',
            'firstName.max' => 'Ad alanı en fazla 255 karakter olmalıdır.',
            'lastName.required' => 'Soyad alanı zorunludur.',
            'lastName.string' => 'Soyad alanı metin olmalıdır.',
            'lastName.max' => 'Soyad alanı en fazla 255 karakter olmalıdır.',
            'email.required' => 'Email alanı zorunludur.',
            'email.email' => 'Geçerli bir email adresi giriniz.',
            'email.max' => 'Email alanı en fazla 255 karakter olmalıdır.',
            'subject.required' => 'Konu alanı zorunludur.',
            'subject.string' => 'Konu alanı metin olmalıdır.',
            'subject.max' => 'Konu alanı en fazla 255 karakter olmalıdır.',
            'message.required' => 'Mesaj alanı zorunludur.',
            'message.string' => 'Mesaj alanı metin olmalıdır.',
        ];
    }
}
