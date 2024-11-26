<?php

namespace App\Http\Requests\Admin\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:'.User::class.',email,'.$this->user->id,
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Необходимо ввести имя пользователя',
            'name.string' => 'Неверный тип данных',
            'email.required' => 'Необходимо указать адрес почтового ящика',
            'email.email' => 'Ваша почта должна соответствовать формату mail@some.domain',
            'email.unique' => 'Такой адрес почты уже используется',
            'email.string' => 'Неверный тип данных',
        ];
    }
}
