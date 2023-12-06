@extends('app')

@section('title', 'Genshin網站 - 列出所有區域')

@section('genshin_theme', 'Genshin 區域')

@section('genshin_contents')
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
    @foreach($areas as $area)
        <tr>
            <td>{{$area->id}}</td>
            <td>{{$area->name}}</td>
            <td>{{$area->position}}</td>
            <td>{{$area->element}}</td>
            <td>{{$area->belief}}</td>
            <td>{{$area->god}}</td>
            <td>{{$area->ruler}}</td>
            <td><a href="{{route('areas.show',['id'=>$area->id]) }}">顯示</a></td>
            <td><a href="{{route('areas.edit',['id'=>$area->id]) }}">修改</a></td>
            <td>
                <form action="{{ url('/areas/delete', ['id' => $area->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>

    @endforeach
</table>


@endsection