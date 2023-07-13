<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'body' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=> ' il titolo è richiesto',
            'title.max'=> 'il tuo titolo è troppo corto',
            'body.required'=> ' il testo dell articolo è richiesto',
            'body.max'=> 'il tuo articolo è troppo corto',
        ];
    }
}
