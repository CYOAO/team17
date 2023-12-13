@extends('app')

@section('title', 'Genshin網站- 編輯特定區域')

@section('Genshin_theme', '編輯中的區域')

@section('Genshin_contents')
     {!! Form::model($area,['method'=>'PATCH','action'=>['\App\Http\Controllers\AreasController@update',$area->id]]) !!}
     @include('areas.form',['submitButtonText'=>"更新區域資料"])
     {!! Form::close() !!}
@endsection