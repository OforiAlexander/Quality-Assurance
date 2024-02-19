<x-app-layout>
    <div class="sm:ml-64 px-8 py-2">
        <div id="links" class="w-full py-2 uppercase px-6 my-1 flex flex-nowrap items-start justify-start gap-2 text-cyan-700 text-sm">
            <a wire:navigate href="{{ route('dashboard') }}" class="hover:text-gray-800 transition duration-200">Quality Assurance</a>
            <span>/</span>
            <a wire:navigate href="{{ route('reports') }}" class="hover:text-gray-800 transition duration-200">Reports</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-800 transition duration-200">All Reports</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-800 transition duration-200">New Reports</a>
        </div>
        <div class="rounded-lg my-6 mx-auto max-w-5xl border border-red-50 px-6 py-4">
            <div class="rounded-lg my-6 mx-auto max-w-5xl border border-red-50 px-6 py-4">
                <div>
                    <div class="bg-white max-w-6xl rounded-md border border-gray-50 py-4 px-4 mb-4 shadow-md">
                        <div class="px-4 py-2 mx-auto relative">
                            {{-- List Table --}}
                            <div x-data="{ open: true }">
                                <div class="">
                                    <div class="flex items-center justify-between flex-nowrap"
                                        id="accordion-open-heading-1">
    
                                        <div class="w-1/2">
                                            <h3 class="text-gray-800 text-xl font-light capitalize">
                                                Create A New Report
                                            </h3>
                                        </div>
                                        <a href="#" class="shrink-0" @click="open= !open">
                                            <div class="cursor-pointer flex justify-end items-end py-2 px-2">
                                                <svg class="w-3 text-gray-800" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
    
                                {{-- Table --}}
                                <div x-show="open">
                                    <div class="py-2 pb-4 my-2">
                                        <form action="/reports/store" method="POST" spellcheck="false">
                                            @csrf
    
                                            <div class="px-3 py-2 space-y-6">
                                                <div class="grid grid-cols-2 gap-6 place-items-center w-full">
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="title" :value="__('Title')" class="px-3" />
                                                        <x-text-input id="title" name="title" type="text"
                                                            class="mt-1 block w-full shadow" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                                                    </div>
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="facilitator" :value="__('Facilitator')" class="px-3" />
                                                        <x-text-input id="facilitator" name="facilitator" type="text"
                                                            class="mt-1 block w-full shadow" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('facilitator')" />
                                                    </div>
                                                    
                                                </div>
    
    
                                                <div class="grid grid-cols-2 gap-6 place-items-center w-full">
                                                    
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="attendees_number" :value="__('Attendees Number')" class="px-3" />
                                                        <x-text-input id="attendees_number" name="attendees_number" type="number"
                                                            class="mt-1 block w-full shadow" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('attendees_number')" />
                                                    </div>
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="summary" :value="__('Summary')" class="px-3" />
                                                        <x-text-input id="summary" name="summary" type="text"
                                                            class="mt-1 block w-full shadow" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('summary')" />
                                                    </div>
                                                </div>
                                                <div class="grid gap-6 place-items-center w-full">
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="date" :value="__('Date Of Workshop')" class="px-3" />
                                                        <x-text-input id="date" name="date" type="date"
                                                            class="mt-1 block w-full shadow" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('date')" />
                                                    </div>
                                                    
                                                </div>
                                            </div>
    
                                            <div class="px-4 py-4 mt-4">
                                                <x-primary-button type="submit">Create
                                                    New</x-primary-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
    
                                <x-flash-transition-success/>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- User Modal --}}
                <div>
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>