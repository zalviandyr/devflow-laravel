@extends('layout')
@section('title', $post->title)
@section('content')
  <div class="container p-3 mt-5">
    <div class="w-full p-4 mb-10 space-y-4 bg-white border border-gray-200 rounded-lg" x-data="{ openComment: false }">
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
        <div class="flex" @click="openComment = !openComment">
          <span class="flex group hover:text-blue-500 hover:cursor-pointer"
            id="accordion-collapse-heading-{{ $post->id }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="w-6 h-6 group-hover:fill-blue-500">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            Komentari
          </span>
        </div>
      </div>
      <div x-show="openComment">
        Okk
      </div>
    </div>
  </div>
@endsection
