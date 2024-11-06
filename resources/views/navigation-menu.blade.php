<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-10 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Left-aligned Logo -->
            <div class="flex items-center">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('homepage') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
            </div>

            <!-- Centered Navigation Links -->
            <div class="hidden space-x-8 sm:flex justify-center">
                <x-nav-link href="{{ route('homepage') }}" :active="request()->routeIs('homepage')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('my-car') }}" :active="request()->routeIs('my-car')">
                    {{ __('My Car') }}
                </x-nav-link>
                <x-nav-link href="{{ route('book-now') }}" :active="request()->routeIs('book-now')">
                    {{ __('Book Now') }}
                </x-nav-link>
                <x-nav-link href="{{ route('booking') }}" :active="request()->routeIs('booking')">
                    {{ __('Booking') }}
                </x-nav-link>
                <x-nav-link href="{{ route('vehicle-update') }}" :active="request()->routeIs('vehicle-update')">
                    {{ __('Vehicle Update') }}
                </x-nav-link>
                <x-nav-link href="{{ route('repair-history') }}" :active="request()->routeIs('repair-history')">
                    {{ __('Repair History') }}
                </x-nav-link>
                <x-nav-link href="{{ route('homepage') }}#services" :active="request()->routeIs('repair-history')">
                    {{ __('Services') }}
                </x-nav-link>
            </div>

            <!-- Right-aligned Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->first_name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->first_name }}
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management and Authentication Links -->
                            <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>
            
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                    {{ __('API Tokens') }}
                                </x-responsive-nav-link>
                            @endif
            
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
            
                                <x-responsive-nav-link href="{{ route('logout') }}"
                                               @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                            
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger for Mobile View -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('homepage') }}" :active="request()->routeIs('homepage')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>


        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('my-car') }}" :active="request()->routeIs('my-car')">
                {{ __('My Car') }}
            </x-responsive-nav-link>
        </div>
            


    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link href="{{ route('book-now') }}" :active="request()->routeIs('book-now')">
            {{ __('Book Now') }}
        </x-responsive-nav-link>
    </div>

    
    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link href="{{ route('booking') }}" :active="request()->routeIs('booking')">
            {{ __('My Booking') }}
        </x-responsive-nav-link>
    </div>


    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link href="{{ route('vehicle-update') }}" :active="request()->routeIs('vehicle-update')">
            {{ __('Vehicle Update') }}
        </x-responsive-nav-link>
    </div>

    
    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link href="{{ route('repair-history') }}" :active="request()->routeIs('repair-history')">
            {{ __('Repair History') }}
        </x-responsive-nav-link>
    </div>


    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-responsive-nav-link>
    </div>


    <div>
        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
    </div>

    <div class="mt-3 space-y-1">
        <!-- Account Management -->
        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
            {{ __('Profile') }}
        </x-responsive-nav-link>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                {{ __('API Tokens') }}
            </x-responsive-nav-link>
        @endif

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-responsive-nav-link href="{{ route('logout') }}"
                           @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>


</div>


</nav>
