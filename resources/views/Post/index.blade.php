@extends('layout')
@section('title', $post->title)
@section('content')
  <div class="container p-3 mt-5">
    <div class="w-full p-4 mb-10 space-y-4 bg-white border border-gray-200 rounded-lg">
      <div class="flex justify-between">
        <div class="flex">
          <img src="{{ $post->user->photo }}" alt="Profil" class="w-12 h-12 rounded-full">
          <div class="flex flex-col ml-4">
            <span>{{ $post->user->name }}</span>
            <span class="text-sm">{{ formatDate($post->created_at) }}</span>
          </div>
        </div>
      </div>
      <div class="block">
        <h4 class="text-xl font-semibold">{{ $post->title }}</h4>

        {!! $post->body !!}

        <div class="grid grid-cols-2 group">
        </div>
      </div>
      <hr class="border border-slate-200" />
      <div class="flex justify-between">
        @livewire('reaction')
      </div>
      <div class="block">
        @auth
          {{-- <livewire:comment :post="$post"> --}}
          @livewire('comment', ['post' => $post])
        @else
          <div class="mx-auto">
            <a href="{{ route('login') }}"
              class="px-4 py-2 text-red-500 border border-white rounded hover:border-red-500 ">Login</a>
            <a href="{{ route('register') }}"
              class="px-4 py-2 text-white bg-red-500 border border-red-500 rounded hover:bg-red-600">Register</a>
          </div>
        @endauth
      </div>
    </div>
  </div>
@endsection
