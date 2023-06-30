<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreatFormRequest extends FormRequest
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
            'namesp' => 'required',
            'giasp' => 'required',
            'giagoc' => 'required',
            'soluong' => 'required',
            'chitietsp' => 'required',
            'loaisp' => 'required',
            'imgsp' => 'required'
        ];
    }
}
