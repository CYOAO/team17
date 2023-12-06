
@extends('app')

@section('title','顯示特定區域')

@section('Genshin_theme', '您所選取的區域資料')

@section('Genshin_contents')
<h1>顯示單一區域</h1>
編號:{{$area->id }}<br/>
區域名稱:{{$area->name }}<br/>
位置:{{$area->position }}<br/>
元素:{{$area->element }}<br/>
信仰:{{$area->belief }}<br/>
信奉神明:{{$area->god }}<br/>
統治者:{{$area->ruler }}<br/>

<h1>{{$area->name}}的所有角色</h1>
<table>
    <tr>
        <th>編號</th>
        <th>角色名稱</th>
        <th>區域編號</th>
        <th>星數</th>
        <th>屬性</th>
        <th>性別</th>
        <th>武器</th>
        <th>星之座</th>
        <th>常駐/限定</th>
        <th>種族</th>
        <th>生日</th>
        <th>身高</th>
        <th>版本</th>
        
    </tr>    

    @foreach ($roles as $role)
        <tr>
                <td>{{$role->id }}</td>
                <td>{{$role->name }}</td>
                <td>{{$role->aid  }}</td>
                <td>{{$role->stars }}</td>
                <td>{{$role->property }}</td>
                <td>{{$role->gender }}</td>
                <td>{{$role->weapon }}</td>
                <td>{{$role->constellation }}</td>
                <td>{{$role->permanent_limited }}</td>
                <td>{{$role->race }}</td>
                <td>{{$role->birthdate }}</td>
                <td>{{$role->height }}</td>
                <td>{{$role->versio }}</td>
               
        </tr>       
        @endforeach 
</table>  
@endsection