@extends('app')

@section('title', '顯示特定區域')

@section('genshin_theme', '您所選取的區域資料')

@section('genshin_contents')
<h1>顯示單一區域</h1>

編號:{{$area->id}}<br/>
區域名稱:{{$area->name}}<br/>
區域位置:{{$area->position}}<br/>
區域元素:{{$area->element}}<br/>
區域信仰:{{$area->belief}}<br/>
區域信奉神明:{{$area->god}}<br/>
區域統治者:{{$area->ruler}}<br/>

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
        <th>命之座</th>
        <th>常駐/限定</th>
        <th>種族</th>
        <th>生日</th>
        <th>身高</th>
        <th>版本</th>
    </tr>
    @foreach($roles as $role )
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->area->name}}</td>
            <td>{{$role->stars}}</td>
            <td>{{$role->property}}</td>
            <td>{{$role->gender}}</td>
            <td>{{$role->weapon}}</td>
            <td>{{$role->constellation}}</td>
            <td>{{$role->permanent_limited}}</td>
            <td>{{$role->race}}</td>
            <td>{{$role->birthdate}}</td>
            <td>{{$role->height}}</td>
            <td>{{$role->version}}</td>
            <td><a href="{{route('roles.show',['id'=>$role->id]) }}">顯示</a></td>
            <td><a href="{{route('roles.edit',['id'=>$role->id]) }}">修改</a></td>
            <td>刪除</td>
        </tr>

    @endforeach
</table>
@endsection