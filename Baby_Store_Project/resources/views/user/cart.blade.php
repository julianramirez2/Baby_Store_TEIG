@extends('layouts.master')

@section("title", "Carrito")

@section('content')


<div id="cartText" class="text-center">{{__('messages.cart')}}</div>

<div class="container card container-card-style">
    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col">{{__('messages.name')}}</th>
                <th scope="col">{{__('messages.price')}}</th>
            </tr>
        </thead>
        <tbody>

            @foreach($data["productsInCart"] as $product)
            <tr>
                <td>{{$product -> getName()}}</td>
                <td>{{$product -> getPrice()}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
            <a href="{{route('cart.remove')}}" type="button"
                class="btn btn-danger">{{__('messages.deleteProducts')}}</a>
            <a href="{{route('cart.pdf')}}" type="button" class="btn btn-warning">{{__('messages.generatePDF')}}</a>
            <a href="{{route('cart.checkout')}}" type="button" class="btn btn-warning">Checkout</a>
        </div>
    </div>
</div>


@endsection