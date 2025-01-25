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
                    <li><a href="#" class="hover:text-blue-600">News</a></li>
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

    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Contact sales</h2>
            <p class="mt-2 text-lg/8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim voluptate.</p>
        </div>
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm/6 font-semibold text-gray-900">Company</label>
                    <div class="mt-2.5">
                        <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Phone number</label>
                    <div class="mt-2.5">
                        <div class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                            <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                                <select id="country" name="country" autocomplete="country" aria-label="Country" class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pr-7 pl-3.5 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    <option>US</option>
                                    <option>CA</option>
                                    <option>EU</option>
                                </select>
                                <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" name="phone-number" id="phone-number" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="123-456-7890">
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
                    </div>
                </div>
                <div class="flex gap-x-4 sm:col-span-2">
                    <div class="flex h-6 items-center">
                        <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                        <button type="button" class="flex w-8 flex-none cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-gray-900/5 transition-colors duration-200 ease-in-out ring-inset focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                            <span class="sr-only">Agree to policies</span>
                            <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                            <span aria-hidden="true" class="size-4 translate-x-0 transform rounded-full bg-white ring-1 shadow-xs ring-gray-900/5 transition duration-200 ease-in-out"></span>
                        </button>
                    </div>
                    <label class="text-sm/6 text-gray-600" id="switch-1-label">
                        By selecting this, you agree to our
                        <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                    </label>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
            </div>
        </form>
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
                    <div class="flex space-x-4 text-gray-600">
                        <a href="#" class="hover:text-blue-500">Catalog</a>
                        <a href="#" class="hover:text-blue-500">News</a>
                        <a href="#" class="hover:text-blue-500">Contacts</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</div>
</html>
