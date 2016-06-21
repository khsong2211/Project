<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAccountRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'Year'=>'required'
	    //'COA'=>'required',
	    //'Description'=>'required',
	    //'Debit_Credit'=>'required',
	    //'Amount'=>'required'
        ];
    }
}
