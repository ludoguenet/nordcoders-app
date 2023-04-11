<?php

declare(strict_types=1);

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

final class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'senderMail' => [
                'required',
                'email',
            ],
            'senderSubject' => [
                'required',
                'string',
                'max:255',
            ],
            'senderMessage' => [
                'required',
                'string',
                'max:1000',
            ],
        ];
    }
}
