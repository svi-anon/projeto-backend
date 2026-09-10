<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                Rule::unique('alunos', 'email')->ignore($this->route('aluno')),
            ],
            'curso' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome e obrigatorio.',
            'email.required' => 'O email e obrigatorio.',
            'email.email' => 'Diga um email valido.',
            'email.unique' => 'Esse email ja ta cadastrado.',
            'curso.required' => 'O curso e obrigatorio.',
        ];
    }
}