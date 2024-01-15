<x-app-layout>
    <div class="container gg-green-background max-w-custom mx-auto pt-18 flex flex-col lg:flex-row  justify-between px-8 py-1">

    <header x-data="{ mobileMenuOpen : false }" class=" fixed w-full lg:hidden bg-green bg-opacity-25    py-6 px-6 ">
        <div class="justify-between flex-row flex-wrap flex ">
            <a href="/" class="block flex flex-row">
                <span class="sr-only">Island Homes</span>
                <img class="h-6 md:h-8" src="{{ asset('img/logo.png') }}" alt="Island Homes" title="Island Homes"/>
                <span class="font-medium text-xl font-ram text-green1  tracking-tight">ISLAND HOMES</span>
            </a>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block  w-8 h-8 bg-green1 text-green p-1">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>

        </div>
        <div class="absolute  top-20 left-0  z-20  flex-col  font-semibold w-full
         h-screen bg-green bg-opacity-25  shadow-md rounded-lg  p-6 pt-0 "
             :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"  @click.away="mobileMenuOpen = false"
        >
            <div class="bg-white bg-opacity-5 md:sticky md:top-8 border-2 border-green rounded-xl mt-5" style="
                          border-image-source: linear-gradient(to bottom, rgba(28, 81, 85, 0.22), rgba(53, 176, 186, 0.11));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;
                    "
            >
                @auth

                    <div class="flex items-center flex-col px-4 py-2 pt-6">
                        <div class="">
                            <img src="{{ Auth::user()->getAvatar() }}" alt="avatar"
                                 class="w-10 h-10 rounded-full"/>
                        </div>
                        <div class=" justify-center  flex flex-row text-xs text-green font-semibold space-x-2 ">
                            <a>My Profile</a>
                            <div>&bull;</div>
                            <a>My Homes</a>
                            <div>&bull;</div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                        <div class="justify-center  flex flex-row text-xs text-green font-semibold space-x-2 ">

                            <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:bg-green">
                                <svg class="w-5 h-5 font-bold text-green1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                                <h3 class="font-semibold text-green1  text-base">Back to Lists</h3>
                            </a>


                        </div>
                      
                    </div>

                @else
                    <div class="my-6 text-center">
                        <div class="text-center px-6 py-2 pt-6">
                            <h3 class="font-semibold text-green1  text-base">Your Next Home is Here</h3>

                        </div>
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
                    </div>

                @endauth



            </div>
        </div>

    </header>

    <div class="hidden lg:block lg:w px-2  lg:mr-5">
        <div class="bg-white lg:sticky lg:fixed md:top-10 border-2 border-green1 rounded-xl lg:w-70"
            style=" border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                                border-image-slice: 1;
                                background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                                background-origin: border-box;
                                background-clip: content-box, border-box;
                        "
        >
            <div class="flex items-center flex-col px-4 py-2 ">
                <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="ml-2">All Properties (or back to chosen category with filters)</span>
                </a>
            </div>
           
        </div>
    </div>
    </div>
    <livewire:idea-show
        :idea="$idea"
        :votesCount="$votesCount"
    />

    <livewire:idea-comments :idea="$idea" />

    <x-notification-success />

    <x-modals-container :idea="$idea" />
</x-app-layout>
