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
        <img src="../../images/community.png" class="mx-auto">
        <div class="absolute bottom-0 w-5/6 h-5 bg-red-400 rounded-tr-lg"></div>
        <div class="absolute top-0 right-0 w-3/6 h-5 bg-red-400 rounded-bl-xl"></div>
      </div>
      <div class="flex items-center w-1/2">
        <div class="block w-full text-center">
          <h4 class="text-3xl text-red-400">Login <span class="font-bold text-red-500">Dev</span><span class="italic">Flow</span></h4>
          <form class="mx-auto mt-20 text-left w-96">
            <div class="w-full py-3 my-6 text-center text-red-500 bg-red-200 rounded-xl">
              Username/Password Salah
            </div>
            <div class="relative my-6">
              <input type="text" id="username" class="block px-2.5 pb-2.5 pt-4 w-full text-gray-900 bg-transparent rounded-lg border-1 border-gray-800 appearance-none border focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
              <label for="username" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Username/Email</label>
            </div>
            <div class="relative my-6">
              <input type="password" id="password" class="block px-2.5 pb-2.5 pt-4 w-full text-gray-900 bg-transparent rounded-lg border-1 border-gray-800 appearance-none border focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
              <label for="password" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
            </div>
            <button type="submit" class="block px-2.5 pb-2.5 pt-4 w-full bg-red-500 text-white rounded-lg hover:bg-red-400">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>