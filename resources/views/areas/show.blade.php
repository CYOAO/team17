@extends('app')

@section('title', '顯示特定區域')

@section('genshin_theme', '您所選取的區域資料')

@section('genshin_contents')

編號:{{$area->id}}<br/>
區域名稱:{{$area->name}}<br/>
區域位置:{{$area->position}}<br/>
區域元素:{{$area->element}}<br/>
區域信仰:{{$area->belief}}<br/>
區域信奉神明:{{$area->god}}<br/>
區域統治者:{{$area->ruler}}<br/>

@endsection