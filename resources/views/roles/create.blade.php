@extends('app')

@section('title', '建立角色表單')

@section('genshin_theme', '建立角色的表單')

@section('genshin_contents')
    @include('message.list')
    {!! Form::open(['url' => 'roles/store']) !!}
    @include('roles.form',['submitButtonText'=>"新增角色資料"])
    {!! Form::close() !!}
@endsection