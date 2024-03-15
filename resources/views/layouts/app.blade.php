<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/icon/bootstrap-icons.min.css">
    @yield('style')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ 'Perpustakaan Digital' }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @if (Auth::user())
                            @if ((Auth::user() && Auth::user()->role == 'admin') || Auth::user()->role == 'petugas')
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('petugas') }}">home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ url('petugas/buku') }}">Buku</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('petugas/users') }}">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('petugas/kategori') }}">Kategori</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Laporan</a>
                                </li>
                            @else
                                @include('layouts.navigationuser')
                            @endif
                        @else
                            @include('layouts.navigationuser')
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            {{ __('Logout') }}
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>
    @yield('script')
</body>

</html>
