<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
          'title' => 'required|min:3|max:100',
          'thumb' => 'required',
          'price' => 'required|max:10',
          'series' => 'required|min:3|max:50',
          'sale_date' => 'required',
          'type' => 'required|min:3|max:50',
          'artists' => 'required',
          'writers' => 'required'
        ];
    }

    public function messages(){
      return[
        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Il titolo deve essere almeno di :min caratteri',
        'title.max' => 'Il titolo deve essere massimo di :max caratteri',
        'thumb.required' => 'La copertina è obbligatoria',
        'price.required' => 'Il prezzo è obbligatorio',
        'price.max' => 'Il prezzo deve essere massimo di :max caratteri',
        'series.required' => 'Il campo serie è obbligatorio',
        'series.min' => 'Il campo serie deve essere almeno di :min caratteri',
        'series.max' => 'Il campo serie deve essere massimo di :max caratteri',
        'sale_date.required' => 'La data di uscita è obbligatoria',
        'type.required' => 'Il tipo è obbligatorio',
        'type.min' => 'Il tipo deve essere almeno di :min caratteri',
        'type.max' => 'Il tipo deve essere massimo di :max caratteri',
        'artists.required' => 'Il campo artisti è obbligatorio',
        'writers.required' => 'Il campo scrittori è obbligatorio',
      ];
    }
}
