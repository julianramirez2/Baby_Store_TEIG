@extends('layouts.master')

@section("title", "Carrito")

@section('content')

<div class="text-center">
    <img src="images/RentAGame.jpeg" class="rounded" style="width:300px;" alt="...">
    <h1 style="margin-top:50px;">{{__('messages.publi')}} <a href="http://34.123.9.112/public/">RENTAGAME</a></h1>
</div>

<table class="table table-responsive table-striped">
    <thead>
        <tr>
            <th>{{__('messages.ID')}}</th>
            <th>{{__('messages.name')}}</th>
            <th>{{__('messages.description')}}</th>
            <th>{{__('messages.price')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($arrayRet as $arr)

        <tr>
            <td>{{$arr['id']}}</td>
            <td>{{$arr['title']}}</td>
            <td>{{__('messages.devep')}} {{$arr['developer']}}</td>
            <td>{{$arr['price']}}</td>
            <td class="d-flex justify-content-start">

            </td>
        </tr>

        @endforeach
    </tbody>
</table>


@endsection