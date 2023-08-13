<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');

        html {
            font-family: 'Outfit', system-ui, sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <!-- Main content -->
    <div class="w-11/12 flex ml-auto relative">
        <nav class="absolute top-0 left-0 w-full ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('logo.png') }}" class="h-9 mr-3" alt="houseLink Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">HouseLink</span>
                </a>

                <button data-collapse-toggle="navbar-multi-level" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-multi-level" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

                <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                    <ul
                        class="flex flex-col items-center font-medium p-4 md:p-0 mt-4 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                Residences
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                Reviews
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                FAQ'S
                            </a>
                        </li>
                        <li>
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                                started
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-cover bg-center flex" style=" background-image: url('img.png');   height: 560px; width: 100%;">
            <div class="w-full max-w-screen-xl flex items-center  mx-auto p-4">
                <div class=" flex flex-wrap p-4 ">
                    <div class=" w-full my-4">
                        <h1 class="text-6xl font-semibold text-white mb-2 ">
                            <span class="font-semibold"> Find Your </span> <br />Perfect <br /> Match
                        </h1>
                        <p class="text-lg text-gray-300 ">
                            Ignite Your Imagination
                        </p>
                        <p class="text-lg text-gray-300 mb-8">
                            HouseLink - Where Vision Meets Reality.
                        </p>
                        <button type="button"
                            class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none rounded-lg border border-blue-700 hover:bg-blue-700 hover:text-white focus:z-10 focus:ring-2 ">
                            Get Started
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="absolute flex py-6 px-8 justify-between items-center w-3/4 shadow-xl bg-white" style=" bottom: -10%; left: 10%;">
            <h1>OK</h1>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

</body>

</html>
