<div class="my-6">
    @foreach($comments as $comment)
        @if(!$comment->is_best)
            <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white flex justify-between dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pl-6 pr-6 pt-4 text-sm text-gray-900 dark:text-gray-400" style="width: calc(100% - 120px)">
                        <div class="flex items-center pb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#BDBDBD" width="16px" height="16px" viewBox="0 0 24 24"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path></g></svg>
                            <span class="font-bold pl-1">{{ $comment->user->name }}:</span> 
                        </div>
                        <p class="pl-6">{{ $comment->content }}</p>
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
