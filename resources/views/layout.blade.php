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
  <div class="fixed top-0 z-10 w-full shadow-xl bg-white/30 backdrop-blur-lg">
    <div class="container flex items-center justify-between h-16 mx-auto">
      <a href="/" class="text-2xl">
        <span class="font-bold text-red-500">Dev</span><span class="italic text-red-400">Flow</span>
      </a>
      <div class="flex">
        @if (Route::has('login'))
          <div class="px-6 py-4 space-x-4 sm:block">
            @auth
              <a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 hover:underline">Home</a>
              <a href="{{ route('logout') }}" class="text-sm text-red-500 dark:text-gray-500 hover:underline">Logout</a>
            @else
              <a href="{{ route('login') }}" class="px-4 py-2 text-red-500 border border-white rounded hover:border-red-500 ">Login</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="px-4 py-2 text-white bg-red-500 border border-red-500 rounded hover:bg-red-600">Register</a>
              @endif
            @endauth
          </div>
        @endif
      </div>
    </div>
  </div>
  <div class="container flex mx-auto mt-16">
    <div class="relative w-1/6 px-4 border-r border-r-gray-200">
      <div class="sticky w-full top-20">
        <img src="{{ asset('images/avatar.svg') }}" class="w-32 h-32 mx-auto rounded-full">
        <div class="mt-4 text-center">Alvin Faiz</div>
        <div class="my-10 text-center">
          <a href="/topic">
            <div class="w-full py-4 text-white bg-red-500 rounded-full">
              Create Post
            </div>
          </a>
        </div>
        <div class="block">
          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 bg-red-50">
                Home
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 hover:bg-red-50">
                Profil
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 hover:bg-red-50">
                Kategori
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 hover:bg-red-50">
                Topik
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 hover:bg-red-50">
                Loker
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 hover:bg-red-50">
                Leaderboard
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="w-4/6 px-20">
      @yield('content')
    </div>
    <div class="w-1/6 px-4">
      <div class="sticky w-full top-20">
        Faiz
      </div>
    </div>
  </div>
  @livewireScripts
</body>

</html>
