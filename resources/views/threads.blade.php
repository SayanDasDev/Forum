<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('My Threads') }}
            </h2>
        </div>
    </x-slot>

    
    @livewire('threads')
    
</x-app-layout>

