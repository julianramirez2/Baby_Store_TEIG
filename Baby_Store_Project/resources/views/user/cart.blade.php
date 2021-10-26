@extends('layouts.master')

@section("title", "Carrito")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Available products</h1>
            <ul>
                @foreach($data["products"] as $row)
                <li>
                    Id: {{ $row -> getID() }} -
                    Name: {{ $row -> getName() }} -
                    Price: {{ $row -> getPrice() }} -
                    <a href="{{ route('cart.add', $row->id) }}">Add to cart</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Products in cart</h1>
            <ul>
                @foreach($data["productsInCart"] as $key)
                <li>
                    Producto: {{ $key -> getName() }} -
                    Precio: {{ $key -> getPrice() }}
                </li>
                @endforeach
            </ul>
            <a href="{{route('cart.remove')}}">Remove all products from cart</a>
            <p>  </p>
            <a href="{{route('cart.pdf')}}">Generate pdf of products in cart</a>
        </div>
    </div>

</div>
@endsection
