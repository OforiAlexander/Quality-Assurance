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
    <link defer href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 relative">
        <!-- Page Heading -->
        @include('layouts.navigation')
          
          {{-- <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-50 border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
             <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-50">
                <ul class="space-y-2 font-medium">
                  @livewire('reports')
                </ul>
             </div>
          </aside> --}}

        <!-- Page Content -->
        <main class="mt-16 py-8.px-4">
            {{ $slot }}
        </main>
    </div>

    {{-- flow bite script --}}
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
