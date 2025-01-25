<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCar Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex items-center justify-between p-4">
            <nav class="flex space-x-6 text-gray-600">
                <a href="#" class="hover:text-blue-500">Home</a>
                <a href="#" class="hover:text-blue-500">Catalog</a>
                <a href="#" class="hover:text-blue-500">About Us</a>
                <a href="#" class="hover:text-blue-500">Contacts</a>
            </nav>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search" class="border rounded-lg px-4 py-2">
                <span class="text-gray-600">+7 (777) 777-77-77</span>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-600">Khazmat Arslaniyev</span>
                    <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto flex p-6 space-x-6">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white p-6 shadow rounded-lg">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                <div>
                    <h2 class="font-bold text-gray-800">Khazmat Arslaniyev</h2>
                    <p class="text-sm text-gray-500">Rating: 5.0</p>
                </div>
            </div>
            <p class="mt-4 text-sm text-gray-500">khamzat.arslaniyev@mail.ru</p>
            <p class="mt-2 text-blue-500">Basic Plan</p>
            <nav class="mt-6 space-y-4 text-gray-600">
                <ul class="space-y-4">
                    <?php require '../resources/views/components/sidebar.php'; ?>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="bg-white shadow rounded-lg p-6">
                <!-- Title and Tabs -->
                <div class="flex justify-between items-center border-b pb-4">
                    <h2 class="text-lg font-medium mb-6">Favorites</h2>
                    <!-- Password Change -->
                    <section class="w-3/4 bg-white shadow rounded p-6 text-center">
                        <p class="text-gray-500">No saved ads</p>
                        <p class="text-gray-500 mb-6">To add a car to favorites, click the heart icon on the car card!</p>
                        <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Go to Catalog</a>
                    </section>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
<footer class="bg-gray-800 text-white py-12 bottom-0">
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
</div>
</html>
