@extends('app')

@section('title', 'Genshin網站- 列出所有角色')

@section('Genshin_contents')
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
        <th>星之座</th>
        <th>常駐/限定</th>
        <th>種族</th>
        <th>生日</th>
        <th>身高</th>
        <th>版本</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>    

    @foreach ($roles as $role)
        <tr>
                <td>{{$roles->id }}</td>
                <td>{{$roles->name }}</td>
                <td>{{$role->area->name}}</td>
                <td>{{$roles->stars }}</td>
                <td>{{$roles->property }}</td>
                <td>{{$roles->gender }}</td>
                <td>{{$roles->weapon }}</td>
                <td>{{$roles->constellation }}</td>
                <td>{{$roles->permanent_limited }}</td>
                <td>{{$roles->race }}</td>
                <td>{{$roles->birthdate }}</td>
                <td>{{$roles->height }}</td>
                <td>{{$roles->versio }}</td>
                <td><a href="{{route('roles.show',['id'=>$roles->id]) }}">顯示</a></td>
                <td><a href="{{route('roles.edit',['id'=>$roles->id]) }}">修改</a></td>
                <td>
                <form action="{{ url('/roles/delete', ['id' => $role->id]) }}" method="post">
                <input class="btn btn-default" type="submit" value="刪除" />
                @method('delete')
                @csrf
                </form>
                </td>
        </tr>       
        @endforeach   
</table>     

@endsection
