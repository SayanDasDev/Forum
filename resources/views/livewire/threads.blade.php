
<div>
    <div class="flex justify-end">
        <div class="max-w-7xl mt-6 mx-auto sm:px-6 lg:px-8">
            @if($threadShowing)
                <button wire:click.prevent="enterNewThreadMode" class="inline-flex items-center h-10 px-5 text-indigo-100 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-red-700">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                <span class="ml-2">New Thread</span>
                </button>
            @endif
        </div>
    </div>

    
        
    @if($threadCreating)
        @include('livewire.threadNew')
    @elseif($threadEditing)
        @include('livewire.threadEdit')
    @else
        @include('livewire.threadsShown')
    @endif
        
    

</div>
