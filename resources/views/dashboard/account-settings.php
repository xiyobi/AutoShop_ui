<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCar Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">
        <h1 class="text-lg font-bold text-blue-600">YouCar</h1>
        <nav class="flex items-center gap-4">
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-500">Home</a>
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-500">Catalog</a>
            <a href="#" class="text-sm font-medium text-gray-600 hover:text-blue-500">Contacts</a>
            <div class="flex items-center gap-2">
                <span class="text-sm text-gray-600">Khamzat Kuseinovich</span>
                <div class="w-8 h-8 rounded-full bg-gray-300"></div>
            </div>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto grid grid-cols-12 gap-6 px-4 py-6">
    <!-- Sidebar -->
    <aside class="col-span-3 bg-white shadow rounded-lg p-4">
        <div class="flex items-center gap-2 mb-6">
            <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
            <div>
                <p class="text-sm font-medium">Khamzat Kuseinovich</p>
                <p class="text-xs text-gray-500">Rating: 5.0</p>
            </div>
        </div>
        <ul class="space-y-4">
            <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">⭐ Favorites</a></li>
            <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">✉️ Messages</a></li>
            <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">➕ Post an Ad</a></li>
            <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">⚡ Subscription</a></li>
            <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">⚙️ Account Settings</a></li>
            <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-red-500">🚪 Log Out</a></li>
        </ul>
    </aside>

    <!-- Settings Content -->
    <main class="col-span-9 bg-white shadow rounded-lg p-6">
        <h2 class="text-lg font-medium mb-6">Settings</h2>

        <!-- Account Settings -->
        <section class="mb-6">
            <h3 class="text-sm font-semibold mb-4">Account</h3>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-xs text-gray-500">Name</label>
                    <input type="text" value="Khamzat Kuseinovich" class="w-full border-gray-300 rounded-md shadow-sm mt-1">
                </div>
                <div>
                    <label class="text-xs text-gray-500">E-mail</label>
                    <input type="email" value="khamzat.arslanaliyev@mail.ru" class="w-full border-gray-300 rounded-md shadow-sm mt-1">
                </div>
            </div>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm rounded-md hover:bg-blue-600">Save</button>
        </section>

        <!-- Password Change -->
        <section>
            <h3 class="text-sm font-semibold mb-4">Change Password</h3>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="text-xs text-gray-500">Current Password</label>
                    <input type="password" class="w-full border-gray-300 rounded-md shadow-sm mt-1">
                </div>
                <div>
                    <label class="text-xs text-gray-500">New Password</label>
                    <input type="password" class="w-full border-gray-300 rounded-md shadow-sm mt-1">
                </div>
                <div>
                    <label class="text-xs text-gray-500">Confirm Password</label>
                    <input type="password" class="w-full border-gray-300 rounded-md shadow-sm mt-1">
                </div>
            </div>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white text-sm rounded-md hover:bg-blue-600">Save</button>
        </section>
    </main>
</div>

<!-- Footer -->
<footer class="bg-white shadow mt-6">
    <div class="container mx-auto px-4 py-4 text-sm text-gray-600">
        <p>© 2025 YouCar. Made with ❤️ by UserTech</p>
    </div>
</footer>
</body>
</html>
