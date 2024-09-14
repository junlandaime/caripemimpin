<!-- File: resources/views/components/navbar.blade.php -->
<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('home') }}"
                        class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Home
                    </a>
                    <a href="{{ route('games.index') }}"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Games
                    </a>
                    <a href="{{ route('content.index') }}"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Content
                    </a>
                    <a href="{{ route('leaderboard.index') }}"
                        class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Leaderboard
                    </a>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.show')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}"
                        class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Log in</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
