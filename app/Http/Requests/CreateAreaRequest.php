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
            'name' => 'required|string|min:1|max:10',
            'position' => 'nullable|string|min:1|max:15',
            'element' => 'nullable|string|min:1|max:3',
            'belief' => 'nullable|string|min:2|max:10',
            'god' => 'nullable|string|min:2|max:10',
            'ruler' => 'nullable|string|min:2|max:10',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "區域名稱 為必填",
            "name.min" => "區域名稱 至少1個字元",
            "name.max" => "區域名稱 至多10個字元",

            "position.min" => "位置 至少1個字元",
            "position.max" => "位置 至多15個字元",

            "element.min" => "元素 至少1個字元",
            "element.max" => "元素 至多3個字元",

            "belief.min" => "信仰 至少2個字元",
            "belief.max" => "信仰 至多10個字元",

            "god.min" => "信奉神明 至少2個字元",
            "god.max" => "信奉神明 至多10個字元",

            "ruler.min" => "統治者 至少2個字元",
            "ruler.max" => "統治者 至多10個字元",

        ];
    }    
}
