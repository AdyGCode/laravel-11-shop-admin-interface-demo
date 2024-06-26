<aside id="sidebar"
       class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
       aria-label="Sidebar">
    <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-white divide-y space-y-1">
                <ul class="space-y-2 pb-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                       placeholder="Search">
                            </div>
                        </form>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                            <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"
                           class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group @if(route("admin-inbox")) bg-gray-100 @endif">
                            <svg
                                class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}"
                           class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group @if(route("admin-inbox")) bg-gray-100 @endif">
                            <svg
                                class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Products</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}"
                           class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group @if(route("admin-inbox")) bg-gray-100 @endif">
                            <svg
                                class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z"/>
                            </svg>

                            <span class="ml-3 flex-1 whitespace-nowrap">Categories</span>
                        </a>
                    </li>


                </ul>

                <div class="space-y-2 pt-2">

                    <a href="{{ route("home") }}"
                       class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                        <svg
                            class="w-5 h-5 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gem" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                  d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"></path>
                        </svg>
                        <span class="ml-4">Second Section</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</aside>
