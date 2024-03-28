<div class="ps-5">
    <div class="grid grid-cols-3 gap-6 place-items-center w-full">

        <div class="space-y-3 w-full">
            <x-text-select class="mt-1 block w-full shadow" wire:model.live.debounce.300ms='filterSearch' id="quater" name="quater">
                <option value="Select A Quater" selected disabled>Filter
                    Quater</option>
                <option value="Quater 1">Quater 1</option>
                <option value="Quater 2">Quater 2</option>
                <option value="Quater 3">Quater 3</option>
                <option value="Quater 4">Quater 4</option>
            </x-text-select>
            <x-input-error class="mt-2" :messages="$errors->get('quater')" />
        </div>
        <div class="space-y-3 w-full">
            <x-text-select class="mt-1 block w-full shadow" wire:model.live.debounce.300ms='filterSearch' id="summary" name="summary">
                <option value="Select A Quater" selected disabled>Filter Quater Year</option>
                @foreach ($years as $year)
                    <option value="{{ $year }}">{{ $year }}
                    </option>
                @endforeach
            </x-text-select>
        </div>


        <div class="space-y-3 w-full">
            <x-text-select class="mt-1 block w-full shadow" wire:model.live.debounce.300ms='filterSearch' id="strategic_focus" name="strategic_focus">
                <option value="Select A Strategic Focus" selected disabled>Filter Strategic Focus</option>
                <option value="1. PEOPLE">1. PEOPLE</option>
                <option value="2. PROCESSES">2. PROCESSES</option>
                <option value="3. PLANET">3. PLANET</option>
                <option value="4. RELEVANCE">4. RELEVANCE</option>
                <option value="5. IMPACT">5. IMPACT</option>
                <option value="6. SUSTAINABILITY">6. SUSTAINABILITY</option>
                <option value="7. CONTINUOUS IMPROVEMENT">7. CONTINUOUS
                    IMPROVEMENT</option>
            </x-text-select>
        </div>
    </div>
    Model: {{ var_export($filterSearch) }}

    <table
    class="w-full table-auto text-sm whitespace-nowrap text-left rtl:text-right text-gray-500 border border-gray-300">
    <thead class="text-base font-medium text-gray-600 capitalize bg-gray-100">
        <tr class="">
            <th scope="col"
                class="px-6 py-3 border-r-2 border-b-2 text-gray-50 border-gray-300 shadow bg-gray-800">
                Download
            </th>
            <th scope="col"
                class="px-6 py-3 border-r-2 border-b-2 text-gray-50 border-gray-300 shadow bg-gray-800">
                Action
            </th>
            <th scope="col"
                class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                Facilitator/Responsible Person
            </th>
            <th scope="col"
                class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                Summary
            </th>
            <th scope="col"
                class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                Reporting Quater
            </th>
            <th scope="col"
                class="px-6 py-3 border-r-2 border-b-2 border-gray-300 shadow">
                Name Of Center/Faculty/Unit
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
        @foreach ($reportsFilter as $report)
            <tr class="bg-gray-100">
                <td class="px-6 hover:bg-gray-300 transition border-r-2 border-b-2 border-gray-300 shadow">
                    <div class="flex flex-row gap-2 px-2 py-1 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>

                        <hr>
                    </div>
                </td>
                <td class="px-6 py-4 bg-cyan-700">
                    <a href="/report/{{ $report->id }}/edit"
                        class="font-medium text-gray-50 p-1 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow">
                    {{ $report->user->first_name . ' ' . $report->user->middle_names . ' ' . $report->user->last_name }}
                </td>
                <td
                    class="px-6 py-4 border-r-2 border-b-2 border-gray-300 shadow hover:bg-gray-50 cursor-pointer">
                    {{ $report->summary }}
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
