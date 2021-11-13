@extends('layouts.master_admin')

@section("title", "Admin")

@section('content')
<table class="table table-responsive table-striped">
    <thead>
        <tr>
            <th>{{__('messages.ID')}}</th>
            <th>{{__('messages.name')}}</th>
            <th>{{__('messages.description')}}</th>
            <th>{{__('messages.price')}}</th>
            <th>{{__('messages.category')}}</th>
            <th>{{__('messages.stock')}}</th>
            <th>{{__('messages.actions')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $row)

        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->price}} COP</td>
            <td>{{$row->category}}</td>
            <td>{{$row->stock}}</td>
            <td class="d-flex justify-content-start">

                <form method="POST" action="{{route('productsAdmin.destroy', $row->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2"><i class="fa fa-trash fa-lg"></i></button>
                </form>

                <a href="{{route('productsAdmin.edit', $row->id)}}'" type="submit" class="btn btn-primary"><i class="fa fa-edit fa-lg"></i></button>

            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection