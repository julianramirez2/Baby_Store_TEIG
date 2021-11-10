@extends('layouts.master')

@section("title", "Productos")

@section('content')

@if(auth()->check())

<div class="container container-style-nav">
    <nav class="navbar navbar-style navbar-light bg-light ">
        <form class="d-flex">
            <input name="productName" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                style="margin-left:10px;">
            <button class="btn btn-primary" type="submit">{{__('messages.search')}}</button>
        </form>
        <a class="btn btn-primary" href="{{route('user.productsOrd')}}">{{__('messages.alphOr')}}</a>
    </nav>
</div>


<div class="container container-style">
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($products as $prod)
  <div class="col">
    <div class="card">
      <img src="images/banner.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">{{$prod->getName()}}</h5>
        <p class="card-text">{{$prod->getDesc()}}</p>
        <p class="card-text">{{$prod->getPrice()}}</p>
        <a href="{{ route('cart.add', $prod->id) }}" class="btn btn-dark">{{__('messages.addCart')}}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>


<div class="container mt-3 d-flex justify-content-center">
    <div class="pagination">{{$products->links()}}</div>
</div>

@else
<div class="alert alert-danger" role="alert">
    {{__('messages.logEr')}}
</div>
@endif


@endsection