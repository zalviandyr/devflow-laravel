@extends('User.layout')
@section('title', 'Profile')

@section('content')
  <div class="container p-3">
    <div class="border-b-2 border-red-500">
      <div class="flex">
        <a href="{{ route('profile') }}" class="px-10 py-4 text-white bg-red-500">Profile</a>
        <a href="/point" class="px-10 py-4 text-red-500 hover:bg-red-200">Point</a>
        <a href="{{ route('profile.changePassword') }}" class="px-10 py-4 text-red-500 hover:bg-red-200">Password</a>
      </div>
    </div>
    <h3 class="mt-8 text-4xl font-semibold text-red-500">Profil Saya</h3>
    <div class="my-6 text-lg text-gray-400">Masukkan informasi valid mengenai dirimu</div>

    <form action="{{ route('profile.update') }}" method="POST" class="p-10 bg-white shadow-md rounded-xl" enctype="multipart/form-data">
      @csrf

      <div class="mb-12 text-2xl font-medium">Informasi Dasar</div>
      <div class="flex justify-between">
        <div class="relative w-1/3">
          <div class="group w-60">
            <img src="{{ $auth->photo }}" class="rounded-full w-60 h-60" id="imgOut" />
            <input name="photo" type="file" id="imgInp" style="display:none" />
            <label for='imgInp'>
              <div
                class="absolute top-0 items-center hidden overflow-hidden text-center border rounded-full cursor-pointer group-hover:flex bg-gray-200/50 w-60 h-60 group border-slate-400 hover:border-red-500">
                <div class="block mx-auto ">
                  <div class="flex justify-center group-hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>

                  <div class="text-lg text-gray-500 group-hover:text-red-500">Ganti Gambar</div>
                </div>
              </div>
            </label>
          </div>

          <div class="mt-5 text-center text-gray-400 w-60">Masukkan gambar untuk foto profil kamu
            <strong class="italic text-red-400">Max ukuran 500kb</strong>
          </div>

          @error('photo')
            <small class="text-red-400">{{ $message }}</small>
          @enderror
        </div>

        <div class="w-full space-y-8">
          <div class="block group">
            <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" for="name">
              Nama Kamu
            </label>
            <input type="text" id="name" name="name"
              class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
              placeholder="Masukkan nama kamu" value="{{ old('name') ?? $auth->name }}" />
            @error('name')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="block group">
            <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" for="email">Alamat
              Email
            </label>
            <input type="email" id="email" name="email"
              class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
              placeholder="Masukkan alamat email kamu" value="{{ old('email') ?? $auth->email }}" />
            @error('email')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

          <div class="block group">
            <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" for="username">Username
            </label>
            <input type="text" id="username" name="username"
              class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
              placeholder="Masukkan Username" value="{{ old('username') ?? $auth->username }}" />
            @error('username')
              <small class="text-red-400">{{ $message }}</small>
            @enderror
          </div>

        </div>
      </div>

      <button type="submit" class="w-full py-2 mt-6 font-semibold text-center text-white bg-red-500 rounded-lg hover:bg-red-600">
        <span>Ubah Profile</span>
      </button>
    </form>
  </div>
  <script>
    function gantiGambar() {
      const klikGambar = document.querySelector('#upload_image');
    }
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        imgOut.src = URL.createObjectURL(file)
      }
    }
  </script>
@endsection
