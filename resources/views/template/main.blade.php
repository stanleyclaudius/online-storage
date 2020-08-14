<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css') }}/main.css">
</head>
<body>

    <nav class="shadow-lg flex items-center w-full h-20 mb-16">
        <div class="container mx-auto flex items-center justify-between px-5">
            <div>
                <a href="/" class="text-2xl">Online Storage</a>
            </div>
            <ul class="flex items-center">
                @yield('navlink')
            </ul>
        </div>
    </nav>
    
    <div class="container mx-auto px-5">
        @yield('content')
    </div>

    <footer class="bg-gray-900 py-8">
        <div class="container mx-auto px-10 sm:px-10 md:px-5 lg:px-5">
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 sm:gap-12 md:gap-24 lg:gap-24">
                <div>
                    <p class="text-4xl text-white">Online Storage</p>
                    <p class="text-gray-300 mt-2">Website that provide storage services for user.</p>
                    <p class="text-white mt-6 text-lg">Primary Features</p>
                    <ul class="mt-3">
                        <li class="text-white flex items-center">
                            <img src="{{ asset('icon') }}/footer/storage.png" alt="Online Storage" class="mr-3">
                            Secondary Storage
                        </li>
                        <li class="text-white flex items-center mt-2">
                            <img src="{{ asset('icon') }}/footer/backup.png" alt="Online Storage" class="mr-3">
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
                                <img src="{{ asset('icon') }}/footer/instagram.png" alt="Online Storage" class="mr-3">
                                stanleyclaudius
                            </a>
                        </li>
                        <li class="text-white mt-2">
                            <a href="https://github.com/stanleyclaudius" target="_blank" class="flex items-center text-lg">
                                <img src="{{ asset('icon') }}/footer/github.png" alt="Online Storage" class="mr-3">
                                stanleyclaudius
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>