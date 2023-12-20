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
            'name' => 'required|string|min:2|max:10',
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
            "name.min" => "區域名稱 最少2個字",
            "name.max" => "區域名稱 最多10個字",

            "position.min" => "位置 最少1個字",
            "position.max" => "位置 最多15個字",

            "element.min" => "元素 最少1個字",
            "element.max" => "元素 最多3個字",

            "belief.min" => "信仰 最少2個字",
            "belief.max" => "信仰 最多10個字",

            "god.min" => "信奉神明 最少2個字",
            "god.max" => "信奉神明 最多10個字",

            "ruler.min" => "統治者 最少2個字",
            "ruler.max" => "統治者 最多10個字",
        ];
    }    
}
