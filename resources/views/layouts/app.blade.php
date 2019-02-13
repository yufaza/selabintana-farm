<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{ 'Control Panel' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/vendor.min.css">
    @yield('styles')
    
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" target="_blank">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    CV. Selabintana Farm
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4" role='main'>
            <div class="container">
                <div class="row">
                    @if(Auth::check())
                        <div class="col-lg-4">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                @if(Auth::user()->role == 'admin')
                                    <li class="list-group-item">
                                        <a href="{{route('users')}}">Pengguna Aplikasi</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{route('user.create')}}">Tambahkan Pengguna</a>
                                    </li>
                                @endif
                                    <li class="list-group-item">
                                        <a href="{{route('products')}}">Produk</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{route('product.create')}}">Tambahkan Produk Baru</a>
                                    </li>
                                
                                @if(Auth::user()->role == 'pemasaran' || Auth::user()->role == 'admin')
                                <li class="list-group-item">
                                    <a href="{{route('payment.confirm')}}">Konfirmasi Pembayaran</a>
                                </li>
                                @endif
                                @if(Auth::user()->role == 'gudang' || Auth::user()->role == 'admin')
                                <li class="list-group-item">
                                    <a href="{{route('purchase.process')}}">Konfirmasi Pengiriman</a>
                                </li>
                                @endif
                                @if(Auth::user()->role == 'pemasaran' || Auth::user()->role == 'admin')
                                <li class="list-group-item">
                                    <a href="{{route('purchase.shipping')}}">Transaksi Selesai</a>
                                </li>
                                @endif
                                <li class="list-group-item">
                                    <a href="/dashboard" onclick="alert('Fitur Belum Tersedia')">Cetak Laporan</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                    <div class="col-lg-8 mx-auto">
                        @yield('content')
                    </div>
                </div>
        </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>
    @yield('scripts')
</body>
</html>
