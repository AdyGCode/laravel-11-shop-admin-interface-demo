<nav x-data="{ open: false }" class="bg-neutral-800 border-b border-neutral-100">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-between h-16 -ml-8">

            <!-- Logo -->
            <div class="shrink-0 space-x-4 sm:-my-px sm:ms-10 sm:flex">

                <a href="{{ route('home') }}" class="flex items-center">
                    <x-application-logo class="block h-9 w-auto fill-current text-red-500"/>
                </a>

                <!-- Navigation Links (left) -->
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')"
                            class="text-neutral-200 hover:text-neutral-500 transition">
                    {{ __('Home') }}
                </x-nav-link>

                <x-nav-link :href="route('home')" :active="request()->routeIs('admin-dashboard')"
                            class="text-neutral-200 hover:text-neutral-500 transition">
                    {{ __('Link 1') }}
                </x-nav-link>

                <x-nav-link :href="route('home')" :active="request()->routeIs('contact-us')"
                            class="text-neutral-200 hover:text-neutral-500 transition">
                    {{ __('Link 2') }}
                </x-nav-link>

                <x-nav-link :href="route('home')" :active="request()->routeIs('contact-us')"
                            class="text-neutral-200 hover:text-neutral-500 transition">
                    {{ __('Link 3') }}
                </x-nav-link>


            </div>

            <!-- Login/Register Links (right)-->
            @if (Route::has('login'))
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @else
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')"
                                    class="group hover:text-gray-300 transition duration-75">
                            <svg
                                class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-400 transition duration-75"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            {{ __('Login') }}
                        </x-nav-link>

                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')"
                                    class="group hover:text-gray-300 transition duration-75">
                            <svg
                                class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-400 transition duration-75"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            {{ __('Register') }}
                        </x-nav-link>
                    @endauth
                </div>
            @endif

        </div>

    </div>

</nav>
