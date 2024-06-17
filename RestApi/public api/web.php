<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meovies</title>

    <link rel="icon" type="media/png" href="./maskot-mixue.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-red-600">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <h1 class="text-white text-2xl">Meovies</h1>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Nav end -->

    <!-- Main -->
    <main>
        <div class="container w-100">
            <h1 class="text-6xl p-3">All movies</h1>
            <div>
                <div class="flex justify-center items-center flex-col">
                    <h1 class="text-4xl p-3 text-red-600 font-bold text-center">Search Movies</h1>
                    <div>
                        <input type="text" class="form-control border border-black p-2" id="search-input"
                            placeholder="Movie tittle">
                        <button class="bg-red-600 text-white p-1 rounded-xl hover:shadow-lg"
                            id="search-button">Search</button>
                    </div>
                </div>
            </div>
            <h1 class="text-4xl p-3 text-red-600 font-bold text-center" id="title"></h1>
            <div class="border border-2 border-red-600 ms-[50px] pt-3 w-[90%]" id="movie-list">
                <div class="grid grid-cols-4 gaps-4" id="movie">

                </div>
            </div>
        </div>


    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>

</html>