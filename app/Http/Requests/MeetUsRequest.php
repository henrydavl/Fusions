<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeetUsRequest extends FormRequest
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
            'month'     =>'required',
            'date'     =>'required',
            'time'     =>'required',
            'metod'     =>'required',
            'fname'     =>'required',
            'lname'     =>'required',
            'email'     =>'required',
//            'phone'     =>'required',
//            'place'     =>'required',
        ];
    }
}
