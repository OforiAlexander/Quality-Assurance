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
        </div>
        <div class="rounded-lg my-6 mx-auto max-w-5xl border border-red-50 px-6 py-4">
            <div>
                @livewire('new-reports')
            </div>
        </div>
        <div class="bg-white max-w-6xl rounded-md border border-gray-50 py-4 px-4 my-4 shadow-md">
            <div class="px-4 py-2 mx-auto">
                <h3 class="text-gray-800 text-2xl font-light capitalize">Quality Assurance Total Reports</h3>

                {{-- List Table --}}
                <div x-data="{ open: true }">
                    <div class="py-2 bg-gree from-re from-gree px-4 bg-bg_gradient my-4">
                        <div class="flex items-center justify-between flex-nowrap px-3" id="accordion-open-heading-1">

                            <div class="w-1/2">
                                <h3 class="text-white capitalize font-normal text-lg">
                                    Total Reports From Each User
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
                    <div x-cloak x-show="open">
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
                                <x-search placeholder="Search By Department Unit, Title, Role"/>
                            </div>
                        </div>
                        <div class="relative overflow-x-auto shadow-md">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 border border-gray-300">
                                <thead
                                    class="text-base font-medium text-gray-600 capitalize bg-gray-100">
                                    <tr class="">
                                        <th scope="col" class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Facilitator
                                        </th>
                                        <th scope="col" class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Date
                                        </th>
                                        <th scope="col" class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Attendees Number
                                        </th>
                                        <th scope="col" class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Summary
                                        </th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody class="text-base font-medium">
                                    @foreach ($reports as $report)
                                    <tr
                                        class="bg-gray-100 border-b hover:bg-gray-200">
                                        
                                        <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                            {{ Auth::user()->first_name }}
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap border-r-2 border-b-2 border-gray-300 shadow">
                                            {{ $report->title }}
                                        </th>
                                        <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                            {{ $report->date }}
                                        </td>
                                        <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                            {{ $report->attendees_number }}
                                        </td>
                                        <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                            {{ $report->summary }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- Table Ends --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
