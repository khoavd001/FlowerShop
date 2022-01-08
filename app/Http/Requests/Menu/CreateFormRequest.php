<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'BoHoa' => 'required',
            'MaLoai'=>'required'
        ];
    }

    public function messages() : array
    {
        return [
            'BoHoa.required' => 'Thông tin bó hoa không đươc bỏ trống!',

            'MaLoai.required' => 'Mã loại không được để trống!'
        ];
    }
}
