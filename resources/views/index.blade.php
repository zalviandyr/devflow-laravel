@extends('layout')
@section('title', 'Home')
@section('content')
  <div class="flex">
  </div>
  @for ($i = 0; $i < 10; $i++)
    <div class="w-full p-4 mb-10 space-y-4 bg-white border border-gray-200 rounded-lg">
      <div class="flex justify-between">
        <div class="flex">
          <img src="{{ asset('images/avatar.svg') }}" alt="Profil" class="w-12 h-12 rounded-full">
          <div class="flex flex-col ml-4">
            <span>{{ fake()->name() }}</span>
            <span class="text-sm">22 Oktober 2022</span>
          </div>
        </div>
      </div>
      <div class="block">
        <h4 class="text-xl font-semibold">Ini Judul ya?</h4>
        {!! Str::limit(
            '<p>' . fake()->paragraph() . '</p><p>' . fake()->paragraph() . '</p>',
            128,
            ' <a href="/" class="text-blue-500 hover:underline">Baca Selengkapnya ....</a>',
        ) !!}
        <div class="grid grid-cols-2 group">
          @for ($j = 1; $j <= 3; $j++)
            <img src="{{ asset('images/community.png') }}" class="w-full odd:last-of-type:col-span-2 hover:invert" />
          @endfor
        </div>
      </div>
      <div class="flex justify-between">
        <div class="flex">
          <span>Suka</span>
          <span>Tidak Suka</span>
        </div>
        <div class="flex">
          <span>Komentari Hidup Orang</span>
        </div>
      </div>
    </div>
  @endfor
@endsection
