<div class="py-12">
    <div class="py-2">
        <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <p class="text-sm text-gray-700 dark:text-gray-400">{{ $thread->user->name }}</p>
                    <header>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                            {{ $thread->thread_title }}
                        </h2>
                    </header>
                    <div class="text-lg font-medium text-gray-800 dark:text-gray-200">
                        <p>{{ $thread->thread_subtitle }}</p>
                    </div>
                    <div>
                        <p class="text-gray-800 dark:text-gray-200">{{ $thread->thread_content }}</p>
                    </div>
                </div>
                
                <livewire:add-comments :threadId="$thread->id" />
                <livewire:show-comments :threadId="$thread->id" />

            </div>
        </div>
    </div>
</div>
