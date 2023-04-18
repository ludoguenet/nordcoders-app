<?php

declare(strict_types=1);

namespace App\Http\Requests\Dashboard\Tag;

use App\Enums\Tag\TagColourEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

final class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array<int, string|Enum>>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'unique:tags,name',
            ],
            'colour' => [
                'required',
                new Enum(
                    type: TagColourEnum::class,
                ),
            ],
        ];
    }
}
