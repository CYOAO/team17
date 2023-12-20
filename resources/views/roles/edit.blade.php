@extends('app')

@section('title', '編輯特定角色')

@section('genshin_theme', '編輯中的角色')

@section('genshin_contents')
    @include('message.list')
    {!! Form::model($role, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\RolesController@update', $role->id]]) !!}
    @include('roles.form', ['submitButtonText'=>"更新角色資料"])
    {!! Form::close() !!}
@endsection