<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
    | DevFlow</title>
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="//unpkg.com/alpinejs" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_style.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
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
              <div class="relative flex items-center h-16 space-x-2 group">
                <span class="font-medium text-slate-500">{{ Auth::user()->name }}</span>
                <img src="{{ Auth::user()->photo }}" class="w-10 h-10 rounded-full">

                <div
                  class="absolute right-0 hidden w-48 overflow-hidden bg-white border border-gray-100 rounded-md shadow top-full group-hover:flex group-hover:flex-col">
                  <a href="{{ route('profile') }}" class="px-4 py-4 text-md text-slate-500 dark:text-gray-500 hover:bg-slate-200 hover:text-blue-500">
                    Profile
                  </a>
                  <a href="#" class="px-4 py-4 text-md text-slate-500 dark:text-gray-500 hover:bg-slate-200 hover:text-blue-500">
                    History Komentar
                  </a>
                  <a href="{{ route('logout') }}"
                    class="px-4 py-4 border-t text-md text-slate-500 dark:text-gray-500 hover:bg-red-200 hover:text-red-500 border-t-gray-300">
                    Logout
                  </a>
                </div>
              </div>
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
  <div class="container flex flex-row mx-auto mt-16" x-data="{ createPost: false }">
    <div class="relative w-1/6 px-4 border-r border-r-gray-200">
      <div class="sticky w-full top-20">
        @auth
          <img src="{{ Auth::user()->photo }}" class="w-32 h-32 mx-auto rounded-full">
          <div class="mt-4 text-center">{{ Auth::user()->name }}</div>
          <div class="my-10 text-center hover:cursor-pointer" @click="createPost = !createPost">
            <div class="w-full py-4 rounded-full" :class="createPost ? 'border border-red-500 text-red-500' : 'bg-red-500 text-white'">
              Create Post
            </div>
          </div>
        @endauth
        <div class="block">
          <div class="text-center">
            <a href="{{ route('home') }}">
              <div class="w-full py-4 @if (request()->routeIs('home')) bg-red-50 @else hover:bg-red-50 @endif">
                Home
              </div>
            </a>
          </div>

          @auth
            <div class="text-center">
              <a href="{{ route('profile') }}">
                <div class="w-full py-4 @if (request()->routeIs('profile*')) bg-red-50 @else hover:bg-red-50 @endif">
                  Profile
                </div>
              </a>
            </div>
          @endauth

          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 @if (request()->routeIs('category*')) bg-red-50 @else hover:bg-red-50 @endif">
                Kategori
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="/topic">
              <div class="w-full py-4 @if (request()->routeIs('topic*')) bg-red-50 @else hover:bg-red-50 @endif"">
                Topik
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="/project">
              <div class="w-full py-4 @if (request()->routeIs('projec t*')) bg-red-50 @else hover:bg-red-50 @endif"">
                Project
              </div>
            </a>
          </div>
          <div class="text-center">
            <a href="{{ route('leaderboard') }}">
              <div class="w-full py-4 @if (request()->routeIs('leaderboard*')) bg-red-50 @else hover:bg-red-50 @endif"">
                Leaderboard
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-4/6 px-20">
      <div class="my-10" x-show="createPost">
        <form method="POST" action="{{ route('post') }}">
          @csrf
          <div class="mb-6 text-slate-500">
            <input type="text" name="title" id="title" class="w-full py-2.5 px-2 rounded-md placeholder:text-gray-300"
              placeholder="Judul Post" />
            @livewire('search-topic')
          </div>
          <div id="wysiwyg"></div>
          <textarea class="hidden px-4 fr-view" id="show" name="body">
          </textarea>
          <button type="submit" class="w-full text-white bg-red-500 rounded-full hover:bg-red-600 py-2.5 mt-4">Post</button>
        </form>
      </div>
      @yield('content')
    </div>

    <div class="w-1/6 px-4">
      <div class="sticky w-full top-20">
        <div class="text-xl border-b border-red-500">Kategori</div>
        @foreach ($categories as $categori)
          <div class="text-start">
            <a href="{{ route('category.detail', ['slug' => $categori->slug]) }}" class="flex items-center pl-4 hover:bg-red-50">
              <img src="{{ $categori->icon }}" class="object-contain w-10 h-10">
              <div class="w-full py-4 ml-4 ">
                {{ $categori->name }}
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>

  </div>
  @livewireScripts

  @include('plugin.sweetalert.alert')
  <script>
    var callback = function() {
      var editor = this
      // console.log(editor.codeBeautifier.run(editor.html.get()))
      document.getElementById('show').innerHTML = editor.codeBeautifier.run(editor.html.get());
      // document.getElementById().removeClass('prettyprinted');
    }
    var editor = new FroalaEditor('#wysiwyg', {
      events: {
        initialized: callback,
        contentChanged: callback
      },
      quickInsertTags: [],
    });

    // document.getElementById('#show').innerHTML =
  </script>
</body>

</html>
