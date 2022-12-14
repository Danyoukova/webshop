<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hair&Beauty</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('styles/laravel_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">


</head>
<body>
<div>
    <div id="app">
        <!--Nav-->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <a href="/">Hair & <span>Beauty</span></a>
                </a>
                <div class="m-3"><a href="/">home</a></div>

                <div class="m-3"><a href="/">
                        @if(Auth::check())
                            <cart-icon class="justify-content-center" :user="{{ Auth::user() }}"></cart-icon>
                        @else
                            <cart-icon :user="false"></cart-icon>
                    @endif
                </div>

                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <!---->

        {{--<div--}}
        {{--    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
        {{--    @if (Route::has('login'))--}}
        {{--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
        {{--            @auth--}}
        {{--                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
        {{--            @else--}}
        {{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

        {{--                @if (Route::has('register'))--}}
        {{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
        {{--                @endif--}}
        {{--            @endauth--}}
        {{--        </div>--}}
        {{--    @endif--}}

        {{--    <div id="app">--}}

        <router-link to="/"></router-link>
        {{--        @if(Auth::check())--}}
        {{--            <cart-icon class="justify-content-center"  :user="{{ Auth::user() }}" >  </cart-icon>--}}
        {{--        @else--}}
        {{--            <cart-icon :user="false"></cart-icon>--}}
        {{--        @endif--}}

        <router-view></router-view>

        {{--        <router-link to="/cart" >--}}
        {{--                        <i class="fa fa-shopping-cart" aria-hidden="true">Cart_welcome</i>--}}
        {{--                        <span id="checkout_items" class="checkout_items">45</span>--}}
        {{--                    </router-link>--}}
    </div>
</div>
{{--</div>--}}

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
