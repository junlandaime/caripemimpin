<!-- File: resources/views/components/footer.blade.php -->
<footer class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="text-gray-500 text-sm">
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </div>
            <div class="flex space-x-6">
                <a href="{{ route('about') }}" class="text-gray-500 hover:text-gray-700 text-sm">About</a>
                <a href="{{ route('contact') }}" class="text-gray-500 hover:text-gray-700 text-sm">Contact</a>
                <a href="{{ route('privacy') }}" class="text-gray-500 hover:text-gray-700 text-sm">Privacy</a>
                <a href="{{ route('terms') }}" class="text-gray-500 hover:text-gray-700 text-sm">Terms</a>
            </div>
        </div>
    </div>
</footer>
