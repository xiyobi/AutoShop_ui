<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Motorcycles</title>
</head>

<body class="bg-gray-100">

<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="/"><h1 id="header-title" class="text-xl font-bold">YourAuto</h1></a>
        <nav>
            <ul class="flex items-center gap-4 space-x-4">
                <li><a href="/" id="home-link" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="/about" id="about-link" class="text-gray-700 hover:text-blue-500">About Us</a></li>
                <li><a href="#" id="contact-link" class="text-gray-700 hover:text-blue-500">Contact</a></li>
                <div class="flex items-center">
                    <label for="language-switcher"></label><select id="language-switcher" class="bg-white text-gray-700 p-2 rounded">
                        <option value="en" selected>English</option>
                        <option value="uz">O'zbekcha</option>
                    </select>
                </div>
            </ul>
        </nav>
    </div>
</header>

<div class="max-w-screen-xl mx-auto p-4">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Motorcycles</h1>
    <div class="bg-white p-4 rounded shadow">
        <div class="flex space-x-4 mb-4">
            <button class="px-4 py-2 bg-gray-900 text-white rounded hover:bg-gray-800">All</button>
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">New</button>
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Used</button>
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">In Stock</button>
            <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">On Order</button>
        </div>
        <div class="grid grid-cols-6 gap-4 mb-4">
            <select class="col-span-1 px-3 py-2 border rounded">
                <option>Brand</option>
            </select>
            <select class="col-span-1 px-3 py-2 border rounded">
                <option>Model</option>
            </select>
            <select class="col-span-1 px-3 py-2 border rounded">
                <option>Country</option>
            </select>
            <input type="text" placeholder="0 - 2024" class="col-span-1 px-3 py-2 border rounded" />
            <input type="text" placeholder="0 - 0" class="col-span-1 px-3 py-2 border rounded" />
            <button class="col-span-1 bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-800">Search</button>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-4 rounded shadow">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh1eHA6oqIndVaJ5p7sHhokwcFg6keUi9kfw&s"
                 alt="Motorcycle" class="rounded mb-4">
            <h2 class="text-lg font-bold">Hyundai Solaris 2 Restyling, 2022</h2>
            <p class="text-gray-500">19,000 $</p>
            <p class="text-sm text-gray-500">35,000 km • Robot • Front-wheel drive</p>
            <p class="text-sm text-gray-500">1.4/100 HP/Gasoline • USA</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh1eHA6oqIndVaJ5p7sHhokwcFg6keUi9kfw&s"
                 alt="Motorcycle" class="rounded mb-4">
            <h2 class="text-lg font-bold">Hyundai Solaris 2 Restyling, 2022</h2>
            <p class="text-gray-500">19,000 $</p>
            <p class="text-sm text-gray-500">35,000 km • Robot • Front-wheel drive</p>
            <p class="text-sm text-gray-500">1.4/100 HP/Gasoline • USA</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh1eHA6oqIndVaJ5p7sHhokwcFg6keUi9kfw&s"
                 alt="Motorcycle" class="rounded mb-4">
            <h2 class="text-lg font-bold">BMW 740</h2>
            <p class="text-gray-500">160,000 $</p>
            <p class="text-sm text-gray-500">35,000 km • Robot • All-wheel drive</p>
            <p class="text-sm text-gray-500">1.4/100 HP/Gasoline • Europe</p>
        </div>
    </div>
</div>

<footer class="bg-gray-800 text-white py-12 mt-4">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Site Navigation -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4">
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
                <h3 class="text-xl font-semibold mb-4">
                    <span class="lang-en">Follow Us</span>
                    <span class="lang-ru">Мы в соцсетях</span>
                    <span class="lang-uz">Bizni kuzating</span>
                </h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="..."></path>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="..."></path>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="..."></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Legal -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4">
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
                <h3 class="text-xl font-semibold mb-4">
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
</body>

</html>
