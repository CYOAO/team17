@extends('app')

@section('title', '建立區域表單')

@section('genshin_theme', '建立區域的表單')

@section('genshin_contents')
    @include('message.list')
    {!! Form::open(['url' => 'areas/store']) !!}
    @include('areas.form', ['submitButtonText'=>'新增區域資料'])
    {!! Form::close() !!}
@endsection