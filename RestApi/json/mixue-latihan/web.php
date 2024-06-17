<?php
$mixue = file_get_contents('data/mixue.json');

$menu = json_decode($mixue, true);

$iceCream = $menu['icecream'];
$fruitTea = $menu['RealFruitTea'];
$milkTea = $menu['MilkTea'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixang</title>

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
                        <img class="h-8 w-auto" src="./maskot-mixue.png" alt="Your Company">
                        <h1 class="text-white text-2xl">Mixue</h1>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Home</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Menu</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Home</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Menu</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Nav end -->

    <!-- Main -->
    <main>
        <div class="container w-100">
            <h1 class="text-6xl p-3">All menu</h1>
            <h1 class="text-4xl p-3 text-red-600 font-bold text-center">Ice Cream</h1>
            <div class="border border-2 border-red-600 ms-[50px] pt-3 w-[90%]">
                <div class="grid grid-cols-4 gaps-4">
                    <?php foreach ($iceCream as $ice): ?>
                        <div class="p-2 text-center">
                            <img src="./img/<?php echo $ice["photo"] ?>" alt="">
                            <h3 class="text-red-600 font-bold text-2xl">
                                <?php echo $ice["Name"] ?>
                                (
                                <?php echo $ice["Price"] / 1000 ?>K)
                            </h3>
                            <p>
                                <?php echo $ice["Desk"] ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <h1 class="text-4xl p-3 text-red-600 font-bold text-center">Real Fruit Tea</h1>
            <div class="border border-2 border-red-600 ms-[50px] pt-3 w-[90%]">
                <div class=" grid grid-cols-4 gaps-4">
                    <?php foreach ($fruitTea as $ft): ?>
                        <div class="p-2 text-center">
                            <img src="./img/<?php echo $ft["photo"] ?>" alt="">
                            <h3 class="text-red-600 font-bold text-2xl">
                                <?php echo $ft["Name"] ?>
                                (
                                <?php echo $ft["Price"] / 1000 ?>K)
                            </h3>
                            <p>
                                <?php echo $ft["Desk"] ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>
        <h1 class="text-4xl p-3 text-red-600 font-bold text-center">Milk Tea</h1>
        <div class="border border-2 border-red-600 ms-[50px] pt-3 w-[90%]">
            <div class="grid grid-cols-4 gaps-4">
                <?php foreach ($milkTea as $mk): ?>
                    <div class="p-2 text-center">
                        <img src="./img/<?php echo $mk["photo"] ?>" alt="">
                        <h3 class="text-red-600 font-bold text-2xl">
                            <?php echo $mk["Name"] ?>
                            (
                            <?php echo $mk["Price"] / 1000 ?>K)
                        </h3>
                        <p>
                            <?php echo $mk["Desk"] ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </main>
</body>

</html>