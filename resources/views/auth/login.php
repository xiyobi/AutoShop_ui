<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Car Dealership</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 min-h-screen flex flex-col">
    <main class="flex-grow container mx-auto px-4 py-8 flex items-center justify-center md:py-12">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8 md:p-12">
            <h2 class="text-2xl font-bold text-center mb-8">Login to Your Account</h2>
            
            <form id="login-form" class="space-y-6" novalidate onsubmit="login()">
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" 
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        required
                        autocomplete="email">
                    <span class="hidden text-red-500 text-sm mt-1" id="emailError">Please enter a valid email address</span>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        required
                        minlength="8"
                        autocomplete="current-password">
                    <span class="hidden text-red-500 text-sm mt-1" id="passwordError">Password is required</span>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot password?</a>
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Sign in
                    </button>
                </div>

                <!-- Register Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="/register" class="font-medium text-blue-600 hover:text-blue-500">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </main>


    <script>
        async function login() {
            event.preventDefault();
            let form = document.getElementById("login-form"),
                formData = new FormData(form);
            const { default: apiFetch } = await import('/js/utils/allFetch.js');
            await apiFetch('/login', {
                method: "Post",
                body: formData
            }).then(data =>{
                localStorage.setItem('token', data.token);
                window.location.href='/dashboard';
            })
        }

    </script>

    <script>

        // Mobile menu toggle
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Form validation
        const form = document.querySelector('form');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let isValid = true;

            // Email validation
            if (!emailInput.value || !emailInput.value.includes('@')) {
                emailError.classList.remove('hidden');
                isValid = false;
            } else {
                emailError.classList.add('hidden');
            }

            // Password validation
            if (!passwordInput.value || passwordInput.value.length < 8) {
                passwordError.classList.remove('hidden');
                isValid = false;
            } else {
                passwordError.classList.add('hidden');
            }

            if (isValid) {
                // Handle form submission
                console.log('Form submitted successfully');
            }
        });
    </script>
</body>
</html>

