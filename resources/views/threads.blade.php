<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Threads') }}
            </h2>
            {{-- @if($threadShowing)
                <div class="ml-auto">
                    <button wire:click="enterNewThreadMode" class="inline-flex items-center h-10 px-5 text-indigo-100 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-red-700">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    <span class="ml-2">New Thread</span>
                    </button>
                </div>
            @endif --}}
        </div>
    </x-slot>

    
    @livewire('threads')
    
</x-app-layout>

