<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAreaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:5',
            'position' => 'nullable|string|min:1|max:15',
            'element ' => 'nullable|string|max:1',
            'belief ' => 'nullable|string||max:2',
            'god' => 'nullable|string|min:2|max:15',
            'ruler' => 'nullable|string|min:2|max:10',            
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "名稱 為必填",
            "name.min" => "名稱 至少需2個字元",
            "name.max" => "名稱 最多為5個字元",
            "position.min" => "位置 至少需1個字元",
            "position.max" => "位置 最多為15個字元",
            "element.max" => "元素 最多為1個字元",
            "belief.max" => "信仰 最多為2個字元",
            "god.min" => "信奉神明 至少需2個字元",
            "god.max" => "信奉神明 最多為15個字元",
            "ruler.min" => "統治者 至少需2個字元",
            "ruler.max" => "統治者 最多為10個字元",
        ];
    }
}
