<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyLittleCompany</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-gray-200 to-yellow-200">
    {{-- Ici la nav --}}
    @include('Layout.partials.frontEnd.frontNav')
    <main >
        {{-- ici toutes les pages nommés 'content' --}}
        @yield('content')
    </main>
    {{-- Ici le footer  --}}
    
</body>
</html>