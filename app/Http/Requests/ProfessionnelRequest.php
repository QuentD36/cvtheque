<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfessionnelRequest extends FormRequest
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
            'prenom' => ['required', 'string', 'max:25'],
            'nom' => ['required', 'string', 'max:40'],
            'cp' => ['required', 'string', 'between:5,5'],
            'ville' => ['required', 'string', 'max:35'],
            'telephone' => ['required', 'string', 'phone:FR', 'max:14'],
            'email' => $this->method() == 'POST' ?
                ['required', 'email:rfc,dns', 'string', 'max:191', 'unique:professionnels,email'] :
                ['required', 'email:rfc,dns', 'string', 'max:191', Rule::unique('professionnels')->ignore($this->professionnel)],
            'naissance' => ['required', 'date_format:Y-m-d', 'date', 'max:191'],
            'formation' => ['required'],
            'domaine' => ['required'],
            'metier_id' => ['required', 'integer'],
            'comp' => ['required'],
        ];
    }


    public function messages()
    {
        return [
            'metier_id.required' => 'Vous devez choisir un métier pour le professionnel !',
            'cp.between' => "Le champ code postal doit contenir 5 caractères !",
            'cp.required' => "Le champ code postal est obligatoire !",
            'naissance.required' => "Le champ date de naissance est obligatoire !",
            'prenom.required' => "Le champ prénom de naissance est obligatoire !",
            'telephone.between' => "Le champ téléphone doit contenir 14 caractères !",
            'telephone.phone' => "Le champ téléphone est incorrect",
            'comp.required' => "Veuillez choisir au moins une compétence",

        ];
    }
}
