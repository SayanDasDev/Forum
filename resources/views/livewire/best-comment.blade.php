<div>
    <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white flex justify-between dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg relative">
            <div class="px-6 py-4 font-bold text-lg text-gray-900 dark:text-gray-300">
                <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-br dark:bg-green-900 dark:text-green-300 absolute top-0 left-0">Best Comment</div>
                <div class="pt-4">
                    <span>{{ $comment->user->name }}:</span> {{ $comment->content }}
                </div>
            </div>
        </div>
    </div>
</div>
