<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css') }}/main.css">
</head>
<body>

    <nav class="shadow-lg flex items-center w-full h-16">
        <div class="container mx-auto flex items-center justify-between px-5">
            <div>
                <a href="/" class="text-xl">Online Storage</a>
            </div>
            <ul class="flex items-center">
                <li><a href="" class="mr-10">Sign In</a></li>
                <li><a href="" class="rounded px-3 py-2 bg-blue-500 text-white">Sign Up</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container mx-auto px-5">
        @yield('content')
    </div>
    
@yield('script')
</body>
</html>