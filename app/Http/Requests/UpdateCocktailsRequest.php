<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCocktailsRequest extends FormRequest
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
            // 'name' => ['required', 'string', Rule::unique('cocktails')->ignore($this->cocktail)],
            'name' => ['required', 'string',],
            'ingredienti' => ['string', 'nullable'],
            'base_alcolica' => ['string', 'nullable'],
            'paese_di_origine' => ['string', 'nullable'],
            'is_alcoholic' => ['string', 'max:1'],
            'flavor' => ['string', 'nullable'],
        ];
    }
}
