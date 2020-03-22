<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'title' => 'required',
            'icon' => 'required',
        ];
    }
    
    public function data()
    {
        $data = [
            'title' => $this->input('title'),
            'category_icon_id' => $this->input('icon'),
        ];
        
        return $data;
    }
}
