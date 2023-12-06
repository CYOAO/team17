@extends('app')

@section('title', 'Genshin網站 - 列出所有角色')

@section('genshin_contents')
<h1>列出所有角色</h1>
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
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>

    </tr>
    @foreach($roles as $role )
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->aid}}</td>
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