<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyLittleCompany</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- Ici la nav avec @include--}}
    
    <main>
        {{-- ici toutes les pages nommés 'content' avec @yield --}}
        @yield('content')
    </main>
    {{-- Ici le footer avec @include --}}
    
</body>
</html>