<div class="flex">
    <li class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        @auth
            @if (Auth::user()->role === 'user')
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link class="font-semibold" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                       {{ __('Dashboard') }}
                   </x-nav-link>
               </div> 
            @else
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link class="font-semibold" :href="route('admin')" :active="request()->routeIs('admin')">
                       {{ __('Dashboard') }}
                   </x-nav-link>
               </div> 
            @endif
        @endauth
    </li>
    <li class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        

        {{-- Second --}}
        <div class="flex items-center">
            <div class="flex items-center ms-3">
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-semibold rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>
                                    Reports
                                </div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        @auth
                            <x-slot name="content">
                                @if (Auth::user()->role === 'admin')
                                    <x-dropdown-link wire:navigate :href="route('reports')" :active="request()->routeIs('reports')">
                                        {{ __('Quality Assurance Report') }}
                                    </x-dropdown-link>
                                    <!-- Total Reports -->
                                    <x-dropdown-link wire:navigate :href="route('admin.reports')" :active="request()->routeIs('admin.reports')">
                                        {{ __('Total Report') }}
                                    </x-dropdown-link>
                                @else
                                    <!-- User Reports -->
                                    <x-dropdown-link wire:navigate :href="route('reports')" :active="request()->routeIs('reports')">
                                        {{ __('Reports') }}
                                    </x-dropdown-link>
                                    @endif
                                    <x-dropdown-link wire:navigate :href="route('new')" :active="request()->routeIs('new')">
                                        {{ __('Make Reports') }}
                                    </x-dropdown-link>
                            </x-slot>
                        @endauth
                    </x-dropdown>
                </div>
            </div>
        </div>
    </li>
    {{-- <li class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <a href="#"
            class="flex items-center p-2 text-lg text-gray-900 rounded-lg font-semibold hover:bg-gray-700 group">
            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Updates</span>
            <span
                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
        </a>
    </li> --}}
    @auth
        @if (Auth::user()->role === 'admin')
            <li class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                {{-- <a wire:navigate href="{{ route('users') }}"
                class="flex items-center p-2 text-lg text-gray-900 rounded-lg font-semibold hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path
                        d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
            </a> --}}
                <x-nav-link class="font-semibold" wire:navigate :href="route('users')" :active="request()->routeIs('users')">
                    {{ __('Users') }}
                </x-nav-link>
            </li>
        @endif
    @endauth
</div>
