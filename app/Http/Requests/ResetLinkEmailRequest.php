<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetLinkEmailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->guest();
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
        ];
    }
}
