<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <div class="w-20 h-20">
                        <svg viewBox="0 0 1024 1024" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="512" cy="512" r="512" fill="#FF2D20"></circle> <path d="M434.325 709.692V394.506h84.685v315.747h-84.685zm332.572-243.4h-77.395v129.552c0 12.899.561 21.311 1.122 26.92.56 5.047 2.804 9.534 6.73 13.46 3.926 3.925 10.095 5.608 18.507 5.608l48.232-1.122 3.925 67.3c-28.04 6.169-49.913 9.534-64.495 9.534-38.136 0-63.934-8.413-77.394-25.798-14.021-16.825-20.751-48.232-20.751-94.22v-291.07h84.685v87.49h77.395v72.346zm-459.88 24.116c-14.582 0-26.92-5.047-36.454-15.142-9.534-10.095-14.581-22.433-14.581-37.015s5.047-26.92 14.02-37.015c9.534-10.095 21.873-14.581 36.454-14.581 14.582 0 26.92 5.047 36.454 15.142 9.534 10.095 14.02 22.433 14.02 37.576 0 15.142-4.486 26.92-14.02 37.014-8.973 8.974-20.75 14.021-35.893 14.021z" fill="#ffffff"></path> </g></svg>
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
