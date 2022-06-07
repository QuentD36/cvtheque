<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class MetierRequest extends FormRequest
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
            'libelle' => ['required', 'string', 'min:1', 'max:120'],
            'description' => ['required', 'string', 'min:1', 'max:500'],
//            Controle du slug : Si on est en method POST alors on controle
//            Sinon, on indique que c'est unique, mais on ignore
            'slug' => $this->method() == 'POST' ?
                ['required', 'string', 'min:1', 'max:120', 'unique:metiers,slug'] :
                ['required', 'string', 'min:1', 'max:120', Rule::unique('metiers', 'slug')->ignore($this->metier)],
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }
}
