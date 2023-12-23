<header  class="fixed lg:w-full hidden lg:block bg-green bg-opacity-50  py-3 px-6 ">
    <div class="justify-between flex-row flex-wrap flex ">
        <a href="#" class="block flex flex-row">
            <span class="sr-only">House Masters</span>
            <img class="h-6 md:h-8" src="{{ asset('img/logo.png') }}" alt="House Masters" title="House Masters"/>
            <span class="font-medium text-xl font-ram text-green1  tracking-tight">House Masters</span>
        </a>



        @auth



            <div class="justify-center items-center flex flex-row text-xs text-green1 font-semibold space-x-2 ">
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

                <img src="{{ Auth::user()->getAvatar() }} " alt="avatar"
                     class="w-10 h-10 rounded-full"/>
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



<div data-toggle="sticky">



<!--Header & Branding region-->

    <div class="header de-5 mt-8-neg py-0 bg-light header-light bg-op-9
            sticky-mt-0 sticky-mt-0 sticky-border-primary border-top-0 border-right-0 border-left-0">
    <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.html) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
    <div class="header-inner container border-light border-op-1 border-right-0 border-top-0 border-left-0 py-0">
        <!--branding/logo -->
        <div class="header-brand">

            <img width="57" height="30" src="assets/img/logo.png" alt=""/>
                <a class="header-brand-text sticky-text-dark" href="/" title="Home">
                    <h1 class="h3 text-dark op-8 font-weight-bold"> House Masters</h1>
                </a>
            <div class="header-divider d-none d-lg-inline-block header-divider-sm"></div>
            <div class="header-slogan d-none d-lg-block">Real Estate & More</div>

        </div>

        <!-- other header content -->
        <div class="header-block d-flex order-12 align-items-center">

            <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="off-canvas" = Off-cavnas Menu - data-toggle="overlay" = Overlay Menu -->
            <a href="#top" class="btn btn-icon btn-white ml-2 order-12 d-lg-none" data-toggle="off-canvas" data-target=".navbar-main"
               data-settings='{"cloneTarget":true, "targetClassExtras": "navbar-offcanvas"}'> <i class="fa fa-bars"></i> </a>
        </div>

        <div class="navbar navbar-expand-md navbar-static-top">
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-main collapse navbar-border-bottom-effect">
                <!--main navigation-->

                    <ul class="nav navbar-nav navbar-dark">
                        <li class="nav-item"></li>

                        <li class="nav-item">
                            <a href="#highlighted" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Home">Home</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="#details" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Details">Details</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="/listings" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Listings">Listings</span> </a>
                        </li>

                        <li class="nav-item">
                            <a href="#gallery" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Gallery">Gallery</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="#news" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="News">News</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" data-toggle="scroll-link" data-dimiss="jpanel-menu" class="nav-link text-capitalize"> <span class="nav-link-inner" data-title="Contact">Contact</span> </a>
                        </li>
                    </ul>







            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>
</div>
</div>
