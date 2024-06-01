<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Tailwind CSS</title>
    <link rel="stylesheet" href="src/output.css?<?php echo time(); ?>">
</head>

<body class="container bg-color-bg text-white">
    <header class="z-50 sticky top-0">
        <nav class="flex justify-between items-center px-10 lg:px-20">
            <div class="w-25 py-5">
                <a href="#" class="text-lg"><i class="ri-calendar-schedule-fill"></i> Event</a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6 uppercase">
                    <li><a href="index.php" class="ease-in duration-200">Home</a></li>
                    <li><a href="#" class="ease-in duration-200">Events</a>
                    <li><a href="#" class="ease-in duration-200">Booking</a>
                    </li>
                    <li><a href="#" class="ease-in duration-200">Contact US</a>
                    </li>
                    <li><a href="#" class="ease-in duration-200">Login</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile view -->
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <!-- <i class="fa-solid fa-bars"></i> -->
                <i class="fa-solid ri-menu-4-line"></i>
            </div>
            <div id="menu" class="hidden h-[100vh] z-20 absolute inset-0">
                <ul class="h-full grid place-items-center py-20 uppercase">
                    <li><a href="index.php" class="ease-in duration-200 h-link">Home</a>
                    </li>
                    <li><a href="#" class="ease-in duration-200 h-link ">Events</a>
                    <li><a href="#" class="ease-in duration-200 h-link ">Booking</a>
                    </li>
                    <li><a href="#" class="ease-in duration-200 h-link">Contact Us</a>
                    </li>
                    <li><a href="#" class="ease-in duration-200 h-link">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>