@extends('layout')
@section('title', 'Home')

@section('content')
  <div class="container p-3 mt-5">
    <div class="block">
      @foreach ($users as $user)
        <div class="p-5 my-4 bg-white rounded-md shadow-md">
          <div class="flex flex-row items-center space-x-4">
            <div class="w-14">
              @if ($loop->index === 0)
                <img src="https://img.icons8.com/doodle/48/000000/crown--v1.png" />
              @elseif ($loop->index === 1)
                <img src="https://img.icons8.com/ultraviolet/40/000000/crown.png" />
              @elseif ($loop->index === 2)
                <img src="https://img.icons8.com/offices/30/000000/crown.png" />
              @endif
            </div>

            <div>{{ $user->author->name }}</div>
            <div class="flex-grow text-lg font-bold text-right">{{ $user->point }} Point</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
