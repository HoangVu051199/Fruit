<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackendPromotion_ProductRequest extends FormRequest
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
            'product_id' => 'required',
            'start'      => 'required',
            'finish'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'Dữ liệu không được để trống',
            'start.required'      => 'Dữ liệu không được để trống',
            'finish.required'     => 'Dữ liệu không được để trống',
        ];
    }
}
