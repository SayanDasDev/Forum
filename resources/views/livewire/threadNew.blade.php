<div class="py-12">
    <div class="py-2">
        <div class="max-w-7xl my-4 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8">
                    <header>
                        <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">
                            New Thread
                        </h2>
                    </header>

                    <form class="mt-6 space-y-6">
                        <div>
                            <label class="block font-medium text-gray-700 dark:text-gray-300 text-xl px-2" for="thread_title">
                                Heading
                            </label>
                            <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block mx-2 w-full" id="thread_title" name="thread_title" type="text">
                            {{-- <x-input-error :messages="$errors->addThreadTitle->get('ThreadTitle')" class="mt-2" /> --}}
                        </div>

                        <div>
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300 px-2" for="thread_subtitle">
                                Sub Heading <span class="text-gray-600">(Optional)</span>
                            </label>
                            <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block mx-2 w-full" id="thread_subtitle" name="thread_subtitle" type="text">
                            {{-- <x-input-error :messages="$errors->addThreadSubTitle->get('ThreadSubTitle')" class="mt-2" /> --}}
                        </div>

                        <div>
                            
                            <label for="thread_content" class="block font-medium text-sm text-gray-700 dark:text-gray-300 px-2">Content</label>
                            <textarea id="thread_content" rows="8" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block mx-2 w-full" placeholder="Your Content Here..."></textarea>
                            {{-- <x-input-error :messages="$errors->addThreadContent->get('ThreadContent')" class="mt-2" /> --}}

                        </div>

                        <div class="flex justify-end pr-6 gap-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Post Thread
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
   </div>
</div>

        



