<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'caripemimpin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4a90e2',
                        secondary: '#f39c12',
                    }
                },
            },
        }
    </script>
</head>

<body class="font-sans bg-gray-100 lg:px-36">
    <main class="py-8">
        @yield('content')
    </main>
</body>

</html>
