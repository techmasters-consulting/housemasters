<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HouseMasters</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
    <link href='https://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <livewire:styles />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-ram  bg-opacity-20 text-gray-900">
<header class="fixed lg:w-full hidden lg:block bg-green1 bg-opacity-50  py-3 px-6 ">
    <div class="justify-between flex-row flex-wrap flex ">
        <a href="#" class="block flex flex-row">
            <span class="sr-only">House Masters</span>
            <img class="h-6 md:h-8" src="{{ asset('img/logo.png') }}" alt="House Masters" title="House Masters"/>
            <span class="font-medium text-xl font-ram text-green1  tracking-tight">House Masters</span>
        </a>



        @auth



            <div class="justify-center items-center flex flex-row text-xs text-green1 font-semibold space-x-2 ">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                <div>&bull;</div>
                <livewire:comment-notifications />
                <div>&bull;</div>
                <a href="/manage"><img src="{{ Auth::user()->getAvatar() }} " alt="avatar"
                     class="w-10 h-10 rounded-full"/></a>
            </div>

        @else
            <img src="" alt="avatar"
                 class="w-10 h-10 rounded-full">
            <a
                href="{{ route('login') }}"
                class="inline-block justify-center w-1/4 h-11 text-xs bg-green text-green1 font-semibold rounded-xl border border-green hover:border-green1 transition duration-150 ease-in px-6 py-3"
            >
                Login
            </a>
            <a
                href="{{ route('register') }}"
                class="inline-block justify-center w-1/4 h-11 text-xs bg-gray-200 text-green1 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-3 py-3"
            >
                Register
            </a>
        @endauth

    </div>


</header>
<main class="">

    {{ $slot }}
</main>
<livewire:scripts />

</body>
</html>
