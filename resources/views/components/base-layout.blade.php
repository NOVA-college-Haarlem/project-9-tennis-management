<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tennisclub</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <header class="bg-green-600">
        <div class="header-bg">
            <div class="container mx-auto py-4 px-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <img src="/images/Tennislogo.webp" alt="Tennisclub Logo" class="h-10 w-auto rounded-full" />
                        <span class="text-lg font-bold text-white">Tennisclub</span>
                    </div>
    
                    <nav class="flex items-center space-x-1 ml-6">
                        <ul class="flex justify-center space-x-4">
                            <li><a href="/home" class="nav-link px-4 py-2 text-white font-medium rounded-lg hover:bg-green-700">Home</a></li>
                            <li><a href="#" class="nav-link px-4 py-2 text-white font-medium rounded-lg hover:bg-green-700">Link 1</a></li>
                            <li><a href="#" class="nav-link px-4 py-2 text-white font-medium rounded-lg hover:bg-green-700">Link 2</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-green-500 py-4">
        <div class="container mx-auto flex flex-col items-center space-y-4 text-sm">
            <div class="flex space-x-4">
                <a href="/about" class="footer-link text-white transition duration-200">About Us</a>
                <a href="/contact" class="footer-link text-white transition duration-200">Contact</a>
                <a href="/dashboard" class="footer-link text-white transition duration-200">Dashboard</a>
                <a href="/privacy" class="footer-link text-white transition duration-200">Privacy Policy</a>
                <a href="/terms" class="footer-link text-white transition duration-200">Terms of Service</a>
            </div>
            <div class="footer-text">
                <p class="text-white">© 2025 <span class="font-semibold">Tennisclub</span>. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>