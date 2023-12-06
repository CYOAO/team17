@extends('app')

@section('title', '顯示特定區域')

@section('genshin_theme', '您所選取的區域資料')

@section('genshin_contents')
編號:{{$area->id}}<br/>
區域名稱:{{$area->name}}<br/>
位置:{{$area->position}}<br/>
元素:{{$area->element}}<br/>
信仰:{{$area->belief}}<br/>
信奉神明:{{$area->god}}<br/>
統治者:{{$area->ruler}}<br/>
@endsection