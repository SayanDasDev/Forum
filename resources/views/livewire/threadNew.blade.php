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

                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div>
                            <x-input-label for="ThreadTitle" :value="__('Heading')" class="text-xl px-2" />
                            <x-text-input id="ThreadTitle" name="ThreadTitle" type="text" class="mt-1 block mx-2 w-full"/>
                            <x-input-error :messages="$errors->addThreadTitle->get('ThreadTitle')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="ThreadSubTitle" :value="__('Sub Heading')" class="px-2" />
                            <x-text-input id="ThreadSubTitle" name="ThreadSubTitle" type="text" class="mt-1 block mx-2 w-full"/>
                            <x-input-error :messages="$errors->addThreadSubTitle->get('ThreadSubTitle')" class="mt-2" />
                        </div>

                        <div>
                            
                            <label for="content" class="block font-medium text-sm text-gray-700 dark:text-gray-300 px-2">Content</label>
                            <textarea id="content" rows="4" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block mx-2 w-full" placeholder="Your Content Here..."></textarea>
                            <x-input-error :messages="$errors->addThreadContent->get('ThreadContent')" class="mt-2" />

                        </div>

                        <div class="flex justify-end pr-6 gap-4">
                            <x-primary-button>{{ __('Post Thread') }}</x-primary-button>

                        </div>
                    </form>
                </div>
            </div>
        </div> 
   </div>
</div>

        



