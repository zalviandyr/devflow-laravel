@extends('User.layout')
@section('title', 'Profile')

@section('content')
  <div class="container p-3">
    <div class="border-b-2 border-red-500">
      <div class="flex">
        <a href="{{ route('profile') }}" class="px-10 py-4 text-red-500 hover:bg-red-200">Profile</a>
        <a href="{{ route('profile.history') }}" class="px-10 py-4 text-white bg-red-500">History</a>
        <a href="{{ route('profile.changePassword') }}" class="px-10 py-4 text-red-500 hover:bg-red-200">Password</a>
      </div>
    </div>
    <h3 class="mt-8 text-4xl font-semibold text-red-500">Hisotry Saya</h3>
    <div class="my-6 text-lg text-gray-400">Riwayat komentar pada postingan</div>

    @foreach ($comments as $comment)
      <div class="p-10 bg-white shadow-md rounded-xl">
        <div class="flex justify-between">
          <div class="font-bold">{{ $comment->post->title }}</div>
          <div>{{ formatDate($comment->created_at) }}</div>
        </div>
        <div class="font-semibold">{{ $comment->body }}</div>
      </div>
    @endforeach
  </div>
@endsection
