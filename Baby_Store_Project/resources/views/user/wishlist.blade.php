@extends('layouts.master')

@section("title", "WishList")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Available products</h1>
            <ul>
                @foreach($data["products"] as $row)
                <li>
                    Id: {{ $row -> id }} -
                    Name: {{ $row -> name }} -
                    Price: {{ $row -> price }} -
                    <a href="{{ route('wishlist.add', $row->id) }}">Add to wishlist</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Products in wishlist</h1>
            <ul>
                @foreach($data["productsInWishlist"] as $key)
                <li>
                    Id: {{ $key -> id }} -
                    Name: {{ $key -> name }} -
                </li>
                @endforeach
            </ul>
            <a href="{{route('wishlist.remove')}}">Remove all products from wishlist</a>
        </div>
    </div>

</div>
@endsection
