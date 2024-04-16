<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
        'title' => 'required|string|max:255',
        'description' => 'required|max:5000',
        'thumb' => 'required|max:5000',
        'price' => 'required|numeric',
        'series' => 'required|string|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:100',
        'artists' => 'nullable|string',
        'writers' => 'nullable|string'
        ];
    }

    public function messages(): array{
        return [
            
        'title.required' => "Devi inserire un titolo",
        'title.max' => "Il titolo può avere massimo :max caratteri",
        'description.required' => 'Devi inserire una descrizione',

        'max' => 'Il campo :attribute deve avere massimo :max caratteri',
        'required' => ':attribute deve essere compilato',

        'price.required' => 'Devi inserire un prezzo per il fumetto.',
        'price.numeric' => 'Il prezzo deve essere un valore numerico.',

        'sale_date.required' => 'Devi inserire la data di vendita del fumetto.',
        'sale_date.date' => 'Il formato della data di vendita non è valido.',

        'type.required' => 'Devi specificare il tipo di fumetto.',
        ];
    }

   public function attributes(): array{
    return [
        'title' => 'titolo',
        'description' => 'descrizione',
        'thumb' => 'immagine',
        'price' => 'prezzo',
        'series' => 'serie',
        'sale_date' => 'data di pubblicazione',
        'type' => 'tipologia',
        'artists' => 'artisti',
        'writers' => 'scrittori',
    ];
   }
}
