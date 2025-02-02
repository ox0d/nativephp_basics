<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/js/app.js')
</head>

<body class="font-sans antialiased bg-slate-800 text-slate-100">
    <main class="min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
    </main>
</body>

</html>