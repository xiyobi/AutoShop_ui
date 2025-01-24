<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Interfeys</title>
</head>

<body class="bg-gray-100">

<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="/">  <h1 id="header-title" class="text-xl font-bold">YourAuto</h1></a>
        <nav>
            <ul class="flex items-center gap-4 space-x-4">
                <li><a href="#" id="home-link" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" id="catalog-link" class="text-gray-700 hover:text-blue-500">Catalog</a></li>
                <li><a href="/about" id="about-link" class="text-gray-700 hover:text-blue-500">About Us</a></li>
                <li><a href="#" id="contact-link" class="text-gray-700 hover:text-blue-500">Contact</a></li>
                <div class="flex items-center">
                    <select id="language-switcher" class="bg-white text-gray-700 p-2 rounded">
                        <option value="en" selected>English</option>
                        <option value="uz">O'zbekcha</option>
                    </select>
                </div>
            </ul>
        </nav>
    </div>
</header>
<div class="flex h-screen">
    <div class="bg-white w-64 p-4 shadow-md">
        <div class="text-center">
            <div class="w-16 h-16 mx-auto rounded-full bg-gray-300 flex items-center justify-center text-xl font-bold">
                XX
            </div>
            <h2 class="mt-2 font-bold text-gray-700 text-sm">Хамзат Хусейинович Арсланов</h2>
            <p class="text-xs text-gray-500">Рейтинг: 5.0</p>
        </div>
        <div class="mt-4">
            <p class="text-sm text-gray-700">E-mail</p>
            <p class="text-sm font-medium text-blue-500">khamzat.arslanaliyev@mail.ru</p>
        </div>
        <div class="mt-2">
            <p class="text-sm text-gray-700">Тариф</p>
            <p class="text-sm font-medium flex items-center text-blue-500">
                Базовый тариф
                <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </p>
        </div>
        <nav class="mt-6 space-y-4">
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 text-sm">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21l-6-6m0 0L9 3" />
                </svg>
                Избранное
            </a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 text-sm">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h6m5 4H5" />
                </svg>
                Сообщения
            </a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 text-sm">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8" />
                </svg>
                Разместить объявление
            </a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 text-sm">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7m-7 0v10" />
                </svg>
                Настройки аккаунта
            </a>
        </nav>
        <button class="mt-6 w-full py-2 text-white bg-red-500 hover:bg-red-600 rounded text-sm">
            Выйти
        </button>
    </div>

    <div class="flex-1 p-4">
        <h1 class="text-xl font-bold text-gray-700">Сообщения</h1>
        <div class="mt-4 space-y-4">
            <div class="bg-white p-4 rounded shadow flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-700">Александр Петров</p>
                    <p class="text-sm text-gray-500">Здравствуйте, цена окончательная?</p>
                </div>
                <span class="text-xs text-gray-400">10:54 AM</span>
            </div>
            <div class="bg-white p-4 rounded shadow flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-700">Сергей Иванович</p>
                    <p class="text-sm text-gray-500">Хорошо!</p>
                </div>
                <span class="text-xs text-gray-400">10:56 AM</span>
            </div>
            <div class="bg-white p-4 rounded shadow flex justify-between items-center">
                <div>
                    <p class="font-medium text-gray-700">Сергей Иванович</p>
                    <p class="text-sm text-gray-500">Ладно</p>
                </div>
                <span class="text-xs text-gray-400">10:58 AM</span>
            </div>
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
