<div>
    <form>
        <div class="mx-auto" style="width: 90%;">
            <div>
                <textarea wire:model="comment" rows="3" placeholder="Write Something..." class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" ></textarea>
            </div>
            <div class="my-4 flex justify-end" style="padding-right: 1rem">
                <button wire:click.prevent="addComment" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Add Comment</button>
            </div>
        </div>
    </form>
</div>