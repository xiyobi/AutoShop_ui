<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 py-12">
<!-- Header -->
<header class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4">
        <h1 class="text-2xl font-bold text-blue-600">YouCar</h1>
        <nav>
            <ul class="flex space-x-6 text-gray-700">
                <li><a href="#" class="hover:text-blue-600">Home</a></li>
                <li><a href="#" class="hover:text-blue-600">Catalog</a></li>
                <li><a href="#" class="hover:text-blue-600">About Us</a></li>
                <li><a href="#" class="hover:text-blue-600">News</a></li>
                <li><a href="#" class="hover:text-blue-600">Contacts</a></li>
            </ul>
        </nav>
        <div class="flex items-center space-x-4">
            <label for="language-selector"></label><select class="border border-gray-300 rounded-md p-2" id="language-selector">
                <option value="en">English</option>
                <option value="ru">Русский</option>
                <option value="uz">Oʻzbek</option>
            </select>
            <a href="/login" class="text-sm font-medium text-gray-700 hover:text-blue-600">Login</a>
            <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Sign Up</a>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-blue-100 py-12 mx-auto">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">NEW GEELY MONJARO!</h2>
            <p class="text-gray-700 mb-6">Comfort. Softness. Brilliance. Geely's model stands out with design, materials, and technology.</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Learn More</a>
        </div>
<!--            <img src="https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/3c5d91ad-f15a-4645-afa9-4b158a2ccbda/7c0f1f2e1303456088b15eb4c90a45a5.jpeg" alt="Geely Monjaro" class="w-full rounded-lg shadow-md">-->

            <!-- This is an example component -->
            <div class="md:w-1/2 mt-8 md:mt-0 ">

                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                            <img src="https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/3c5d91ad-f15a-4645-afa9-4b158a2ccbda/7c0f1f2e1303456088b15eb4c90a45a5.jpeg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            <a href="/product-card"></a>
                        </div>

                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://static.vecteezy.com/system/resources/thumbnails/023/192/562/small_2x/sport-car-running-on-the-road-in-future-city-created-with-generative-ai-free-photo.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4Sqy_Jx2ZJVmI60I_3fvj7TcNsCGFWuRPcA&s" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>

                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
                    </button>
                </div>
                <p class="mt-5">This carousel slider component is part of a larger, open-source library of Tailwind CSS components. Learn
                    more
                    by going to the official <a class="text-blue-600 hover:underline"
                                                href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite Documentation</a>.
                </p>

                <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
            </div>
        </div>
</section>

<!-- Car Selection -->
<section class="container mx-auto py-12">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Car Selection</h2>
    <div class="bg-white shadow-md rounded-lg p-6">
        <form class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <label>
                <select class="border border-gray-300 rounded-md p-2">
                    <option>Geely</option>
                    <option>Hyundai</option>
                    <option>BMW</option>
                </select>
            </label>
            <label>
                <select class="border border-gray-300 rounded-md p-2">
                    <option>Manjaro</option>
                    <option>Solaris</option>
                    <option>Series 7</option>
                </select>
            </label>
            <label>
                <select class="border border-gray-300 rounded-md p-2">
                    <option>China</option>
                    <option>Germany</option>
                    <option>South Korea</option>
                </select>
            </label>
            <label>
                <input type="number" placeholder="Year" class="border border-gray-300 rounded-md p-2">
            </label>
            <label>
                <input type="text" placeholder="Price" class="border border-gray-300 rounded-md p-2">
            </label>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Search</button>
        </form>
    </div>
</section>

<!-- Car Catalog -->
<section class="container mx-auto py-12">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Car Catalog</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Car Item -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/3c5d91ad-f15a-4645-afa9-4b158a2ccbda/7c0f1f2e1303456088b15eb4c90a45a5.jpeg" alt="Car 3" class="w-full rounded-lg mb-4"><h3 class="text-lg font-bold text-gray-900">Mercedes-Benz S-Class</h3></a>
            <h3 class="text-lg font-bold text-gray-900">Hyundai Solaris 2022</h3>
            <p class="text-gray-700">19,000 $</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/3c5d91ad-f15a-4645-afa9-4b158a2ccbda/7c0f1f2e1303456088b15eb4c90a45a5.jpeg" alt="Car 3" class="w-full rounded-lg mb-4"><h3 class="text-lg font-bold text-gray-900">Mercedes-Benz S-Class</h3></a>
            <h3 class="text-lg font-bold text-gray-900">BMW 740</h3>
            <p class="text-gray-700">160,000 $</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/3c5d91ad-f15a-4645-afa9-4b158a2ccbda/7c0f1f2e1303456088b15eb4c90a45a5.jpeg" alt="Car 3" class="w-full rounded-lg mb-4"><h3 class="text-lg font-bold text-gray-900">Mercedes-Benz S-Class</h3></a>

            <p class="text-gray-700">180,000 $</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/3c5d91ad-f15a-4645-afa9-4b158a2ccbda/7c0f1f2e1303456088b15eb4c90a45a5.jpeg" alt="Car 3" class="w-full rounded-lg mb-4"><h3 class="text-lg font-bold text-gray-900">Mercedes-Benz S-Class</h3></a>
            <h3 class="text-lg font-bold text-gray-900">Kia K5 2021</h3>
            <p class="text-gray-700">35,000 $</p>
        </div>
    </div>
</section>

<div class="bg-gray-50">
    <!-- Why Us Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Почему мы?</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="https://m.media-amazon.com/images/I/51AoyitYeNL._AC_SL1001_.jpg" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Гарантия на все товары</h3>
                    <p class="text-gray-600">Надежность под ключ</p>
                </div>
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxQhMxmEcFMBdxMefSIBmPPDNGks5BwhD7EA&s" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Онлайн 24/7</h3>
                    <p class="text-gray-600">Всегда готовы помочь</p>
                </div>
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="https://thumbs.dreamstime.com/b/car-f-342924264.jpg" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Удобный выбор авто</h3>
                    <p class="text-gray-600">Широкий ассортимент</p>
                </div>
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="https://pgs.uz/imagess/delivery_3.png" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Доставка авто</h3>
                    <p class="text-gray-600">Быстро и надежно</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-4">О нашей компании</h2>
                <p class="text-gray-600 mb-6">
                    Мы предлагаем широкий выбор автомобилей и аксессуаров. Выберите качество и надежность с нами!
                </p>
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg">Подробнее</button>
            </div>
            <div class="text-center py-12">
                <img src="https://arton.uz/_next/image?url=%2Fimages%2Fflex-slider%2Fimg3.png&w=3840&q=100" alt="Company" class="mx-auto">
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Наши бренды</h2>
            <div class="grid grid-cols-3 md:grid-cols-6 gap-6 py-6">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
                <img src="https://www.autocarbrands.com/wp-content/uploads/2014/04/mercedesbenzlogo.jpg" alt="Brand" class="mx-auto">
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Новости</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-100 shadow-lg rounded-lg p-6">
                    <img src="https://www.shutterstock.com/image-photo/full-length-smiling-siblings-sitting-260nw-1895365093.jpg" alt="News" class="rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Новость 1</h3>
                    <p class="text-gray-600 mb-4">Краткое описание новости.</p>
                    <a href="#" class="text-blue-600 hover:underline">Подробнее</a>
                </div>
                <div class="bg-gray-100 shadow-lg rounded-lg p-6">
                    <img src="https://www.shutterstock.com/image-photo/full-length-smiling-siblings-sitting-260nw-1895365093.jpg" alt="News" class="rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Новость 2</h3>
                    <p class="text-gray-600 mb-4">Краткое описание новости.</p>
                    <a href="#" class="text-blue-600 hover:underline">Подробнее</a>
                </div>
                <div class="bg-gray-100 shadow-lg rounded-lg p-6">
                    <img src="https://www.shutterstock.com/image-photo/full-length-smiling-siblings-sitting-260nw-1895365093.jpg" alt="News" class="rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Новость 3</h3>
                    <p class="text-gray-600 mb-4">Краткое описание новости.</p>
                    <a href="#" class="text-blue-600 hover:underline">Подробнее</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Отзывы</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://www.gazeta.uz/media/img/2024/07/tk20vf17204152077436_l.jpg" alt="user_picture">
                    <h3 class="text-lg font-semibold mb-2">Имя клиента</h3>
                    <p class="text-gray-600 mb-4">Отзыв клиента.</p>
                    <div class="flex space-x-1">
                        <span class="text-yellow-500">⭐</span>
                        <span class="text-yellow-500">⭐</span>
                        <span class="text-yellow-500">⭐</span>
                        <span class="text-yellow-500">⭐</span>
                        <span class="text-gray-300">⭐</span>
                    </div>
                </div>
                <!-- Repeat for other reviews -->
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Site Navigation -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-nav">
                    <span class="lang-en">Navigation</span>
                    <span class="lang-ru">Навигация</span>
                    <span class="lang-uz">Navigatsiya</span>
                </h3>
                <ul class="space-y-2">
                    <li><a href="/catalog" class="hover:text-blue-400">
                        <span class="lang-en">Catalog</span>
                        <span class="lang-ru">Каталог</span>
                        <span class="lang-uz">Katalog</span>
                    </a></li>
                    <li><a href="/about" class="hover:text-blue-400">
                        <span class="lang-en">About Us</span>
                        <span class="lang-ru">О нас</span>
                        <span class="lang-uz">Biz haqimizda</span>
                    </a></li>
                    <li><a href="/contacts" class="hover:text-blue-400">
                        <span class="lang-en">Contacts</span>
                        <span class="lang-ru">Контакты</span>
                        <span class="lang-uz">Kontaktlar</span>
                    </a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-social">
                    <span class="lang-en">Follow Us</span>
                    <span class="lang-ru">Мы в соцсетях</span>
                    <span class="lang-uz">Bizni kuzating</span>
                </h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Legal -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-legal">
                    <span class="lang-en">Legal</span>
                    <span class="lang-ru">Правовая информация</span>
                    <span class="lang-uz">Huquqiy ma'lumot</span>
                </h3>
                <ul class="space-y-2">
                    <li><a href="/privacy" class="hover:text-blue-400">
                        <span class="lang-en">Privacy Policy</span>
                        <span class="lang-ru">Политика конфиденциальности</span>
                        <span class="lang-uz">Maxfiylik siyosati</span>
                    </a></li>
                    <li><a href="/terms" class="hover:text-blue-400">
                        <span class="lang-en">Terms of Service</span>
                        <span class="lang-ru">Условия использования</span>
                        <span class="lang-uz">Foydalanish shartlari</span>
                    </a></li>
                </ul>
            </div>

            <!-- Language Selection -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-language">
                    <span class="lang-en">Language</span>
                    <span class="lang-ru">Язык</span>
                    <span class="lang-uz">Til</span>
                </h3>
                <select
                        id="footer-language-selector"
                        class="bg-gray-700 text-white border border-gray-600 rounded px-4 py-2 w-full"
                        aria-label="Select Language"
                >
                    <option value="en">English</option>
                    <option value="ru">Русский</option>
                    <option value="uz">O'zbek</option>
                </select>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-12 pt-8 border-t border-gray-700 text-sm text-gray-400">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p>© 2024 YouCar. All rights reserved.</p>
                <p class="mt-4 md:mt-0">
                    <span class="lang-en">Designed & Developed by YouCar Team</span>
                    <span class="lang-ru">Дизайн и разработка команды YouCar</span>
                    <span class="lang-uz">YouCar jamoasi tomonidan ishlab chiqilgan</span>
                </p>
            </div>
        </div>
    </div>
</footer>


<script>
    const languageSelector = document.getElementById('language-selector');
    languageSelector.addEventListener('change', (event) => {
        const selectedLanguage = event.target.value;
        alert(`Selected language: ${selectedLanguage}`);
        // Add logic here for updating the page language dynamically
    });
</script>
</body>
</html>


