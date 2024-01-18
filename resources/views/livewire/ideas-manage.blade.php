
<div class="">

    <header x-data="{ mobileMenuOpen : false }" class=" fixed w-full lg:hidden bg-green bg-opacity-25    py-6 px-6 ">
        <div class="justify-between flex-row flex-wrap flex ">
            <a href="/" class="block flex flex-row">
                <span class="sr-only">House Master</span>
                <img class="h-6 md:h-8" src="{{ asset('img/logo.png') }}" alt="HouseMaster " title="HouseMaster"/>
                <span class="font-medium text-xl font-ram text-green1  tracking-tight">HouseMaster</span>
            </a>

            <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-block  w-8 h-8 bg-green1 text-green p-1">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>

        </div>
        <div class="absolute  top-20 left-0  z-20  flex-col  font-semibold w-full
         h-screen bg-green bg-opacity-25  shadow-md rounded-lg  p-6 pt-0 "
             :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"  @click.away="mobileMenuOpen = false">
            <div class="bg-white bg-opacity-5 md:sticky md:top-8 border-2 border-green rounded-xl mt-5" style="
                          border-image-source: linear-gradient(to bottom, rgba(28, 81, 85, 0.22), rgba(53, 176, 186, 0.11));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;">
             
                <div class="hidden lg:block  px-2  lg:mr-5">
                    <div class="bg-white lg:sticky lg:fixed md:top-10 border-2 border-blue rounded-xl lg:w-70"  style=" border-image-source: linear-gradient(to bottom, rgba(28, 81, 85, 0.22), rgba(53, 176, 186, 0.11));
                                    border-image-slice: 1;
                                    background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                                    background-origin: border-box;
                                    background-clip: content-box, border-box;">
                    

                            <div class="text-center px-6 py-2 pt-6">
                                <h3 class="font-semibold text-base">Add a Property</h3>
                                <p class="text-xs mt-4">
                                    @auth
                                    You have a property you want to put on the market! Go Ahead Tell Us Using the form Below.
                                    @else
                                        Please login to create an idea.
                                    @endauth
                                </p>
                            </div>
                        @auth
                            <livewire:create-idea />
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
                




            </div>
        </div>

    </header>


    <!-- end filters -->
    <div class="container max-w-custom mx-auto pt-18 flex flex-col lg:flex-row  justify-between px-8 py-1">
    <div class="hidden lg:block  px-2  lg:mr-5">
                    <div class="bg-white lg:sticky lg:fixed md:top-10 border-2 border-blue rounded-xl lg:w-70"  style=" border-image-source: linear-gradient(to bottom, rgba(28, 81, 85, 0.22), rgba(53, 176, 186, 0.11));
                                    border-image-slice: 1;
                                    background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                                    background-origin: border-box;
                                    background-clip: content-box, border-box;">
                    

                            <div class="text-center px-6 py-2 pt-6">
                                <h3 class="font-semibold text-base">Add a Property</h3>
                                <p class="text-xs mt-4">
                                   
                                    You have a property you want to put on the market! Go Ahead Tell Us Using the form Below.
                                    
                                       
                                    
                                </p>
                            </div>

                            <livewire:create-idea />
</div>
</div>
        <div class="w-full ideas-container  ">

            @forelse ($ideas as $idea)
                <livewire:idea-index
                    :key="$idea->id"
                    :idea="$idea"
                    :votesCount="$idea->votes_count"
                />
            @empty
                <div class="mx-auto  mt-12">
                    <img src="{{ asset('img/no-ideas.svg') }}" alt="No Ideas" class="mx-auto" style="mix-blend-mode: luminosity">
                    <div class="text-gray-400 text-center font-bold mt-6"> No properties were found ... </div>
                </div>
            @endforelse

            <div class="my-8">
                {{-- {{ $ideas->links() }} --}}
                {{ $ideas->appends(request()->query())->links() }}
            </div>
        </div> <!-- end ideas-container -->
    </div>
</div>

