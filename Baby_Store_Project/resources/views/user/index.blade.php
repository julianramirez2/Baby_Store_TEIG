@extends('layouts.master')
@section('title','Login')
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
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/banner2.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
</div>


@endsection