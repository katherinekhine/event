<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../src/style.css">
    <!-- Output CSS -->
    <link rel="stylesheet" href="../src/output.css?<?php echo time(); ?>">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="container bg-color-bg text-white">
    <header class="z-50 sticky top-0 bg-color-bg">
        <nav class="flex justify-between items-center px-5 lg:px-20">
            <div class="w-25 py-5">
                <a href="#" class="text-lg text-color-primary"><i class="ri-calendar-schedule-fill text-white"></i> GatherGrove</a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6 uppercase">
                    <li><a href="index.php" class="ease-in duration-200">Home</a></li>
                    <li><a href="event.php" class="ease-in duration-200">Events</a>
                    <li><a href="#" class="ease-in duration-200">Booking</a>
                    </li>
                    <li><a href="#" class="ease-in duration-200">Contact US</a>
                    </li>
                    <li><a href="login.php" class="ease-in duration-200">Login</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile view -->
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <!-- <i class="fa-solid fa-bars"></i> -->
                <i class="fa-solid ri-menu-4-line"></i>
            </div>
            <div id="menu" class="hidden h-[100vh] z-20 absolute inset-0">
                <ul class="h-full grid place-items-center py-20 uppercase bg-color-bg">
                    <li><a href="index.php" class="ease-in duration-200 h-link">Home</a>
                    </li>
                    <li><a href="event.php" class="ease-in duration-200 h-link ">Events</a>
                    <li><a href="#" class="ease-in duration-200 h-link ">Booking</a>
                    </li>
                    <li><a href="#" class="ease-in duration-200 h-link">Contact Us</a>
                    </li>
                    <li><a href="login.php" class="ease-in duration-200 h-link">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- custom js -->
    <script src="../js/main.js"></script>
    <!-- scroll reveal js -->
    <script src="../js/scrollreveal.min.js"></script>
</body>

</html>