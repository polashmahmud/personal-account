<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BazarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title'    => ['required'],
            'amount'   => ['required'],
            'increase' => ['required', 'numeric'],
            'type'     => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
