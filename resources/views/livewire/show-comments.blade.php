<div class="my-6">
    @foreach($comments as $comment)
        @if(!$comment->is_best)
            <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white flex justify-between dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pl-6 pr-6 pt-4 text-sm text-gray-900 dark:text-gray-400" style="width: calc(100% - 120px)">
                        <span class="font-bold">{{ $comment->user->name }}:</span> 
                        <p>{{ $comment->content }}</p>
                    </div>
                    @if($thread->user_id == Auth::id())
                        <form>
                            <label for="markAsBest{{$comment->id}}" class="mr-1 markAsBest cursor-pointer select-none items-center">
                                <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10 mr-2">Mark as Best</span>
                                <button wire:click.prevent="markAsBest({{ $comment->id }})" type="submit" name="markAsBest{{$comment->id}}" id="markAsBest{{$comment->id}}" class="sr-only"> </button>
                            </label>
                        </form>
                    @endif
                </div>
            </div>
        @endif
    @endforeach
</div>
