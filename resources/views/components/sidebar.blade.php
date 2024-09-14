<!-- File: resources/views/components/sidebar.blade.php -->
<div class="flex flex-col w-64 bg-indigo-800 min-h-screen">
    <div class="flex items-center justify-center h-16 bg-indigo-900">
        <span class="text-white text-2xl font-semibold">Admin Panel</span>
    </div>
    <nav class="flex-grow">
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center px-6 py-3 text-white hover:bg-indigo-700 {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-700' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>
        <a href="{{ route('admin.users.index') }}"
            class="flex items-center px-6 py-3 text-white hover:bg-indigo-700 {{ request()->routeIs('admin.users.*') ? 'bg-indigo-700' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Users
        </a>
        <!-- Add more menu items as needed -->
    </nav>
</div>
