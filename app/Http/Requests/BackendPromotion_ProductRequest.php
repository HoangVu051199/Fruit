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
            'name'        => 'required',
            'product_id'  => 'required',
            'type_sale'   => 'required',
            'sale'   => 'required',
            'start'       => 'required',
            'finish'      => 'required|after_or_equal:start',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'product_id.required' => 'Dữ liệu không được để trống',
            'type_sale.required' => 'Dữ liệu không được để trống',
            'sale.required' => 'Dữ liệu không được để trống',
            'start.required'      => 'Dữ liệu không được để trống',
            'finish.required'     => 'Dữ liệu không được để trống',
            'finish.after_or_equal:start'     => 'Dữ liệu không hợp lệ',
        ];
    }
}
