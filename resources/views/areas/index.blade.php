<html>

<head>
    <title>列出所有區域</title>
</head>

<body>
<h1>列出所有區域</h1>

<table>
    <tr>
        <th>編號</th>
        <th>區域名稱</th>
        <th>位置</th>
        <th>元素</th>
        <th>信仰</th>
        <th>信奉神明</th>
        <th>統治者</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
        
    </tr>
        @for($i=0; $i<count($areas); $i++)
            <tr>
                <td>{{$areas[$i]['id']}}</td>
                <td>{{$areas[$i]['name']}}</td>
                <td>{{$areas[$i]['position']}}</td>
                <td>{{$areas[$i]['element']}}</td>
                <td>{{$areas[$i]['belief']}}</td>
                <td>{{$areas[$i]['god']}}</td>
                <td>{{$areas[$i]['ruler']}}</td>
                <td><a href="{{route('areas.show',['id'=>$areas[$i]['id']]) }}">顯示</a></td>
                <td><a href="{{route('areas.edit',['id'=>$areas[$i]['id']]) }}">修改</a></td>
                <td>刪除</td>
            </tr>

    @endfor
</table>

</body>
</html>
