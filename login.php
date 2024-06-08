<?php
include "components/header.php";
?>

<div class="mt-20 lg:px-20 px-5">
    <div class="p-4 border border-color-secondary shadow-md shadow-color-primary">
        <h1 class="h1 text-center text-color-primary"><i class="ri-account-circle-fill"></i> Login</h1>
        <form action="" method="post" class="text-center">
            <div class="my-5">
                <input type="email" name="email" placeholder="Enter your email" class="px-3 py-2 rounded border border-color-primary lg:w-1/2 lg:mx-auto w-full">
            </div>
            <div class="mb-5">
                <input type="password" name="password" placeholder="Enter your password" class="px-3 py-2 rounded border border-color-primary lg:w-1/2 lg:mx-auto w-full">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <p class="mt-5">Don't have an account? <a href="register.php" class="text-color-primary">Register here</a></p>
        </form>
    </div>
</div>

<?php
include "components/footer.php";
?>