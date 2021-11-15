@extends('layouts.master')

@section("title", "Carrito")

@section('content')

@foreach($arrayRet as $arr)
    <p>{{$arr['id']}}</p>
    <p>{{$arr['name']}}</p>
    <p>{{$arr['price']}}</p>

@endforeach

@endsection