<div class="py-16">
    @foreach($threads as $thread)
    <a href="{{ route('threads.details', ['thread' => $thread->id]) }}">
        <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pt-6 pl-6 pr-6 text-xl font-bold text-gray-900 dark:text-gray-100">
                    {{ $thread->thread_title }}
                </div>
                <div class="pl-7 pt-2 pr-6 text-sm text-gray-900 dark:text-gray-400">
                    {{ $thread->thread_subtitle }}
                </div>
                <div class="thread-edit-delete-btn-group flex m-6 items-center justify-start">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#BDBDBD" width="24px" height="24px" viewBox="0 0 24 24"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path></g></svg>
                    </div>
                    <div class="px-2 text-sm text-gray-900 dark:text-gray-400">
                        {{ $thread->user->name }}
                    </div>
                </div>
            </div>
        </div>
        </a>
    @endforeach
</div>
