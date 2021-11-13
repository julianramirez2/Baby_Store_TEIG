@extends('layouts.master_admin')

@section("title", "Edit")

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">{{__('messages.editProd')}} {{$product->id}}</h2>
                            <p class="text-white-50 mb-5">{{__('messages.pleaseR')}}</p>

                            <form method="POST" action="{{route('productsAdmin.update',$product->id)}}">
                                @csrf
                    
                                <div class="form-outline form-white mb-4">
                                    <input name="name" type="text" id="typeEmailX" class="form-control form-control-lg" value="{{$product->name}}" />
                                    <label class="form-label" for="typeEmailX" >{{__('messages.name')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="description" type="text" id="typePasswordX" class="form-control form-control-lg" value="{{$product->description}}"/>
                                    <label class="form-label" for="typePasswordX" " placeholder="{{$product->description}}">{{__('messages.description')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="price" type="number" id="typePasswordX" class="form-control form-control-lg" value="{{$product->price}}" />
                                    <label class="form-label" for="typePasswordX" >{{__('messages.price')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="category" type="text" id="typePasswordX" class="form-control form-control-lg" value="{{$product->category}}"/>
                                    <label class="form-label" for="typePasswordX">{{__('messages.category')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="stock" type="number" id="typePasswordX" class="form-control form-control-lg" value="{{$product->stock}}"/>
                                    <label class="form-label" for="typePasswordX" >{{__('messages.stock')}}</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">{{__('messages.update')}}</button>
                            </form>


                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection