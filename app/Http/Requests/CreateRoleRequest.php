<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoleRequest extends FormRequest
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
            'name' => 'required|string|max:10',
            'aid' => 'required',
            'stars' => 'required|numeric|min:4|max:5',
            'property' => 'required|string|max:3',
            'gender' => 'required|string|max:1',
            'weapon' => 'required|string|min:1|max:3',
            'constellation' => 'required|string|min:3|max:7',
            'permanent_limited' => 'required|string|max:2',
            'race' => 'required|string|min:2|max:15',
            'birthdate' => 'required',
            'height' => 'required|numeric|min:50|max:250',
            'version' => 'required|numeric|min:1|max:10',
            /*'weight' => 'required|numeric|min:70|max:180|lt:height', // lt = less than, lg = larger than*/           
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "角色名稱 為必填",
            "name.max" => "角色名稱 至多10個字元",

            "aid.required" => "區域編號 為必填",

            "stars.required" => "星數 為必填",
            "stars.numeric" => "星數 必須為數字",
            "stars.min" => "星數 必須是4或5",
            "stars.max" => "星數 必須是4或5",

            "property.required" => "屬性 為必填",
            "property.max" => "屬性 至多3個字元",

            "gender.required" => "性別 為必填",
            "gender.max" => "性別 至多1個字元",

            "weapon.required" => "武器 為必填",
            "weapon.min" => "武器 至少1個字元",
            "weapon.max" => "武器 至多3個字元",

            "constellation.required" => "命之座 為必填",
            "constellation.min" => "命之座 至少3個字元",
            "constellation.max" => "命之座 至多7個字元",

            "permanent_limited.required" => "常駐/限定 為必填",
            "permanent_limited.max" => "只能是 常駐 或 限定",

            "race.required" => "種族 為必填",
            "race.min" => "種族 至少2個字元",
            "race.max" => "種族 至多15個字元",

            "birthdate.required" => "生日 為必填",

            "height.numeric" => "身高 必須為數字",
            "height.min" => "身高 範圍必須介於50~250之間",
            "height.max" => "身高 範圍必須介於50~250之間",

            "version.required" => "版本 為必填",
            "version.numeric" => "版本 必須為數字",
            "version.min" => "版本 最低為1",
            "version.max" => "版本 最高為10",
        ];
    }    
}
