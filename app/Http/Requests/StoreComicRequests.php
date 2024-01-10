<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequests extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'title' => 'required|min:5|max:255',
            'image' => 'url',
            'price' => 'max:50',
            'sale_date' => 'max:30',
            'series' => 'max:30',
            'type' => 'max:20',
        
        ];
    }

    public function messages(){
        return [
             'title.required' => 'Il campo titolo è obbligatorio',
             'title.min' => 'Il campo deve avere almeno :min caratteri',
             'title.max' => 'Il campo deve avere almeno :max caratteri'
        ];
    }
}
