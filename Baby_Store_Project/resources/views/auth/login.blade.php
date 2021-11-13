@extends('layouts.master')

@section("title", "Ingreso")

@section('content')


<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Ingreso</h2>
                            <p class="text-white-50 mb-5">Por favor ingresa tus credenciales</p>

                            <form method="POST" action="">
                                @csrf
                                <div class="form-outline form-white mb-4">
                                    <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                
                                <div class="form-outline form-white mb-4">
                                    <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
                            </form>

                            @error('message')
                            <div class="alert alert-danger" role="alert">
                                Error al ingresar los datos
                            </div>
                            @enderror
                            
                        </div>

                        <div>
                            <p class="mb-0">No tienes una cuenta? <a href="{{route('auth.register')}}"
                                    class="text-white-50 fw-bold">registrarse</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection