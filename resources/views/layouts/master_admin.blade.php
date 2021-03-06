<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title','Baby Store')</title>

    <link href="{{asset('css/customStyle.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body class="body">
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand me-2" href="{{route('admin.index')}}">Baby Store - Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        @if(auth()->check())

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.create')}}">{{__('messages.createUser')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('productsAdmin.create')}}">{{__('messages.createProduct')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('productsAdmin.index')}}">{{__('messages.adminProduct')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.userTable')}}">{{__('messages.adminUser')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.products')}}">{{__('messages.store')}}</a>
                        </li>

                    </ul>

                    <span class="navbar-text me-4">
                        {{__('messages.hello')}} <b style="color: #17a2b8;">{{auth()->user()->name}}</b>
                    </span>

                    <a class="btn btn btn-info" type="submit" href="{{route('auth.destroy')}}">{{__('messages.exit')}}</a>
                    
                    <p>.....</p>

                    <a class="btn btn btn-info" type="submit" href="locale/es">ES</a>

                    <p>.....</p>

                    <a class="btn btn btn-info" type="submit" href="locale/en">EN</a>

                    @else

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.login')}}">{{__('messages.login')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.register')}}">{{__('messages.register')}}</a>
                        </li>

                        <p>.....</p>

                        <a class="btn btn btn-info" type="submit" href="{{route('user.apiview')}}">{{__('messages.publi')}}</a>


                    </ul>


                    @endif

                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>

</html>