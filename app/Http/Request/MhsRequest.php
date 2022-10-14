<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class MhsRequest extends FormRequest{
    
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return[
        'nim' => 'required|regex:/^([0-9]*)$/|min:10',
        'name' => 'required|regex:/^([A-Za-z ]*)$/|min:10',
        'fakultas' => 'required|regex:/^([A-Za-z ]*)$/|min:3'
        ];
    }
}


