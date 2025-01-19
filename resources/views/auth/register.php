<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Register for Car Dealership - Find your dream car and join our community">
    <meta name="keywords" content="car dealership, register, automotive, vehicles">
    <title>Register - Car Dealership</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./style.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header Section -->
    <header class="bg-slate-900 relative">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="index.html">
                            <img class="h-8 w-auto" src="https://cdn-images.dzcdn.net/images/cover/54a37c8606fffcb09794b9ce5887f56d/1900x1900-000000-80-0-0.jpg" alt="Car Dealership">
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="index.html" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-2xl font-medium">Home</a>
                        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-2xl font-medium">Catalog</a>
                        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-2xl font-medium">About</a>
                        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-2xl font-medium">Contact</a>
                    </div>
                </div>
                <div class="sm:hidden flex items-center">
                    <button type="button" class="text-gray-300 hover:text-white p-2" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div class="sm:hidden hidden absolute inset-x-0 top-16 bg-slate-900 z-50" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="index.html" class="text-gray-300 hover:text-white block px-3 py-4 rounded-md text-base font-medium">Home</a>
                    <a href="#" class="text-gray-300 hover:text-white block px-3 py-4 rounded-md text-base font-medium">Catalog</a>
                    <a href="#" class="text-gray-300 hover:text-white block px-3 py-4 rounded-md text-base font-medium">About</a>
                    <a href="#" class="text-gray-300 hover:text-white block px-3 py-4 rounded-md text-base font-medium">Contact</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Registration Form Section -->
    <main class="max-w-md mx-auto py-6 sm:py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white py-6 sm:py-8 px-4 sm:px-6 shadow rounded-lg sm:px-10">
            <h2 class="mb-4 sm:mb-6 text-center text-2xl sm:text-3xl font-extrabold text-gray-900">Create your account</h2>
            <form class="mb-0 space-y-6" action="#" method="POST" novalidate id="register-form" onsubmit="register()">
                <div>
                    <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <div class="mt-1">
                        <input id="full-name" name="full-name" type="text" required 
                            class="appearance-none block w-full px-4 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-base sm:text-sm"
                            minlength="2" maxlength="50">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required 
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <div class="mt-1">
                        <input id="phone" name="phone" type="tel" required
                            pattern="[0-9]{12}" 
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="998901234567">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required
                            minlength="8"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <div class="mt-1">
                        <input id="password-confirm" name="password-confirm" type="password" required
                            minlength="8"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-4 sm:py-2 px-4 border border-transparent rounded-md shadow-sm text-base sm:text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-slate-900 mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Contact Us</h3>
                    <p class="text-gray-300">Email: contact@cardealership.com</p>
                    <p class="text-gray-300">Phone: +1 234 567 890</p>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Services</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-300 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8">
                <p class="text-center text-gray-400">&copy; 2024 Car Dealership. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script src="script.js"></script>
    <script>
        async function register() {
            event.preventDefault();
            let form = document.getElementById("register-form"),
                formData = new FormData(form);
            const { default: apiFetch } = await import('/js/utils/allFetch.js');
            await apiFetch('/register', {
                method: "Post",
                body: formData
            }).then(data =>{
                localStorage.setItem('token', data.token);
                window.location.href='/home';
            })
                .catch((error)=>{
                    console.error(error.data.errors);
                    document.getElementById('error').innerHTML = "";
                    Object.keys(error.data.errors).forEach(err => {
                        document.getElementById('error').innerHTML += `
                <p class="text-red-500 mt-1">${error.data.errors[err]}</p>`;

                    })
                });
        }

    </script>
</body>
</html>

