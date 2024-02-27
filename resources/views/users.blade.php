<x-app-layout>
    <div class="sm:ml-64 px-8 py-2">
        <div id="links"
            class="w-full py-2 uppercase px-6 my-1 flex flex-nowrap items-start justify-start gap-2 text-cyan-700 text-sm">
            <a wire:navigate href="{{ route('dashboard') }}"
                class="hover:text-gray-800 transition duration-200">Dashboard</a>
            <span>/</span>
            <a wire:navigate href="{{ route('reports') }}" class="hover:text-gray-800 transition duration-200">Reports</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-800 transition duration-200">All Reports</a>
            <span>/</span>
            <a href="{{ route('new') }}" class="hover:text-gray-800 transition duration-200">New Reports</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-800 transition duration-200 cursor-text">User</a>
        </div>
        <div class="rounded-lg my-6 mx-auto max-w-5xl border border-red-50 px-6 py-4">
            <div>
                <div class="bg-white max-w-6xl rounded-md border border-gray-50 py-4 px-4 mb-4 shadow-md">
                    <div class="px-4 py-2 mx-auto">
                        {{-- List Table --}}
                        <div x-data="{ open: false }">
                            <div class="">
                                <div class="flex items-center justify-between flex-nowrap" id="accordion-open-heading-1">
                
                                    <div class="w-1/2">
                                        <h3 class="text-gray-800 text-xl font-light capitalize">
                                            Add New Administrator
                                        </h3>
                                    </div>
                                    <a href="#" class="shrink-0" @click="open= !open">
                                        <div class="cursor-pointer flex justify-end items-end py-2 px-2">
                                            <svg class="w-3 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                
                            {{-- Table --}}
                            <div x-show="open">
                                <div class="py-2 pb-4 my-2">
                                    <form action="/users/store" method="POST" spellcheck="false">
                                        @csrf
                
                                        <div class="px-3 py-2 space-y-6">
                                            <div class="grid grid-cols-2 gap-6 place-items-center w-full">
                                                <div class="space-y-3">
                                                    <x-input-label for="name" :value="__('Name')" class="px-3" />
                                                    <x-text-input id="name" name="name" type="text"
                                                        class="mt-1 block w-full shadow" />
                                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                </div>
                                                <div class="space-y-3">
                                                    <x-input-label for="email" :value="__('Email')" class="px-3" />
                                                    <x-text-input id="email" name="email" type="email"
                                                        class="mt-1 block w-full shadow" />
                                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                </div>
                                            </div>
                
                
                                            <div class="grid grid-cols-3 gap-6 place-items-center w-full">
                                                <div class="space-y-3">
                                                    <x-input-label for="phone" :value="__('Phone')" class="px-3" />
                                                    <x-text-input id="phone" name="phone" type="tel"
                                                        class="mt-1 block w-full shadow" />
                                                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                                </div>
                                                <div class="space-y-3">
                                                    <x-input-label for="role" :value="__('Role')" class="px-3" />
                                                    <x-text-input id="role" name="role" type="text"
                                                        class="mt-1 block w-full shadow" />
                                                    <x-input-error class="mt-2" :messages="$errors->get('role')" />
                                                </div>
                                                <div class="space-y-3">
                                                    <x-input-label for="department" :value="__('Department')" class="px-3" />
                                                    <x-text-input id="department" name="department" type="text"
                                                        class="mt-1 block w-full shadow" />
                                                    <x-input-error class="mt-2" :messages="$errors->get('department')" />
                                                </div>
                                            </div>
                                        </div>
                
                                        <div class="px-4 py-4 mt-4">
                                            <x-primary-button type="submit" wire:click.prevent='createUser'>Create New</x-primary-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="">
                                @if (session('success'))
                                    <span class="bg-green-400 px-4 py-2 font-medium text-lg capitalize">{{ session('sucess') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>            </div>
            {{-- User Modal --}}
            <div>

            </div>
        </div>
        <div class="bg-white max-w-6xl rounded-md border border-gray-50 py-4 px-4 my-4 shadow-md">
            <div class="px-4 py-2 mx-auto">
                <h3 class="text-gray-800 text-2xl font-light capitalize">Quality Assurance Users</h3>

                {{-- List Table --}}
                <div x-data="{ open: true }">
                    <div class="py-2 bg-gree from-re from-gree px-4 bg-bg_gradient my-4">
                        <div class="flex items-center justify-between flex-nowrap px-3" id="accordion-open-heading-1">

                            <div class="w-1/2">
                                <h3 class="text-white capitalize font-normal text-lg">
                                    Total Number Of Users
                                </h3>
                            </div>
                            <a href="#" class="shrink-0" @click="open= !open">
                                <div class="cursor-pointer flex justify-end items-end py-2 px-2">
                                    <svg class="w-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- Table --}}
                    <div x-show="open">
                        <div class="pb-4 my-2">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative mt-1">
                                <div
                                    class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 px-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <div>
                                    <x-search/>
                                </div>
                            </div>
                        </div>
                        <div class="relative overflow-x-auto shadow-md">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 border border-gray-300">
                                <thead class="text-base font-medium text-gray-600 capitalize bg-gray-100">
                                    <tr class="">
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Person Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Year
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Reporting Quarter
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Name Of Center/Unit etc
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Strategic Focus

                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Strategic Objectives No.
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Strategic Initiative
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Commencement Date
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Update/Progress Made
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-base font-medium">
                                    @foreach ($users as $user)
                                        <tr class="bg-gray-100 border-b hover:bg-gray-200">

                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border-r-2 border-b-2 border-gray-300 shadow">
                                                {{ Auth::user()->first_name . ' '. Auth::user()->middle_names .' ' . Auth::user()->last_name }}
                                            </th>
                                            <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                                {{ $user->middle_names   }}
                                            </td>
                                            <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                                {{ $user->last_name }}
                                            </td>
                                            <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                                {{ $user->middle_name }}
                                            </td>
                                            <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                                {{ $user->email }}
                                            </td>
                                            <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                                {{ $user->role }}
                                            </td>
                                            <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                                <div class="flex flex-nowrap space-x-2">
                                                    <x-secondary-button class="bg-[#313c4f] rounded hover:bg-[#2c3648]"
                                                        onclick="location.href='{{ route('profile.edit') }}'">
                                                        <svg class="w-4 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 20 18">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M4.109 17H1v-2a4 4 0 0 1 4-4h.87M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm7.95 2.55a2 2 0 0 1 0 2.829l-6.364 6.364-3.536.707.707-3.536 6.364-6.364a2 2 0 0 1 2.829 0Z" />
                                                        </svg></x-secondary-button>

                                                    <!-- Authentication -->
                                                    <x-secondary-button
                                                        class="bg-[#FF7588] rounded hover:bg-[#FF6D80]"><svg
                                                            class="w-4 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 18 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                                        </svg></x-secondary-link>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Table Ends --}}
            </div>
        </div>
    </div>
</x-app-layout>
