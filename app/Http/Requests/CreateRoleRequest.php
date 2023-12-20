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
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:1|max:10',
            'aid' => 'required',
            'stars' => 'required|numeric|min:4|max:5',
            'property' => 'required|string|min:1|max:3',
            'gender' => 'required|string|max:1',
            'weapon' => 'required|string|min:1|max:3',
            'constellation' => 'required|string|min:3|max:5',
            'permanent_limited' => 'required|string|max:2',
            'race' => 'required|string|min:2|max:15',
            'birthdate' => 'required',
            'height' => 'nullable|numeric|min:50|max:250',
            'version' => 'required|numeric|min:1|max:5',
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "角色名稱 為必填",
            "name.min" => "角色名稱 至少需1個字元",
            "name.max" => "角色名稱 最多為10個字元",
            "aid.required" => "區域編號 為必填",
            "stars.required" => "星數 為必填",
            "stars.numeric" => "星數 必須為數字",
            "stars.min" => "星數 範圍必須介於4~5之間",
            "stars.max" => "星數 範圍必須介於4~5之間",
            "property.required" => "屬性 為必填",
            "property.min" => "屬性 至少需要1個字元",
            "property.max" => "屬性 最多為3個字元",
            "gender.required" => "性別 為必填",
            "gender.max" => "性別 最多為1個字元",
            "weapon.required" => "武器 為必填",
            "weapon.min" => "武器 至少需1個字元",
            "weapon.max" => "武器 最多為3個字元",
            "constellation.required" => "命之座 為必填",
            "constellation.min" => "命之座 至少需3個字元",
            "constellation.max" => "命之座 最多為5個字元",
            "permanent_limited.required" => "常駐/限定 為必填",
            "permanent_limited.max" => "常駐/限定 最多為2個字元",
            "race.required" => "種族 為必填",
            "race.min" => "種族 至少需2個字元",
            "race.max" => "種族 最多為15個字元",
            "birthdate.required" => "生日 為必填",
            "height.numeric" => "身高 必須為數字",
            "height.min" => "身高 範圍必須介於50~250之間",
            "height.max" => "身高 範圍必須介於50~250之間",
            "version.numeric" => "版本 必須為數字",
            "version.min" => "版本 範圍必須介於1~5之間",
            "version.max" => "版本 範圍必須介於1~5之間",
        ];
    }
}
