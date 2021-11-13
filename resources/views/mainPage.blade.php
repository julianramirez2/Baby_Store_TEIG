@extends('layouts.master')

@section("title", "Pagina principal")

@section('content')
<div class="container text-center">
    <img src="images\banner.png" id="bannerBS" class="img-fluid" alt="">
</div>

<div class="container-md">
<div class="card text-center">
  <div class="card-header">
    {{__('messages.welcome')}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{__('messages.quote')}}</h5>
    <p class="card-text">{{__('messages.genInf')}}</p>
    <a href="{{route('auth.login')}}" class="btn btn-primary">{{__('messages.login')}}</a>
    <a href="{{route('auth.register')}}" class="btn btn-primary">{{__('messages.register')}}</a>
  </div>
</div>
</div>

@endsection