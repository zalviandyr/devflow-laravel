@extends('User.layout')
@section('title', 'Change Password')

@section('content')
  <div class="container p-3">
    <div class="border-b-2 border-red-500">
      <div class="flex">
        <a href="{{ route('profile') }}" class="px-10 py-4 text-red-500 hover:bg-red-200">Profile</a>
        <a href="/point" class="px-10 py-4 text-red-500 hover:bg-red-200">Point</a>
        <a href="{{ route('profile.changePassword') }}" class="px-10 py-4 text-white bg-red-500">Password</a>
      </div>
    </div>
    <h3 class="mt-8 text-4xl font-semibold text-red-500">Profil Saya</h3>
    <div class="my-6 text-lg text-gray-400">Ubah Password</div>

    <form action="{{ route('profile.changePassword.update') }}" method="POST" class="p-10 bg-white shadow-md rounded-xl">
      @csrf

      <div class="mb-12 text-2xl font-medium">Password</div>
      <div class="flex">
        <div class="w-full space-y-8">
          <div class="block group">
            <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" for="name">
              Password Lama
            </label>
            <input type="password" id="passwordLama" name="passwordLama"
              class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
              placeholder="Masukkan password lama" value="{{ old('passwordLama') }}" />
            @error('passwordLama')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="block group">
            <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" for="name">
              Password Baru
            </label>
            <input type="password" id="passwordBaru" name="passwordBaru"
              class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
              placeholder="Masukkan password baru" value="{{ old('passwordBaru') }}" />
            @error('passwordBaru')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="block group">
            <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" for="name">
              Konfirmasi Password Baru
            </label>
            <input type="password" id="konfirmasiPasswordBaru" name="konfirmasiPasswordBaru"
              class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
              placeholder="Masukkan konfirmasi password baru" value="{{ old('konfirmasiPasswordBaru') }}" />
            @error('konfirmasiPasswordBaru')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>
        </div>
      </div>

      <button type="submit" class="w-full py-2 mt-6 font-semibold text-center text-white bg-red-500 rounded-lg hover:bg-red-600">
        <span>Ubah Password</span>
      </button>
    </form>
  </div>
@endsection
