<?php

declare(strict_types=1);

namespace App\Http\Requests\Dashboard\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;

final class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array<int, Exists|string>>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:150',
            ],
            'content' => [
                'required',
                'string',
                'max:9999999999',
            ],
            'user_id' => [
                'required',
                'exists:users,id',
            ],
            'tag_ids' => [
                'array',
                Rule::exists('tags', 'id'),
            ],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'user_id' => auth()->id(),
            'tag_ids' => explode(',', strval($this->selected_tags)),
        ]);
    }
}
