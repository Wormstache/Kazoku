<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpense extends FormRequest
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
            'amount' => 'required',
            'category' => 'required',
            'member' => 'required',
            'date' => 'required'
        ];
    }
    
    public function data()
    {
        $data = [
            'amount' => $this->input('amount'),
            'category_id' => $this->input('category'),
            'member_id' => $this->input('member'),
            'date' => $this->input('date'),
            'description' => $this->input('description')
        ];
        
        return $data;
    }
}
