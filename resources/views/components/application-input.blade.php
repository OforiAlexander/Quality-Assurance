@props(['disabled' => true])
<div class="mx-auto border-2 max-w-4xl p-6 bg-cyan-500 bg-opacity-20 rounded-md">
    <form class="grid grid-cols-2 gap-4 py-4 px-2">
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Name Of People Responsible</label>
            <input type="text" id="email" value="{{ Auth::user()->first_name. " ". Auth::user()->middle_names. " ". Auth::user()->last_name }}" {{ $disabled ? 'disabled' : ''}} name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-blue-300 focus:outline-none cursor-not-allowed focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="unit" class="block text-gray-700 font-bold mb-2">Name of Unit/Center</label>
            <select id="unit" name="unit" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <option value="">Select Unit/Center</option>
                <option value="unit1">Unit 1</option>
                <option value="unit2">Unit 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="mb-4">
            <label for="quarter" class="block text-gray-700 font-bold mb-2">Reporting Quarter</label>
            <select id="quarter" name="quarter" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <option value="">Select Quarter</option>
                <option value="q1">Q1</option>
                <option value="q2">Q2</option>
                <option value="q3">Q3</option>
                <option value="q4">Q4</option>
            </select>
        </div><br>
        <div class="mb-4">
            <label for="s-focus" class="block text-gray-700 font-bold mb-2">Strategic Focus</label>
            <select id="s-focus" name="s-focus" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <option value="">Strategic Focus</option>
                <option value="people">1. PEOPLE</option>
                <option value="processes">2.PROCESSES</option>
                <option value="planet">3.PLANET</option>
                <option value="relevance">4.RELEVANCE</option>
                <option value="impact">5.IMPACT</option>
                <option value="SUSTAINABILITY">6.SUSTAINABILITY</option>
                <option value="continuous_improvement">7.CONTINUOUS IMPROVEMENT</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="s-obj" class="block text-gray-700 font-bold mb-2">Strategic Focus</label>
            <select id="s-obj" name="s-obj" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <option value="">Strategic objectives</option>
                <option value="p1"></option>
                

            </select>
        </div>
        <div class="mb-4">
            <label for="s-init" class="block text-gray-700 font-bold mb-2">Strategic Initiative</label>
            <select id="s-init" name="s-init" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <option value="">Strategic Initiative</option>
                <option value="p1"></option>
                

            </select>
        </div>
        <!-- Add more dropdown options similarly for strategic focus, objectives, initiative, status  -->
        <div class="mb-4">
            <label for="commencement_date" class="block text-gray-700 font-bold mb-2">Commencement Date</label>
            <input type="date" id="commencement_date" name="commencement_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="completion_date" class="block text-gray-700 font-bold mb-2">Completion Date</label>
            <input type="date" id="completion_date" name="completion_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="progress" class="block text-gray-700 font-bold mb-2">Undaye/Progress Made in the Quarter</label>
            <textarea id="progress" name="progress" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></textarea>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select id="status" name="status" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                <option value="">Select Status</option>
                <option value="completed">Completed</option>
                <option value="in-progress">In Progress</option>
                <option value="not-initiated">Not Initiated</option>
            </select>
        </div>
        <div class="text-center col-span-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
        </div>
    </form></div>