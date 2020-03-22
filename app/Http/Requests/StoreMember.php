<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMember extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'relation' => 'required'
        ];
    }
    
    public function data()
    {
        $data = [
            'first_name' => $this->input('first_name'),
            'last_name' => $this->input('last_name'),
            'relation' => $this->input('relation')
        ];
        
        return $data;
    }
}
