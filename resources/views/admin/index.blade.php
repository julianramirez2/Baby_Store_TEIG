@extends('layouts.master_admin')

@section("title", "Admin")

@section('content')
<div class="container text-center">
    <img src="images\banner.png" id="bannerBS" class="img-fluid" alt="">
</div>

<div class="container-md">
<div class="card text-center">
  <div class="card-header">
    {{__('messages.welcomeAdmin')}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{__('messages.quoteAdmin')}}</h5>
    <p class="card-text">{{__('messages.genInfAdmin')}}</p>
  </div>
</div>
</div>
@endsection