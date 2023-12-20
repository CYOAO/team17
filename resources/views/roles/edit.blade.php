@extends('app')

@section('title', 'Genshin網站- 編輯特定角色')

@section('Genshin_theme', '編輯中的角色')

@section('Genshin_contents')
     @include('message.list')
     {!! Form::model($role,['method'=>'PATCH','action'=>['\App\Http\Controllers\RolesController@update',$role->id]]) !!}
     @include('roles.form',['submitButtonText'=>"更新角色資料"])
     {!! Form::close() !!}
@endsection