<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css') }}/main.css">
</head>
<body>

    <nav class="shadow-lg flex items-center w-full h-16 mb-16">
        <div class="container mx-auto flex items-center justify-between px-5">
            <div>
                <a href="/" class="text-xl">Online Storage</a>
            </div>
            <ul class="flex items-center">
                <li><a href="" class="mr-10">Sign In</a></li>
                <li><a href="" class="rounded px-3 py-2 bg-blue-500 text-white transition duration-150 ease-in-out hover:bg-blue-600">Sign Up</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container mx-auto px-5">
        @yield('content')
    </div>

    <footer class="bg-gray-900 py-8">
        <div class="container mx-auto px-5">
            <div class="grid grid-cols-2 gap-24">
                <div>
                    <p class="text-4xl text-white">Online Storage</p>
                    <p class="text-gray-300 mt-2">Website that provide storage services for user.</p>
                    <p class="text-white mt-6 text-lg">Primary Features</p>
                    <ul class="mt-3">
                        <li class="text-white flex items-center">
                            <img src="{{ asset('icon') }}/storage.png" alt="Online Storage" width="18" class="mr-3">
                            Secondary Storage
                        </li>
                        <li class="text-white flex items-center mt-2">
                            <img src="{{ asset('icon') }}/backup.png" alt="Online Storage" width="18" class="mr-3">
                            Backup Your Documents
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="text-4xl text-white">Website Copyright</p>
                    <p class="text-gray-300 mt-2">This website is made for educational purpose, use it wisely.</p>
                    <p class="text-white mt-6 text-lg">Website creator social page</p>
                    <ul class="mt-3">
                        <li class="text-white">
                            <a href="https://instagram.com/stanleyclaudius" target="_blank" class="flex items-center text-lg">
                                <img src="{{ asset('icon') }}/instagram.png" alt="Online Storage" width="18" class="mr-3">
                                stanleyclaudius
                            </a>
                        </li>
                        <li class="text-white mt-2">
                            <a href="https://github.com/stanleyclaudius" target="_blank" class="flex items-center text-lg">
                                <img src="{{ asset('icon') }}/github.png" alt="Online Storage" width="18" class="mr-3">
                                stanleyclaudius
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
@yield('script')
</body>
</html>