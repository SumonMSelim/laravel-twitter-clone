<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhoneNumberRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'phone_number' => 'required|min:6|unique:users,phone_number,'.$this->user()->id
        ];
    }
}
