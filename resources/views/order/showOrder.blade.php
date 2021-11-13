@extends('layouts.master')
@section('title','Login')
@section('content')

<div class="container card container-card-style">
    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th scope="col">{{__('messages.order')}}</th>
                <th scope="col">{{__('messages.total')}}</th>
                <th scope="col">{{__('messages.date')}}</th>
            </tr>
        </thead>
        <tbody>

            @foreach($showOrder as $ord)
            <tr>
                <td>{{$ord -> getId()}}</td>
                <td>{{$ord -> getTotal()}}</td>
                <td>{{$ord -> getDate()}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <div class="btn-group text-center" role="group" aria-label="Basic mixed styles example">
            <a href="{{route('order.pdf')}}" type="button"
                class="btn btn-warning">{{__('messages.generatePDF')}}</a>
        </div>
    </div>
</div>

@endsection