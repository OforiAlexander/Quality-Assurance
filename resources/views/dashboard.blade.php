<x-app-layout>
    <div class="sm:ml-64 px-8 py-2">
        <div id="links" class="w-full py-2 px-6 my-1 flex flex-nowrap items-start justify-start gap-2 uppercase text-cyan-700 text-sm">
            <a wire:navigate href="{{ route('dashboard') }}" class="hover:text-gray-800 transition duration-200">Quality Assurance</a>
            <span>/</span>
            <a wire:navigate href="{{ route('dashboard') }}" class="hover:text-gray-800 transition duration-200">Dashboard</a>
         
        </div>
        <div class="rounded-lg my-6 mx-auto max-w-5xl border border-red-50 px-6 py-4">
            <div class="py-3 px-2 grid grid-cols-3 space-x-4"><a href="#">
                    <div
                        class="rounded-sm py-4 px-6 flex items-center justify-start gap-6 hover:scale-105 transition duration-300 bg-gradient-to-r from-cyan-400 to-blue-400">

                        <div class="p-1">
                            <svg class="text-gray-800 w-14" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 18">
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                            </svg>
                        </div>
                        <div id="users" class="text-left-px-4 py-4 text-base text-white uppercase font-medium">
                            <h3 class="text-2xl text-white uppercase tracking-wide">Users</h3>
                            <span class="text-lg font-light text-white capitalize">99</span>
                        </div>


                    </div>
                </a>
                <a wire:navigate href="{{ route('reports') }}">
                    <div
                        class="rounded-sm py-4 px-6 flex items-center justify-start gap-6 hover:scale-105 transition duration-300 bg-gradient-to-r from-red-300 to-red-500">

                        <div class="p-1">
                            <svg class="w-14 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 19 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M2 9.376v.786l8 3.925 8-3.925v-.786M1.994 14.191v.786l8 3.925 8-3.925v-.786M10 1.422 2 5.347l8 3.925 8-3.925-8-3.925Z" />
                            </svg>
                        </div>
                        <div id="users" class="text-left-px-4 py-4 text-base text-white uppercase font-medium">
                            <h3 class="text-2xl text-white uppercase tracking-wide">Reports</h3>
                            <span class="text-lg font-light text-white capitalize">1900</span>
                        </div>

                    </div>
                </a>
                <a href="#">
                    <div
                        class="rounded-sm py-4 px-6 flex items-center justify-start gap-6 hover:scale-105 transition duration-300 bg-gradient-to-r from-green-500 to-green-300">

                        <div class="p-1">
                            <svg class="w-14 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
                                <path d="M6 5H5v1h1V5Z" />
                            </svg>
                        </div>
                        <div id="users" class="text-left-px-4 py-4 text-base text-white uppercase font-medium">
                            <h3 class="text-2xl text-white uppercase tracking-wide">Updates</h3>
                            <span class="text-lg font-light text-white capitalize">20 New Updates</span>
                        
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
