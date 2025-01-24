<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Register for Car Dealership - Find your dream car and join our community">
    <meta name="keywords" content="car dealership, register, automotive, vehicles">
    <title>Register - Car Dealership</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    <!-- Header Section -->

    <!-- Registration Form Section -->
    <main class="max-w-md mx-auto py-6 sm:py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white py-6 sm:py-8 px-4 sm:px-6 shadow rounded-lg sm:px-10">
            <h2 class="mb-4 sm:mb-6 text-center text-2xl sm:text-3xl font-extra bold text-gray-900">Create your account</h2>
            <form class="mb-0 space-y-6" action="/account-settings" method="POST" novalidate id="register-form" onsubmit="register()">
                <div>
                    <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <div class="mt-1">
                        <input id="full_name" name="full_name" type="text" required
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
                        <label for="phone_number">

                        </label><input id="phone_number" name="phone_number" type="tel" required
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

