<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class kindRequest extends FormRequest
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
             'Ten'=> 'required|max:16|min:4',
            'Ten_KhongDau'=>'required|max:16|min:4',
            'ThuTu'=>'required|numeric',
            'AnHien'=>'required|numeric',
            'idTL'=>'required'
        ];
    }
}
