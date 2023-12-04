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
            <div>
            </div>
        </div>
    </div>
</x-app-layout>