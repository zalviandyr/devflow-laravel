<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | DevFlow</title>
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <div class="flex h-screen">
    <div class="relative flex items-center w-1/2">
      <img src="{{ asset('images/community.png') }}" class="mx-auto">

      <div class="absolute bottom-0 w-5/6 h-5 bg-red-400 rounded-tr-lg"></div>
      <div class="absolute top-0 right-0 w-3/6 h-5 bg-red-400 rounded-bl-xl"></div>
    </div>
    <div class="flex items-center w-1/2">
      <div class="block w-full text-center">
        <h4 class="text-3xl text-red-400">Register <span class="font-bold text-red-500">Dev</span><span class="italic">Flow</span></h4>
        <form action="{{ route('register') }}" method="POST" class="mx-auto mt-10 text-left w-96">
          @csrf

          <div class="relative my-6">
            <input type="text" id="name" name="name"
              class="block px-2.5 pb-2.5 pt-4 w-full text-gray-900 bg-transparent rounded-lg border-1 border-gray-800 appearance-none border focus:outline-none focus:ring-0 focus:border-red-600 peer"
              placeholder=" " value="{{ old('name') }}" />
            <label for="name"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
              Nama Lengkap
            </label>
            @error('name')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="relative my-6">
            <input type="email" id="email" name="email" value="{{ old('email') }}"
              class="block px-2.5 pb-2.5 pt-4 w-full text-gray-900 bg-transparent rounded-lg border-1 border-gray-800 appearance-none border focus:outline-none focus:ring-0 focus:border-red-600 peer"
              placeholder=" " />
            <label for="email"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
              Email
            </label>
            @error('email')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="relative my-6">
            <input type="text" id="username" name="username" value="{{ old('username') }}"
              class="block px-2.5 pb-2.5 pt-4 w-full text-gray-900 bg-transparent rounded-lg border-1 border-gray-800 appearance-none border focus:outline-none focus:ring-0 focus:border-red-600 peer"
              placeholder=" " />
            <label for="username"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
              Username
            </label>
            @error('username')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="relative my-6">
            <input type="password" id="password" name="password" value="{{ old('password') }}"
              class="block px-2.5 pb-2.5 pt-4 w-full text-gray-900 bg-transparent rounded-lg border-1 border-gray-800 appearance-none border focus:outline-none focus:ring-0 focus:border-red-600 peer"
              placeholder=" " />
            <label for="password"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
              Password
            </label>
            @error('password')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="relative my-6">
            <input type="password" id="confirmPassword" name="confirmPassword" value="{{ old('confirmPassword') }}"
              class="block px-2.5 pb-2.5 pt-4 w-full text-gray-900 bg-transparent rounded-lg border-1 border-gray-800 appearance-none border focus:outline-none focus:ring-0 focus:border-red-600 peer"
              placeholder=" " />
            <label for="confirmPassword"
              class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
              Confirm Password
            </label>
            @error('confirmPassword')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <button type="submit" class="block px-2.5 pb-2.5 pt-4 w-full bg-red-500 text-white rounded-lg hover:bg-red-400">
            Register
          </button>
        </form>
        <div class="mt-5">Sudah punya akun ? <a href="{{ route('login') }}" class="text-red-500">Masuk disini</a></div>
      </div>
    </div>
  </div>
</body>
