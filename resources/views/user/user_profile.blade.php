<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="img/shop/image.png" rel='shortcut icon'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a class="btn btn-white text-dark" href="/home">Home</a>
                
                <div class=" navbar-" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
            </div>
        </nav>

        {{-- <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            <link rel="stylesheet" href="../css/dashboard/dashboardchart/styles.css" />
            <title>Dashboard | Profile</title>
        </head>

        <body>
        <div class="d-flex" id="wrapper">
                <!-- Sidebar -->
                <div class="bg-white" id="sidebar-wrapper">
                    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i> {{ Auth::user()->name }}</div>
                    <div class="list-group list-group-flush my-3">
                        <a href="user" class="list-group-item list-group-item-action  bg-transparent second-text  fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="user_profile" class="list-group-item list-group-item-action  fw-bold"><i class="fas fa-user-circle me-2"></i>Profile</a>
                        <a href="asset" class="list-group-item list-group-item-action bg-transparent second-text  fw-bold"><i class="fas fa-money-bill-wave me-2"></i>Asset</a> 
                        <a href="user_transaksi" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-shopping-cart me-2"></i>Transaksi</a>
                        <a class="list-group-item list-group-item-action bg-transparent text-danger fw-bold" href="{{ route('logout') }}" onclick="return confirm('keluar dari akun anda?');
                        document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off me-2"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                            <h2 class="fs-2 m-0">Profile</h2>
                        </div>

                     


                    </nav>
                    <div class="container-fluid px-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-4">
                                    <div class="container d-flex justify-content ">
                                        <td><img src="{{asset('storage/users/' . Auth::user()->image )}}" alt="" srcset="" width="230" height="320"></td>

                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="true" href="#">Profile</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div class="card-body">

                                                <div class="col-30">
                                                    <label class="form-label" name="nama">Nama :</label>
                                                    <td>{{ Auth::user()->name }}</td>
                                                </div>
                                                <div class="col-30">
                                                    <label class="form-label" name="email">Email :</label>
                                                    <td>{{ Auth::user()->email }}</td>
                                                </div>
                                                <div class="col-30">
                                                    <label class="form-label" name="no_hp">No Telp/Hp :</label>
                                                    <td>{{ Auth::user()->no_hp }}</td>
                                                </div>
                                                <div class="col-30 mb-3">
                                                    <label class="form-label" name="alamat">Alamat :</label>
                                                    <td>{{ Auth::user()->alamat }}</td>
                                                </div>
                                                <div class="">
                                                    <a href="user_create_profile" class="btn btn-success">Update</a>
                                                    <a href="verifikasi_akun" class=" btn btn-warning">verifikasi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- /#page-content-wrapper -->
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        var el = document.getElementById("wrapper");
                        var toggleButton = document.getElementById("menu-toggle");

                        toggleButton.onclick = function() {
                            el.classList.toggle("toggled");
                        };
                    </script>
        </body>

</html>