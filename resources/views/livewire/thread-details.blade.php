<div class="py-12">
    <div class="py-2">
        <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <div class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#BDBDBD" width="24px" height="24px" viewBox="0 0 24 24"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path></g></svg>
                        <p class="text-sm text-gray-700 pl-2 dark:text-gray-400">{{ $thread->user->name }}</p>
                    </div>
                    <header>
                        <h2 class="text-4xl font-bold text-gray-900 dark:text-gray-100">
                            {{ $thread->thread_title }}
                        </h2>
                    </header>
                    <div class="text-lg font-medium text-gray-800 dark:text-gray-400 pt-2" style="width: 80%">
                        <p>{{ $thread->thread_subtitle }}</p>
                    </div>
                    <div>
                        <p class="text-gray-800 dark:text-gray-200 px-6 mt-6 text-justify">{!! nl2br(e($thread->thread_content)) !!}</p></p>
                    </div>
                </div>
                
                <livewire:add-comments :threadId="$thread->id" />
                @if ($bestComment)
                    <livewire:best-comment :commentId="$bestComment->id" :threadId="$thread->id" />
                @endif
                <livewire:show-comments :threadId="$thread->id" />

            </div>
        </div>
    </div>
</div>
