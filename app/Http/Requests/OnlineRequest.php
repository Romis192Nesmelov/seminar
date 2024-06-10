<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class OnlineRequest extends FormRequest
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
        $rules = ['agree' => 'accepted'];
        if (!request('phone') && !request('email')) $rules['phone'] = 'required';
        else if (request('phone')) {
            $rules['phone'] = 'regex:/^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/';
            if (request('email')) $rules['email'] = 'email';
        } else {
            $rules['email'] = 'required|email';
        }

        return $rules;
    }
}
