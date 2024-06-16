<?php
include "components/header.php";
?>

<h1 class="h1 text-center text-color-primary mt-4">Contact Us</h1>

<div class="lg:px-20 px-5 mt-7">
    <div class="mb-8">
        <form action="actions/contact-send.php" method="post" class="text-center">
            <div class="mb-5">
                <input type="text" name="name" placeholder="Enter Your Name" class="px-3 py-2 rounded lg:w-1/2 lg:mx-auto w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="my-5">
                <input type="email" name="email" placeholder="Enter Your Email" class="px-3 py-2 rounded lg:w-1/2 lg:mx-auto w-full text-color-bg focus:outline-color-primary focus:outline-1">
            </div>
            <div class="my-5">
                <textarea name="msg" class="px-3 py-2 rounded lg:w-1/2 lg:mx-auto w-full text-color-bg focus:outline-color-primary focus:outline-1" placeholder="Write Your Message"></textarea>
            </div>
            <div class="flex flex-row items-center justify-center gap-5">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</div>


<?php
include "components/footer.php";
?>