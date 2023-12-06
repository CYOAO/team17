@extends('app')

@section('title', '顯示特定角色')

@section('genshin_theme', '您所選取的角色資料')

@section('genshin_contents')
角色編號:{{$role->id}}<br/>
角色名稱:{{$role->name}}<br/>
角色區域編號:{{$role->aid}}<br/>
角色星數:{{$role->stars}}<br/>
角色屬性:{{$role->property}}<br/>
角色性別:{{$role->gender}}<br/>
角色武器:{{$role->weapon}}<br/>
角色命之座:{{$role->constellation}}<br/>
常駐/限定:{{$role->permanent_limited}}<br/>
角色種族:{{$role->race}}<br/>
角色生日:{{$role->birthdate}}<br/>
角色身高:{{$role->height}}<br/>
角色版本:{{$role->version}}<br/>
@endsection