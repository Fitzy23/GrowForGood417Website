<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Carousel</title>
    <link rel="stylesheet" href="../output.css"> <!-- Link to Tailwind CSS file -->
    <style>
        /* Carousel Functionality */
        .carousel-open:checked + .carousel-item {
            opacity: 100;
            position: relative;
            z-index: 10;
            transition: opacity 0.6s ease-in-out;
        }
        
        .carousel-item {
            position: absolute;
            opacity: 0;
            transition: opacity 0.6s ease-in-out;
        }
        
        /* Navigation Controls */
        .carousel:hover .prev,
        .carousel:hover .next {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="relative w-full max-w-2xl mx-auto">
        <div class="carousel">
            <div class="carousel-inner relative overflow-hidden w-full">

                <!-- Carousel Item 1 -->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <img src="../../img/placeholder800x400.png" class="block w-full h-full object-cover">
                </div>

                <!-- Carousel Item 2 -->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <img src="../../img/placeholder800x400.png" class="block w-full h-full object-cover">
                </div>

                <!-- Carousel Item 3 -->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <img src="../../img/placeholder800x400.png" class="block w-full h-full object-cover">
                </div>

                <!-- Navigation Controls -->
                <label for="carousel-3" class="prev control-1 w-10 h-10 mr-32 absolute cursor-pointer text-3xl font-bold text-gray-800 rounded-full bg-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2" class="next control-1 w-10 h-10 ml-32 absolute cursor-pointer text-3xl font-bold text-gray-800 rounded-full bg-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                <label for="carousel-1" class="prev control-2 w-10 h-10 mr-32 absolute cursor-pointer text-3xl font-bold text-gray-800 rounded-full bg-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3" class="next control-2 w-10 h-10 ml-32 absolute cursor-pointer text-3xl font-bold text-gray-800 rounded-full bg-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                <label for="carousel-2" class="prev control-3 w-10 h-10 mr-32 absolute cursor-pointer text-3xl font-bold text-gray-800 rounded-full bg-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1" class="next control-3 w-10 h-10 ml-32 absolute cursor-pointer text-3xl font-bold text-gray-800 rounded-full bg-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            </div>
        </div>
    </div>
</body>
</html>