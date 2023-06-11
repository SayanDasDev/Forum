<div>
    @foreach($thread->comments as $comment)
        @if(!$comment->is_best)
            <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white flex justify-between dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pl-6 pr-6 pt-4 text-sm text-gray-900 dark:text-gray-400">
                        <span class="font-bold">{{ $comment->user->name }}:</span> {{ $comment->content }}
                    </div>
                    @if($thread->user_id == Auth::id())
                        <form wire:submit="markAsBest({{ $comment->id }})">
                            <label for="markAsBest" class="mr-1 markAsBest cursor-pointer select-none items-center">
                                <button type="submit" name="markAsBest" id="markAsBest" class="sr-only"> </button>
                                <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Mark as Best</span>
                            </label>
                        </form>
                    @endif
                </div>
            </div>
        @endif
    @endforeach
</div>