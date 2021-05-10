<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackendProductRequest extends FormRequest
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
            'category_id' => 'required',
            'unit_id'     => 'required',
            'name'        => 'required|unique:product,name,' . $this->id,
            'image'       => 'required',
            'price'       => 'required',
            'origin'      => 'required',
            'description' => 'required',
            'status'      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'Dữ liệu không được để trống',
            'unit_id.required'     => 'Dữ liệu không được để trống',
            'name.required'        => 'Dữ liệu không được để trống',
            'name.unique'          => 'Dữ liệu đã tồn tại',
            'image.required'       => 'Dữ liệu không được để trống',
            'price.required'       => 'Dữ liệu không được để trống',
            'origin.required'      => 'Dữ liệu không được để trống',
            'description.required' => 'Dữ liệu không được để trống',
            'status.required'      => 'Dữ liệu không được để trống',
        ];
    }
}
