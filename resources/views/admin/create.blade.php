@extends('layouts.master_admin')

@section("title", "Admin")

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">{{__('messages.createUser')}}</h2>
                            <p class="text-white-50 mb-5">{{__('messages.pleaseR')}}</p>

                            <form method="POST" action="">
                                @csrf
                                <div class="form-outline form-white mb-4">
                                    <input name="name" type="text" id="typeEmailX"
                                        class="form-control form-control-lg" value="{{old('name')}}" required />
                                    <label class="form-label" for="typeEmailX">{{__('messages.name')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="email" type="text" id="typePasswordX"
                                        class="form-control form-control-lg" value="{{old('email')}}" required/>
                                    <label class="form-label" for="typePasswordX">{{__('messages.email')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="address" type="text" id="typePasswordX"
                                        class="form-control form-control-lg" value="{{old('address')}}" required/>
                                    <label class="form-label" for="typePasswordX">{{__('messages.address')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input name="password" type="password" id="typePasswordX"
                                        class="form-control form-control-lg" value="{{old('password')}}" required/>
                                    <label class="form-label" for="typePasswordX">{{__('messages.password')}}</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <select name="role" multiple class="form-control" id="exampleFormControlSelect2">
                                        <option>{{__('messages.adminRole')}}</option>
                                        <option>{{__('messages.userRole')}}</option>
                                    </select>
                                    <label class="form-label" for="typePasswordX">{{__('messages.role')}}</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">{{__('messages.create')}}</button>
                            </form>

                            @error('message')
                            <div class="alert alert-danger" role="alert">
                            {{__('messages.errorMsg')}}
                            </div>
                            @enderror

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection