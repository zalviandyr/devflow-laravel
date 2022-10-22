<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
    | DevFlow</title>
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body>
  @yield('content')
  @livewireScripts
</body>

</html>
