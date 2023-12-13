@extends('app')

@section('title', '建立區域表單')

@section('Genshin_theme', '建立區域的表單')

@section('Genshin_contents')
     {!! Form::open(['url' =>'area/store'])!!}
     @include('areas.form',['submitButtonText'=>"新增區域資料"])
     {!! Form::close() !!}
@endsection