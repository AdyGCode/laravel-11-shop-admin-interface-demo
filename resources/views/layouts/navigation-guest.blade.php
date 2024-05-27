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
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>

                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-nav-link>
                    @endauth
                </div>
            @endif

        </div>

    </div>

</nav>
