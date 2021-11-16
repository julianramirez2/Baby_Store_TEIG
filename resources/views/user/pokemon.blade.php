@extends('layouts.master')
@section('title','Pokemon')
@section('content')

<div class="container">
    <div class="card" style="width: 18rem; margin:0 auto;">
        <img src="{{$pokemonImg}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$pokemonName}}</h5>
            <p class="card-text">{{$pokemonType}}</p>
        </div>
        <b>{{__('messages.abilities')}}</b> 
        <ul class="list-group list-group-flush">
            @foreach($pokemonAbilities as $pokab)
            <li class="list-group-item">{{$pokab->ability->name}}</li>
            @endforeach
        </ul>
    </div>
</div>

@endsection