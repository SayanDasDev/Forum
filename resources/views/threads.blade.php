<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Threads') }}
            </h2>
            <div class="ml-auto">
                <button class="inline-flex items-center h-10 px-5 text-indigo-100 transition-colors duration-150 bg-red-500 rounded-lg focus:shadow-outline hover:bg-red-700">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                <span class="ml-2">New Thread</span>
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="py-2">
        {{-- //TODO: Maybe a bug in the class below max-w-7 --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pt-6 pl-6 pr-6 text-xl font-bold text-gray-900 dark:text-gray-100">
                        Lorem ipsum dolor sit
                    </div>
                    <div class="pl-7 pt-2 pr-6 text-sm text-gray-900 dark:text-gray-400">
                        Subtile Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est id eligendi quo ut in reiciendis obcaecati a, omnis nihil, qui et at? Repudiandae natus deleniti, perferendis enim vero neque incidunt?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias et, amet enim quos iste maxime dignissimos neque illum eligendi incidunt?
                    </div>
                    <div class="thread-edit-delete-btn-group flex gap-2 m-6 justify-end">
                        <div>
                            <button type="button" class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                            <span class="sr-only">Icon description</span>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="delete-svg-outer text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                            <svg class="w-4 h-4" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path class="delete-svg-path fill-current dark:hover:text-white" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"></path></g></svg>
                            <span class="sr-only">Icon description</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
    </div>
</x-app-layout>
