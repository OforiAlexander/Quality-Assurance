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
                                                        <x-input-label for="title" :value="__('Name Of Person Responsible')" class="px-3" />
                                                        <x-text-input id="title" name="title" type="text"
                                                            class="mt-1 block w-full shadow cursor-not-allowed bg-gray-200" :disabled="true" value="{{ Auth::user()->first_name . ' ' . Auth::user()->middle_names. ' ' . Auth::user()->last_name }}"/>
                                                    </div>
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="center" :value="__('Name Of Center/Unit')" class="px-3" />
                                                        <x-text-input id="center" name="center" type="text" value="{{ Auth::user()->title }}"
                                                            class="mt-1 block w-full shadow cursor-not-allowed bg-gray-200" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('center')" />
                                                    </div>
                                                    
                                                </div>
    
    
                                                <div class="grid grid-cols-2 gap-6 place-items-center w-full">
                                                    
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="quater" :value="__('Reporting Quater')" class="px-3" />
                                                            <x-text-select class="mt-1 block w-full shadow" id="quater" name="quater">
                                                                <option value="Select A Quater" selected disabled>Select a quater</option>
                                                                <option value="Quater 1">Quater 1</option>
                                                                <option value="Quater 2">Quater 2</option>
                                                                <option value="Quater 3">Quater 3</option>
                                                                <option value="Quater 4">Quater 4</option>
                                                            </x-text-select>
                                                        <x-input-error class="mt-2" :messages="$errors->get('quater')" />
                                                    </div>
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="summary" :value="__('Reporting Quater Year ')" class="px-3" />
                                                        <x-text-select class="mt-1 block w-full shadow" id="summary" name="summary">
                                                            <option value="Select A Quater" selected disabled>Select a quater</option>
                                                            @foreach ($yearsRange as $year )
                                                                <option value="{{ $year }}">{{ $year }}</option>
                                                            @endforeach
                                                        </x-text-select>
                                                        <x-input-error class="mt-2" :messages="$errors->get('summary')" />
                                                    </div>
                                                </div>
                                                <div class="grid gap-6 place-items-center w-full">
                                                    <div class="space-y-3 w-full">
                                                        <x-input-label for="strategic_focus" :value="__('Strategic Focus')" class="px-3" />
                                                        <x-text-select class="mt-1 block w-full shadow" id="strategic_focus"
                                                            name="strategic_focus">
                                                            <option value="Select A Strategic Focus" selected disabled>Select a
                                                                strategic focus</option>
                                                            <option value="1. PEOPLE">1. PEOPLE</option>
                                                            <option value="2. PROCESSES">2. PROCESSES</option>
                                                            <option value="3. PLANET">3. PLANET</option>
                                                            <option value="4. RELEVANCE">4. RELEVANCE</option>
                                                            <option value="5. IMPACT">5. IMPACT</option>
                                                            <option value="6. SUSTAINABILITY">6. SUSTAINABILITY</option>
                                                            <option value="7. CONTINUOUS IMPROVEMENT">7. CONTINUOUS IMPROVEMENT</option>
                                                        </x-text-select>
                                                        <x-input-error class="mt-2" :messages="$errors->get('strategic_focus')" />
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-6 place-items-center w-full">
                                                    
                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="strategic_objectives" :value="__('Strategic Objectives')" class="px-3" />
                                                                <x-text-select class="mt-1 block w-full shadow" id="strategic_objective" name="strategic_objective">
                                                                    <option value="Strategic Objectives" selected disabled>Strategic Objectives</option>
                                                                    <option value="Strategic Objectives">alexa</option>
                                                                </x-text-select>
                                                            <x-input-error class="mt-2" :messages="$errors->get('strategic_objective')" />
                                                        </div>
                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="strategic_initiative" :value="__('Strategic Initiative')" class="px-3" />
                                                                <x-text-select class="mt-1 block w-full shadow" id="strategic_initiative" name="strategic_initiative">
                                                                    <option value="Strategic Initiative" selected disabled>Strategic Initiative</option>
                                                                    <option value="Strategic Initiative">alexa</option>
                                                                </x-text-select>
                                                            <x-input-error class="mt-2" :messages="$errors->get('strategic_initiative')" />
                                                        </div> 
                                                    </div>
                                                    <div class="grid grid-cols-2 gap-6 place-items-center w-full">
                                                    
                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="date" :value="__('Commencement Date')" class="px-3" />
                                                            <x-text-input id="date" name="date" type="date"
                                                                class="mt-1 block w-full shadow" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('date')" />
                                                        </div>
                                                        <div class="space-y-3 w-full">
                                                            <x-input-label for="status" :value="__('Status')" class="px-3" />
                                                                <x-text-select class="mt-1 block w-full shadow" id="status" name="status">
                                                                    <option value="Select Status" selected disabled>Select Status</option>
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
                                                                <textarea id="comment_quater" name="comment_quater" class = 'mt-1 resize-none block w-full border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm'></textarea>
                                                            <x-input-error class="mt-2" :messages="$errors->get('comment_quater')" />
                                                        </div>
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


    <script>
        // Function to populate Selector 2 based on the selection in Selector 1
        function populateSelector2() {
            var selector1Value = document.getElementById('strategic_focus').value;
            var selector2 = document.getElementById('strategic_objectives');
    
            // Clear existing options
            selector2.innerHTML = '';
    
            // Populate options based on the selected value of Selector 1
            if (selector1Value === 'people') {
                // Populate options for people
                var peopleOptions = ['Option 1', 'Option 2', 'Option 3'];
                populateOptions(selector2, peopleOptions);
            } else if (selector1Value === 'logic') {
                // Populate options for logic
                var logicOptions = ['Option A', 'Option B', 'Option C'];
                populateOptions(selector2, logicOptions);
            } else if (selector1Value === 'activities') {
                // Populate options for activities
                var activitiesOptions = ['Activity 1', 'Activity 2', 'Activity 3'];
                populateOptions(selector2, activitiesOptions);
            }
        }
    
        // Function to populate options in a selector
        function populateOptions(selector, options) {
            options.forEach(function(option) {
                var optionElement = document.createElement('option');
                optionElement.textContent = option;
                optionElement.value = option;
                selector.appendChild(optionElement);
            });
        }
    
        // Event listener to trigger the population of Selector 2 when Selector 1 changes
        document.getElementById('strategic_focus').addEventListener('change', populateSelector2);
    </script>
</x-app-layout>