<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
class AdminLoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required|email',
            'password'=>'required'

        ];
        
    }
    public function messages(): array
{
    return [
        'name.required' => 'Naam likhna lazmi hai.',
        'name.string' => 'Naam mein sirf huroof (letters) hone chahiye.',
        'email.required' => 'Email address zaroori hai.',
        'email.email' => 'Meharbani karke sahi email address likhein.',
        'email.unique' => 'Yeh email pehle se register hai.',
        'password.required' => 'Password likhna lazmi hai.',
        'password.min' => 'Password kam az kam 8 characters ka hona chahiye.',
        'password.confirmed' => 'Password confirmation match nahi ho rahi.',
    ];
}
}
