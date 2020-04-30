@extends('starter')
@section('start')
    @if(isset($obj->name))
        {{ asset("css/$obj->name.css") }}
    @else
        {{ asset("css/landing.css") }}
    @endif
@endsection
@section('content')
    @if(isset($obj->name))
        @include($obj->name)
    @else
        @include('landing')
    @endif
@endsection
@if(isset($user))
    {{view('requst_result', ['user'=>$user->getRequstData()])}}
@endif
