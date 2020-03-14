<?php

declare(strict_types=1);

namespace App\Http\Requests\Forms;

use App\Http\Requests\Request;
use App\Rules\NotUrl;

/**
 * Class ContactRequest
 * @package App\Http\Requests\Forms
 */
class ContactRequest extends Request
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'phone' => ['required', 'string', 'min:3', new NotUrl],
            'name' => ['required', 'string', 'min:3', new NotUrl],
            'email' => ['required', 'email', new NotUrl]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле «Имя» обязательно для заполнения',
            'phone.required' => 'Поле «Телефон» обязательно для заполнения',
            'email.required' => 'Поле «Email» обязательно для заполнения'
        ];
    }
}
