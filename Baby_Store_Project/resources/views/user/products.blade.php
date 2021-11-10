@extends('layouts.master')

@section("title", "Productos")

@section('content')

@if(auth()->check())

<div class="container">
    <nav class="navbar navbar-light bg-light">
        <form class="d-flex">
            <input name="productName" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                style="margin-left:10px;">
            <button class="btn btn-outline-success" type="submit">{{__('messages.search')}}</button>
        </form>
        <a class="btn btn-outline-success" href="{{route('user.productsOrd')}}">{{__('messages.alphOr')}}</a>
    </nav>
</div>
@foreach($products as $row)


<div class="container">
    <div class="card-columns mt-5">
        <div class="card">
            <img src="#" class="card-img-top" alt="..." style="width:20rem; height:150px;">
            <div class="card-body">
                <h5 class="card-title">{{$row->getName()}}</h5>
                <p class="card-text">{{$row->getDesc()}}</p>
                <p class="card-text">{{$row->getPrice()}} COP</p>
                <p> </p>
                <a href="{{ route('cart.add', $row->id) }}" class="btn btn-dark">{{__('messages.addCart')}}</a>
            </div>
        </div>
    </div>
</div>
<!--style="width: 20rem; height:27rem;"-->
@endforeach
<div class="container mt-3 d-flex justify-content-center">
    <div class="pagination">{{$products->links()}}</div>
</div>

@else
<div class="alert alert-danger" role="alert">
    {{__('messages.logEr')}}
</div>
@endif
@endsection