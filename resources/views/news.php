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
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4">
            <a href="/"><h1 class="text-2xl font-bold text-blue-600">YouCar</h1></a>
            <nav>
                <ul class="flex space-x-6 text-gray-700">
                    <li><a href="/" class="hover:text-blue-600">Home</a></li>
                    <li><a href="/catalog" class="hover:text-blue-600">Catalog</a></li>
                    <li><a href="/news" class="hover:text-blue-600">News</a></li>
                    <li><a href="/contacts" class="hover:text-blue-600">Contacts</a></li>
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


    <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-4xl font-semibold tracking-tight text-white">Subscribe to our newsletter</h2>
                    <p class="mt-4 text-lg text-gray-300">Nostrud amet eu ullamco nisi aute in ad minim nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
                    <div class="mt-6 flex max-w-md gap-x-4">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" placeholder="Enter your email">
                        <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
                    </div>
                </div>
                <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>
                        <dt class="mt-4 text-base font-semibold text-white">Weekly articles</dt>
                        <dd class="mt-2 text-base/7 text-gray-400">Non laboris consequat cupidatat laborum magna. Eiusmod non irure cupidatat duis commodo amet.</dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                            </svg>
                        </div>
                        <dt class="mt-4 text-base font-semibold text-white">No spam</dt>
                        <dd class="mt-2 text-base/7 text-gray-400">Officia excepteur ullamco ut sint duis proident non adipisicing. Voluptate incididunt anim.</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="absolute top-0 left-1/2 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-1155/678 w-[72.1875rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4">
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
                    <a href="/catalog" class="hover:text-blue-500">Catalog</a>
                    <a href="/news" class="hover:text-blue-500">News</a>
                    <a href="/contacts" class="hover:text-blue-500">Contacts</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</html>
