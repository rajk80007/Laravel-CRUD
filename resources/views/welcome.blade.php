<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel CRUD - Task Management</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

   
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased">
    @include('components.navbar')
    
    <h1 class="text-3xl m-2 font-bold">Welcome To Task Management App</h1>

    <livewire:store-tasks />

    @livewireScripts
</body>

</html>
