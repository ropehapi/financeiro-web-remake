<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWalletRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|max:64",
            "currency" => "required|max:4",
            "amount" => "required",
            "type" => "required"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Nome é obrigatório.",
            "name.max" => "Nome deve conter no máximo 64 caracteres.",
            "currency.required" => "Moeda é obrigatório.",
            "currency.max" => "Moeda deve conter no máximo 4 caracteres.",
            "amount.required" => "Quantia é obrigatório.",
            "type.required" => "Tipo é obrigatório."
        ];
    }
}
