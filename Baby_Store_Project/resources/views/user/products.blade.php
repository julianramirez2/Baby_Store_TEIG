@extends('layouts.master')

@section("title", "Productos")

@section('content')

@if(auth()->check())
@foreach($products as $row)


<div class="container">
      <div class="card-columns mt-5">
        <div class="card">
            <img src="#" class="card-img-top" alt="..." style="width:20rem; height:150px;">
            <div class="card-body">
                <h5 class="card-title">{{$row->name}}</h5>
                <p class="card-text">{{$row->description}}</p>
                <p class="card-text">{{$row->price}} COP</p>
                <a href="#" class="btn btn-dark">Detalles del producto</a>
                <p>  </p>
                <a href="{{ route('cart.add', $row->id) }}" class="btn btn-dark">Añadir al carrito</a>
            </div>
        </div>
    </div>
</div>
<!--style="width: 20rem; height:27rem;"-->
@endforeach
<a class="btn btn btn-info" href="{{route('user.productsOrd')}}">Ordenar alfabeticamente</a>
@else
<div class="alert alert-danger" role="alert">
  ERROR, NO HAS LOGUEADO TU CUENTA
</div>
@endif
@endsection


