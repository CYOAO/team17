@extends('app')

@section('title', 'Genshin網站 - 列出所有角色')

@section('genshin_theme', 'Genshin 角色')

@section('genshin_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('roles.create') }} ">新增角色</a>
    @endcan
    <a href="{{ route('roles.index') }} ">所有角色</a>
    <a href="{{ route('roles.fourstars') }} ">四星角色</a>
    <a href="{{ route('roles.fivestars') }} ">五星角色</a>
    <form action="{{ url('roles/gender') }}" method='GET'>
        {!! Form::label('gen', '選取性別：') !!}
        {!! Form::select('gen', $genders, $selectedGender, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>    
</div>
<table>
    <tr>
        <th>編號</th>
        <th>角色名稱</th>
        <th>所在區域</th>
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
        @can('admin')
        <th>操作2</th>
        <th>操作3</th>
        @elsecan('manager')
        <th>操作2</th>
        @endcan

    </tr>
    @foreach ($roles as $role)
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
        @can('admin')
        <td><a href="{{route('roles.edit',['id'=>$role->id]) }}">修改</a></td>
        <td>
            <form action="{{ url('/roles/delete', ['id' => $role->id]) }}" method="post">
                <input class="btn btn-default" type="submit" value="刪除" />
                @method('delete')
                @csrf
            </form>
        </td>
        @elsecan('manager')
        <td><a href="{{ route('players.edit', ['id'=>$player->id]) }}">修改</a></td>
        @endcan
    </tr>

    @endforeach
</table>
{{ $roles->withQueryString()->links() }}
@endsection