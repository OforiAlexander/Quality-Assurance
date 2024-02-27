<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- flow bite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <x-application-image :image="asset('img/UPSA (1).jpg')" class=" w-30" style="background-position: center center; background-repeat:no-repeat; background-size:cover;"/>
    <div class="flex absolute top-0 right-0 w-full justify-center items-center h-screen">
        <div class="bg-gray-100 p-10 rounded-lg shadow-md w-full md:max-w-md">
            <div class="text-center">
                <x-application-logo :image="asset('img/upsa.jpg')"/>
            </div>
            
            <div class="container">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
