@extends('layouts.master_admin')

@section("title", "Admin")

@section('content')
<table class="table table-responsive table-striped">
    <thead>
        <tr>
            <th>{{__('messages.ID')}}</th>
            <th>{{__('messages.name')}}</th>
            <th>{{__('messages.email')}}</th>
            <th>{{__('messages.address')}}</th>
            <th>{{__('messages.role')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $row)

        <tr>
            <td>{{$row->getId()}}</td>
            <td>{{$row->getName()}}</td>
            <td>{{$row->getEmail()}}</td>
            <td>{{$row->getAddress()}}</td>
            <td>{{$row->getRole()}}</td>
            <td class="d-flex justify-content-start">

                <form method="POST" action="{{route('admin.destroy', $row->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2"><i class="fa fa-trash fa-lg"></i></button>
                </form>

                <a href="{{route('admin.edit', $row->id)}}'" type="submit" class="btn btn-primary"><i class="fa fa-edit fa-lg"></i></button>

            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection