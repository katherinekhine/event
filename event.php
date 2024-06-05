<?php
include "components/header.php";
?>

<div class="mt-4 flex justify-center items-center w-1/2 mx-auto">
    <form action="/search" method="get" class="relative inline-block">
        <input type="text" name="search" placeholder="Search Here" class="h-[35px] lg:w-[300px] w-[250px] rounded px-3 pr-10 border text-color-bg">
        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-color-primary">
            <i class="ri-search-fill"></i>
        </button>
    </form>
</div>

<div class="mt-5 lg:px-20 px-5">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <div class="flex flex-col justify-center items-center px-3 border border-color-primary">
            <div class="py-2">
                <img src="img/home.png" alt="" class="rounded-md hover:scale-105 ease-linear duration-200 ">
            </div>
            <div>
                <h3 class="h3 text-color-primary text-center">Artistic Adventures</h3>
                <p class="p mt-2">Discover a myriad of creative experiences with our partnered Art Club. Explore captivating art exhibitions, attend hands-on workshops, and engage with local artists as they showcase their talents. Whether you're a seasoned artist or simply appreciate the beauty of art, our curated selection of art events offers something for everyone to enjoy.</p>
            </div>
            <div class="my-4">
                <button class="btn btn-primary"><a href="#"></a>Join</button>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-3 border border-color-primary">
            <div class="py-2">
                <img src="img/home.png" alt="" class="rounded-md hover:scale-105 ease-linear duration-200 ">
            </div>
            <div>
                <h3 class="h3 text-color-primary text-center">Artistic Adventures</h3>
                <p class="p mt-2">Discover a myriad of creative experiences with our partnered Art Club. Explore captivating art exhibitions, attend hands-on workshops, and engage with local artists as they showcase their talents. Whether you're a seasoned artist or simply appreciate the beauty of art, our curated selection of art events offers something for everyone to enjoy.</p>
            </div>
            <div class="my-4">
                <button class="btn btn-primary"><a href="#"></a>Join</button>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-3 border border-color-primary">
            <div class="py-2">
                <img src="img/home.png" alt="" class="rounded-md hover:scale-105 ease-linear duration-200 ">
            </div>
            <div>
                <h3 class="h3 text-color-primary text-center">Artistic Adventures</h3>
                <p class="p mt-2">Discover a myriad of creative experiences with our partnered Art Club. Explore captivating art exhibitions, attend hands-on workshops, and engage with local artists as they showcase their talents. Whether you're a seasoned artist or simply appreciate the beauty of art, our curated selection of art events offers something for everyone to enjoy.</p>
            </div>
            <div class="my-4">
                <button class="btn btn-primary"><a href="#"></a>Join</button>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-3 border border-color-primary">
            <div class="py-2">
                <img src="img/home.png" alt="" class="rounded-md hover:scale-105 ease-linear duration-200 ">
            </div>
            <div>
                <h3 class="h3 text-color-primary text-center">Artistic Adventures</h3>
                <p class="p mt-2">Discover a myriad of creative experiences with our partnered Art Club. Explore captivating art exhibitions, attend hands-on workshops, and engage with local artists as they showcase their talents. Whether you're a seasoned artist or simply appreciate the beauty of art, our curated selection of art events offers something for everyone to enjoy.</p>
            </div>
            <div class="my-4">
                <button class="btn btn-primary"><a href="#"></a>Join</button>
            </div>
        </div>
    </div>
</div>


<?php
include "components/footer.php";
?>