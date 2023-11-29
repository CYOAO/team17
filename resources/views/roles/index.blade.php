<html>
<head>
    <title>列出所有角色</title>
</head>

<body>
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
    @for($i=0; $i<count($roles); $i++)
        <tr>
            <td>{{$roles[$i]['id']}}</td>
            <td>{{$roles[$i]['name']}}</td>
            <td>{{$roles[$i]['aid']}}</td>
            <td>{{$roles[$i]['stars']}}</td>
            <td>{{$roles[$i]['property']}}</td>
            <td>{{$roles[$i]['gender']}}</td>
            <td>{{$roles[$i]['weapon']}}</td>
            <td>{{$roles[$i]['constellation']}}</td>
            <td>{{$roles[$i]['permanent_limited']}}</td>
            <td>{{$roles[$i]['race']}}</td>
            <td>{{$roles[$i]['birthdate']}}</td>
            <td>{{$roles[$i]['height']}}</td>
            <td>{{$roles[$i]['version']}}</td>
            <td><a href="{{route('roles.show',['id'=>$roles[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{route('roles.edit',['id'=>$roles[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>
        </tr>

    @endfor
</table>

</body>
</html>