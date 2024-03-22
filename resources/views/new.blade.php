<x-app-layout>
    <div class="px-8 py-2">
        @auth
        <div id="links" class="w-full py-2 uppercase px-6 my-1 flex flex-nowrap items-start justify-start gap-2 text-cyan-700 text-sm">
            @if (Auth::user()->role === 'user')
            <a wire:navigate href="{{ route('dashboard') }}" class="hover:text-gray-800 transition duration-200">Dashboard</a>
            <span>/</span>
            @else
            <a wire:navigate href="{{ route('admin') }}" class="hover:text-gray-800 transition duration-200">UPSA STRATEGIC PLAN-(2022-2031)</a>
            <span>/</span>
            @endif
            <a wire:navigate href="{{ route('reports') }}" class="hover:text-gray-800 transition duration-200">Reports</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-800 transition duration-200">All Reports</a>
            <span>/</span>
            <a href="#" class="hover:text-gray-800 transition duration-200">New Reports</a>
        </div>
        @endauth
        <div class="rounded-lg my-6 mx-auto border border-red-50 px-6 py-4">
            <div class="rounded-lg my-6 mx-auto border border-red-50 px-6 py-4">
                <div>
                    <div class="bg-white rounded-md border border-gray-50 py-4 px-4 mb-4 shadow-md">
                        <div class="px-4 py-2 mx-auto relative">
                            {{-- List Table --}}
                            <div x-data="{ open: true }">
                                <div class="">
                                    <div class="flex items-center justify-between flex-nowrap" id="accordion-open-heading-1">

                                        <div class="w-1/2">
                                            <h3 class="text-gray-800 text-xl font-light capitalize">
                                                Create A New Report
                                            </h3>
                                        </div>
                                        <a href="#" class="shrink-0" @click="open= !open">
                                            <div class="cursor-pointer flex justify-end items-end py-2 px-2">
                                                <svg class="w-3 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
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
                                                        <x-input-label for="title" :value="__('Name Of Person Responsible')" class="px-3" />
                                                        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full shadow cursor-not-allowed bg-gray-200" :disabled="true" value="{{ Auth::user()->first_name . ' ' . Auth::user()->middle_names . ' ' . Auth::user()->last_name }}" />
                                                    </div>
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="center" :value="__('Name Of Center/Unit')" class="px-3" />
                                                        <x-text-input id="center" name="center" type="text" value="{{ Auth::user()->title }}" class="mt-1 block w-full shadow cursor-not-allowed bg-gray-200" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('center')" />
                                                    </div>

                                                </div>


                                                <div class="grid grid-cols-2 gap-6 place-items-center w-full">

                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="quater" :value="__('Reporting Quater')" class="px-3" />
                                                        <x-text-select class="mt-1 block w-full shadow" id="quater" name="quater">
                                                            <option value="Select A Quater" selected disabled>Select a
                                                                quater</option>
                                                            <option value="Quater 1">Quater 1</option>
                                                            <option value="Quater 2">Quater 2</option>
                                                            <option value="Quater 3">Quater 3</option>
                                                            <option value="Quater 4">Quater 4</option>
                                                        </x-text-select>
                                                        <x-input-error class="mt-2" :messages="$errors->get('quater')" />
                                                    </div>
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="quater_year" :value="__('Reporting Quater Year ')" class="px-3" />
                                                        <x-text-select class="mt-1 block w-full shadow" id="quater_year" name="quater_year">
                                                            <option value="Select A Quater" selected disabled>Select a
                                                                quater</option>
                                                            @foreach ($yearsRange as $year)
                                                            <option value="{{ $year }}">{{ $year }}
                                                            </option>
                                                            @endforeach
                                                        </x-text-select>
                                                        <x-input-error class="mt-2" :messages="$errors->get('quater_year')" />
                                                    </div>
                                                </div>
                                                <div class="grid gap-6 place-items-center w-full">
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="strategic_focus" :value="__('Strategic Focus')" class="px-3" />
                                                        <x-text-select class="mt-1 block w-full shadow" id="strategic_focus" name="strategic_focus">
                                                            <option value="Select A Strategic Focus" selected disabled>
                                                                Select a
                                                                strategic focus</option>
                                                            <option value="PEOPLE">PEOPLE</option>
                                                            <option value="PROCESSES">PROCESSES</option>
                                                            <option value="PLANET">PLANET</option>
                                                            <option value="RELEVANCE">RELEVANCE</option>
                                                            <option value="IMPACT">IMPACT</option>
                                                            <option value="SUSTAINABILITY">SUSTAINABILITY</option>
                                                            <option value="CONTINUOUS_IMPROVEMENT">CONTINUOUS IMPROVEMENT</option>
                                                        </x-text-select>
                                                        <x-input-error class="mt-2" :messages="$errors->get('strategic_focus')" />
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-6 place-items-center w-full">

                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="strategic_objectives" :value="__('Strategic Objectives')" class="px-3" />
                                                            <x-text-select class="mt-1 block w-full shadow" id="strategic_objective" name="strategic_objective">
                                                                <option value="Strategic Objectives" selected disabled>
                                                                    Strategic Objectives</option>
                                                                <option value="Strategic Objectives">OPTION</option>
                                                            </x-text-select>
                                                            <x-input-error class="mt-2" :messages="$errors->get('strategic_objective')" />
                                                        </div>
                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="strategic_initiative" :value="__('Strategic Initiative')" class="px-3" />
                                                            <x-text-select class="mt-1 block w-full shadow" id="strategic_initiative" name="strategic_initiative">
                                                                <option value="Strategic Initiative" selected disabled>
                                                                    Strategic Initiative</option>
                                                                <option value="Strategic Initiative">OPTION</option>
                                                            </x-text-select>
                                                            <x-input-error class="mt-2" :messages="$errors->get('strategic_initiative')" />
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-2 gap-6 place-items-center w-full">

                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="date" :value="__('Commencement Date')" class="px-3" />
                                                            <x-text-input id="date" name="date" type="date" class="mt-1 block w-full shadow" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('date')" />
                                                        </div>
                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="status" :value="__('Status')" class="px-3" />
                                                            <x-text-select class="mt-1 block w-full shadow" id="status" name="status">
                                                                <option value="Select Status" selected disabled>Select
                                                                    Status</option>
                                                                <option value="Completed">Completed</option>
                                                                <option value="In Progress">In Progress</option>
                                                                <option value="Not Initiated">Not Initiated</option>
                                                            </x-text-select>
                                                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                                                        </div>
                                                    </div>
                                                    <div class="grid gap-6 place-items-center w-full">

                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="comment_quater" :value="__('Quater Update/Progress')" class="px-3" />
                                                            <textarea id="comment_quater" name="comment_quater" class='mt-1 resize-none block w-full border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm'></textarea>
                                                            <x-input-error class="mt-2" :messages="$errors->get('comment_quater')" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                                <div class="flex items-right space-x-2 mt-4 mr-18">
                                                    <!-- Attachment icon -->
                                                    <svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 280.067 280.067" xml:space="preserve">
                                                        <g><path style="fill:#D07C40;" d="M149.823,257.142c-31.398,30.698-81.882,30.576-113.105-0.429
                                                                c-31.214-30.987-31.337-81.129-0.42-112.308l-0.026-0.018L149.841,31.615l14.203-14.098c23.522-23.356,61.65-23.356,85.172,0
                                                                s23.522,61.221,0,84.586l-125.19,123.02l-0.044-0.035c-15.428,14.771-40.018,14.666-55.262-0.394
                                                                c-15.244-15.069-15.34-39.361-0.394-54.588l-0.044-0.053l13.94-13.756l69.701-68.843l13.931,13.774l-83.632,82.599
                                                                c-7.701,7.596-7.701,19.926,0,27.53s20.188,7.604,27.88,0L235.02,87.987l-0.035-0.026l0.473-0.403
                                                                c15.682-15.568,15.682-40.823,0-56.39s-41.094-15.568-56.776,0l-0.42,0.473l-0.026-0.018l-14.194,14.089L50.466,158.485
                                                                c-23.522,23.356-23.522,61.221,0,84.577s61.659,23.356,85.163,0l99.375-98.675l14.194-14.089l14.194,14.089l-14.194,14.098
                                                                l-99.357,98.675C149.841,257.159,149.823,257.142,149.823,257.142z"/>
                                                        </g>
                                                    </svg>
                                                    
                                                    <input type="file" name="document" class="hidden" id="fileInput">
                                                    
                                                    <label for="fileInput" class="cursor-pointer">Upload Report(Optional)</label>
                                                    @if (isset($pdfPath))
                                                    <iframe src="{{ asset($pdfPath) }}" width="100%" height="600px"></iframe>
                                                    @endif
                                                </div>

                                            <div class="px-4 py-4 mt-4">
                                                <x-primary-button type="submit">Submit Report</x-primary-button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                <x-flash-transition-success />
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