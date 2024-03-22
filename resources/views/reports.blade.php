<x-app-layout>
    <div class="px-8 py-2">
        <div id="links"
            class="w-full py-2 uppercase px-6 my-1 flex flex-nowrap items-start justify-start gap-2 text-cyan-700 text-sm">
            @auth
                @if (Auth::user()->role === 'user')
                    <a wire:navigate href="{{ route('dashboard') }}"
                        class="hover:text-gray-800 transition duration-200">Dashboard</a>
                    <span>/</span> 
                @else
                    <a wire:navigate href="{{ route('admin') }}" class="hover:text-gray-800 transition duration-200">UPSA STRATEGIC PLAN-(2022-2031)</a>
                    <span>/</span>
                @endif
                <a wire:navigate href="{{ route('reports') }}" class="hover:text-gray-800 transition duration-200">Reports</a>
                <span>/</span>
            @endauth
        </div>
        <div class="rounded-lg my-6 mx-auto border border-red-50 px-6 py-4">
            <div>
                @livewire('new-reports')
            </div>
        </div>
        <div class="bg-white max-w-6xl rounded-md border border-gray-50 py-4 px-4 my-4 shadow-md">
            <div class="px-4 py-2 mx-auto">
            <h3 class="text-gray-800 text-2xl font-light capitalize"> {{Auth::user()->first_name. " ". Auth::user()->middle_names. " ". Auth::user()->last_name. "'s"}} Reports</h3>
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
                                <x-search placeholder="Search By Department Unit, Title, Role" />
                            </div>

                        </div>
                        <div class="relative overflow-x-auto shadow-md">
                            <table
                                class="w-full text-sm text-left table-auto whitespace-nowrap rtl:text-right text-gray-500 border border-gray-300">
                                <thead class="text-base font-medium text-gray-600 capitalize bg-gray-100">
                                    <tr class="">
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 text-gray-50 border-gray-300 shadow bg-gray-800">
                                            Action
                                        </th>
                                        <!-- <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Facilitator/Responsible Person
                                        </th> -->
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Quater Year
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Reporting Quater
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Center/Faculty/Unit/Intitute/School
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Strategic Focus
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Strategic Objective No
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
                                            Completion Date
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Quater's Update/Progress
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                                            Status
                                        </th>


                                    </tr>
                                </thead>
                                <tbody class="text-base font-medium">
                                    @foreach ($reports as $report)
                                        <tr class="bg-gray-100">
                                            <td class="px-6 py-4 bg-cyan-700">
                                                <a href="#"
                                                    class="font-medium text-gray-50 p-1 hover:underline">Edit</a>
                                            </td>

                                            <!-- <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                                                {{ $report->user->first_name . ' ' . $report->user->middle_names . ' ' . $report->user->last_name }}
                                            </td> -->
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->quater_year }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->quater }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->center }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->strategic_focus }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->strategic_objective }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->strategic_initiative }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->date }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->updated_at->diffForHumans() }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->comment_quater }}
                                            </td>
                                            <td
                                                class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                                                {{ $report->status }}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- Table Ends --}}

                            
                        </div>
                    </div>
                </div>
                {{-- List Table --}}
<div x-data="{ open: true }">
    <div class="py-2 bg-green-600 from-green-700 to-green-500 px-4 my-4">
        <div class="flex items-center justify-between flex-nowrap px-3" id="accordion-open-heading-1">
            <div class="w-1/2">
                <h3 class="text-white capitalize font-normal text-lg">
                    Total Uploaded Reports From Each User
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
        <div class="py-2">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Document Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Uploaded By
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Upload Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Download
                            </th>
                             <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Replace this row with dynamic data from your backend -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Document Name</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">User Name</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Upload Date</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <!-- Download SVG icon -->
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 17H17.01M17.4 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H6.6M12 15V4M12 15L9 12M12 15L15 12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                               
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                 <!-- Delete SVG icon -->
                                 <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4 7H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </td>
                        </tr>
                        <!-- Repeat this row for each uploaded document -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</x-app-layout>
