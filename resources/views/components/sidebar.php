<aside class="bg-white w-64 min-h-screen flex flex-col shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in fixed md:static z-30" id="sidebar">
    <div class="p-4 border-b flex items-center justify-between">
        <div>
            <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                <i class="fas fa-close text-xl"></i>
            </button>
        </div>
    </div>
    <nav class="flex-grow p-4" id="sideBar"></nav>
</aside>
<script>
    let sideBarItem = [
        {
            'name': 'Dashboard',
            'uri': '/dashboard',
            'icon': 'fas fa-home mr-2'
        },
        {
            'name': '⭐ Favorites',
            'uri': '/dashboard/favorites',
            'icon': 'fas fa-chart-bar mr-2'

        },
        {
            'name': '✉️ Messages',
            'uri': '/dashboard/messages',
            'icon': 'fas fa-chart-bar mr-2'
        },
        {
            'name': '⚙️ Account-Settings',
            'uri': '/dashboard/account-settings',
            'icon': 'fas fa-plus mr-2'

        },

        {
            'name': '➕ My Listings',
            'uri': '/dashboard/listings',
            'icon': 'fas fa-chart-bar mr-2'

        },

        {
            'name': '🚪 Log Out',
            'uri': '/dashboard/logout',
            'icon': 'fas fa-chart-bar mr-2'

        }

    ];

    let sideBar = document.getElementById('sideBar');
    sideBarItem.forEach(item => {
        let isActive = window.location.pathname === item.uri ? 'bg-gray-100' : 'hover:bg-gray-100';
        sideBar.innerHTML += `<a href="${item.uri}" class="block p-3 mb-2 text-gray-600 ${isActive} rounded-lg">
                <i class="${item.icon}"></i> ${item.name}</a>`;

    });

</script>