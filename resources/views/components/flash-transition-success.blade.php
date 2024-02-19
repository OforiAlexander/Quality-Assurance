<div>
    @if (session('success'))
    <div class="fixed bottom-8 rounded right-8 z-50" x-data="{ show: true}" x-init="setTimeout(()=>show=false,2000)" x-transition.enter.duration.500ms x-transition.leave.duration.500ms>
        <span x-show="show"
            class="bg-green-400 px-4 py-2 font-semibold text-lg capitalize text-gray-100">{{ session('success') }}</span>
    </div>
    @endif
</div>