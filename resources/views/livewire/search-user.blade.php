<div class="bg-white max-w-6xl rounded-md border border-gray-50 py-4 px-4 mb-4 shadow-md" :users="$users">
    <div class="px-4 py-2 mx-auto">
        {{-- List Table --}}
        <div x-data="{ open: true }">
            <div class="">
                <div class="flex items-center justify-between flex-nowrap" id="accordion-open-heading-1">

                    <div class="w-1/2">
                        <h3 class="text-gray-800 text-xl font-light capitalize">
                            Add New Administrator
                        </h3>
                    </div>
                    <a href="#" class="shrink-0" @click="open= !open">
                        <div class="cursor-pointer flex justify-end items-end py-2 px-2">
                            <svg class="w-3 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h16" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Table --}}
            <div x-show="open">
                <div class="py-2 pb-4 my-2">
                    <form action="#" method="GET">
                        @csrf

                        <div class="px-3 py-2 space-y-6">
                            <div class="grid grid-cols-2 gap-6 place-items-center w-full">
                                <div class="space-y-3">
                                    <x-input-label for="name" :value="__('Name')" class="px-3" />
                                    <x-text-input id="name" name="name" type="text" value="{{ $users->id }}"
                                        class="mt-1 block w-full shadow" />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>
                                <div class="space-y-3">
                                    <x-input-label for="email" :value="__('Email')" class="px-3" />
                                    <x-text-input id="email" name="email" type="email" value="{{ $users->email }}"
                                        class="mt-1 block w-full shadow" />
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>
                            </div>


                            <div class="grid grid-cols-3 gap-6 place-items-center w-full">
                                <div class="space-y-3">
                                    <x-input-label for="phone" :value="__('Phone')" class="px-3" />
                                    <x-text-input id="phone" name="phone" type="tel" value="{{ $users->phone }}"
                                        class="mt-1 block w-full shadow" />
                                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                </div>
                                <div class="space-y-3">
                                    <x-input-label for="role" :value="__('Role')" class="px-3" />
                                    <x-text-input id="role" name="role" type="text" value="{{ $users->role }}"
                                        class="mt-1 block w-full shadow" />
                                    <x-input-error class="mt-2" :messages="$errors->get('role')" />
                                </div>
                                <div class="space-y-3">
                                    <x-input-label for="department" :value="__('Department')" class="px-3" />
                                    <x-text-input id="department" name="department" type="text" value="{{ $users->department }}"
                                        class="mt-1 block w-full shadow" />
                                    <x-input-error class="mt-2" :messages="$errors->get('department')" />
                                </div>
                            </div>
                        </div>

                        <div class="px-4 py-4 mt-4">
                            <x-primary-button type="submit" wire:click.prevent='createUser'>Create New</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="">
                @if (session('success'))
                    <span class="bg-green-400 px-4 py-2 font-medium text-lg capitalize">{{ session('sucess') }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
