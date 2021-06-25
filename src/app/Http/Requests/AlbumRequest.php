<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'id' => 'present',
            'name' => 'required_without:id|filled',
            'year' => 'required_without:id|filled',
            'id_artist' => 'required_without:id|integer'
        ];
    }
    public function messages()
    {
        return [
            'id_artist.integer' => 'An artist is required',
            'id_artist.required' => 'An artist is required',
        ];
    }
}
