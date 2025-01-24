<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCar Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bottom-0{
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
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
                    <li><a href="/dashboard/favorites" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">⭐ Favorites</a></li>
                    <li><a href="/about" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">✉️ Messages</a></li>
                    <li><a href="/listings" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">➕ My Listings</a></li>
                    <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">⚡ Subscription</a></li>
                    <li><a href="/account-settings" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-blue-500">⚙️ Account Settings</a></li>
                    <li><a href="#" class="flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-red-500">🚪 Log Out</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="bg-white shadow rounded-lg p-6">
                <!-- Title and Tabs -->
                <div class="flex justify-between items-center border-b pb-4">
                    <h1 class="text-2xl font-bold text-gray-800">My Listings</h1>
                    <div class="flex space-x-4">
                        <button class="px-4 py-2 border-b-2 border-blue-500 text-blue-500">Active</button>
                        <button class="px-4 py-2 text-gray-500 hover:text-blue-500">Archived</button>
                    </div>
                </div>

                <!-- Listing Card -->
                <div class="mt-6 flex items-center bg-gray-50 p-4 rounded-lg shadow">
                    <img src="car-image.jpg" alt="Car" class="w-32 h-20 rounded-lg object-cover">
                    <div class="ml-4 flex-1">
                        <h2 class="font-bold text-gray-800">Hyundai Solaris 2 Restyling, 2022</h2>
                        <p class="text-gray-600">$19,000 - USA</p>
                        <div class="flex space-x-4 mt-2 text-sm text-gray-500">
                            <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l9 9-9 9-9-9z"></path>
                                </svg>
                                <span>20 Views</span>
                            </span>
                            <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span>3 Messages</span>
                            </span>
                            <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l9 9-9 9-9-9z"></path>
                                </svg>
                                <span>32 Likes</span>
                            </span>
                        </div>
                    </div>
                    <button class="text-gray-500 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow mt-6">
        <div class="container mx-auto flex justify-between p-6">
            <p class="text-sm text-gray-500">&copy; YouCar. All rights reserved.</p>
            <div class="flex space-x-4 text-gray-600">
                <a href="#" class="hover:text-blue-500">Catalog</a>
                <a href="#" class="hover:text-blue-500">News</a>
                <a href="#" class="hover:text-blue-500">Contacts</a>
            </div>
        </div>
    </footer>
</div>
</html>
