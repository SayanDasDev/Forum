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
                <div class="thread-edit-delete-btn-group flex gap-2 m-6 justify-between">
                    <div class="pl-7 pt-2 pr-6 text-sm text-gray-900 dark:text-gray-400">
                        {{ $thread->user->name }}
                    </div>
                </div>
            </div>
        </div>
        </a>
    @endforeach
</div>
