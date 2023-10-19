<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <!-- Styles -->
        <style>
            .material-symbols-outlined {
              font-variation-settings:
              'FILL' 1,
              'wght' 400,
              'GRAD' 0,
              'opsz' 24
            }
            </style>
        @vite('resources/css/app.css')
    </head>
    <body class="m-5 md:m-10 lg:m-28">
        <div class="space-y-20">
            <div class="flex flex-col items-center text-center">
                <img src="{{ asset('assets/pngwing.png') }}" class="w-[200px]" alt="">
            </div>
            <div id="controls-carousel" class="relative w-auto rounded-xl shadow-2xl" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-[190px] md:h-[330px] lg:min-h-[610px] overflow-hidden rounded-lg bg-cover">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.tokopedia.net/img/cache/1200/BgtCLw/2023/10/17/7607cb32-6518-4996-965e-9f45f5d9ffa5.jpg.webp?ect=4g" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://images.tokopedia.net/img/cache/1200/BgtCLw/2023/10/18/7d4a1135-bf1d-426c-85ee-0eab7aa808a8.jpg.webp?ect=4g" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.tokopedia.net/img/cache/1200/BgtCLw/2023/10/10/3b993be0-d1b0-4455-a92d-3e087c2361d4.jpg.webp?ect=4g" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.tokopedia.net/img/cache/1200/BgtCLw/2023/8/14/d616b725-a1be-4e3f-b1cf-260feccaa3d3.jpg.webp?ect=4g" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-gray-200/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-gray-200/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="space-y-5">
                <h3 class="text-2xl font-semibold">Semua Product</h3>
                <div class="grid grid-cols-12 gap-3">
                    @foreach ($phones['data'] as $index => $phone)
                    <div class="col-span-6 md:col-span-4 lg:col-span-2 flex flex-col items-center justify-center rounded-xl shadow-xl max-w-[190px]">
                        <img src="{{$phone['primary_image']['thumbnail']}}" class="w-[190px] h-[190px]" alt="">
                        <div class="flex flex-col justify-start items-start gap-y-2 p-2">
                            <p class="text-sm truncate w-[170px]">{{$phone['name']}}</p>
                            <p class="font-bold text-lg">{{$phone['price']['text_idr']}}</p>
                            <div class="flex gap-x-1 text-sm font-light text-gray-400">
                                <span class="material-symbols-outlined text-yellow-300 -mt-1">
                                    star
                                    </span>
                                <p>{{$phone['stats']['averageRating'] ? $phone['stats']['averageRating'] : '0' }} | </p>
                                <p>{{$phone['label_groups'][0]['title'] ? $phone['label_groups'][0]['title'] : '0 terjual'}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="flex items-end justify-end gap-x-3 mt-5">
                    <p class="font-medium text-gray-400 pb-1">Jumlah produk per halaman</p>
                    <p class="bg-gray-500 text-white font-semibold py-1 px-2 rounded-lg">{{count($phones['data'])}}</p>
                </div>
            </div>

        </div>

        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
