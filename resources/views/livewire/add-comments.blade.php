<div>
    <form>
        <div class="mx-auto" style="width: 90%;">
            <div>
                <textarea wire:model="comment" rows="3" placeholder="Write Something..." class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" ></textarea>
            </div>
            <div class="my-4 flex flex-col sm:flex-row items-center justify-between" style="padding-right: 1rem">
                    <div class="">
                        @if(session()->has('message'))
                            <div class="text-center py-4 text-sm lg:px-4">
                                <div class="p-2 bg-green-900 items-center text-green-100 leading-none rounded-full flex lg:inline-flex">
                                    <span class="flex rounded-full bg-green-600 uppercase px-2 py-0.5 text-xs font-bold mr-3">New</span>
                                    <span class="font-semibold mr-4 text-left flex-auto">Comment Added</span>
                                </div>
                            </div>
                        @elseif(session()->has('error'))
                            <div class="text-center py-4 text-sm lg:px-4">
                                <div class="p-2 bg-red-900 items-center text-red-100 leading-none rounded-full flex lg:inline-flex">
                                    <span class="flex rounded-full bg-red-600 uppercase px-2 py-0.5 text-xs font-bold mr-3">Error</span>
                                    <span class="font-semibold mr-4 text-left flex-auto">Comment Exceeded world Limit</span>
                                </div>
                            </div>
                        @endif
                    </div>
                <button wire:click.prevent="addComment" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Add Comment</button>
            </div>
        </div>
    </form>
</div>