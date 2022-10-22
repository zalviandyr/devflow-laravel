import React, { useState } from "react";
import { FaChevronLeft, FaPlus } from "react-icons/fa";

const openLayout = () => {
return (
console.log("Open")
)
}

const Profile: React.FC = ()=> {
return (
<div class="container p-12">
  <div class="flex">
    <a class="flex items-center px-5 py-2 bg-gray-100 border rounded-md border-slate-400 hover:bg-teal-500 hover:text-white"
      href="#" onClick={()=> history.back()}>
      <FaChevronLeft class="mr-4" />
      Kembali
    </a>
  </div>
  <h3 class="mt-8 text-4xl font-semibold text-teal-500">Profil Saya</h3>
  <div class="my-6 text-lg text-gray-400">Masukkan informasi valid mengenai dirimu</div>
  <form class="p-10 bg-white shadow-md rounded-xl">
    <div class="mb-12 text-2xl font-medium">Informasi Dasar</div>
    <div class="flex justify-between">
      <div class="w-1/4">
        <div
          class="flex items-center overflow-hidden text-center bg-gray-200 border rounded-full group border-slate-400 w-80 h-80 hover:border-cyan-500"
          onClick={openLayout}>
          <div class="block mx-auto ">
            <FaPlus
              class="w-24 h-24 p-8 mx-auto text-6xl border border-4 rounded-full text-slate-400 border-slate-400 group-hover:text-cyan-500 group-hover:border-cyan-500" />
            <div class="text-lg text-gray-500 group-hover:text-cyan-500">Tambah Gambar</div>
          </div>
        </div>
        <div class="text-gray-400">Masukkan gambar untuk foto profil kamu <strong class="italic text-red-400">Max ukuran
            500kb</strong></div>
      </div>
      <div class="w-3/5 space-y-8">
        <div class="block group">
          <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" htmlFor="name">Nama
            Kamu</label>
          <input type="text" id="name"
            class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
            placeholder="Masukkan nama kamu" />
        </div>
        <div class="block group">
          <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" htmlFor="email">Alamat
            Email</label>
          <input type="email" id="email"
            class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
            placeholder="Masukkan alamat email kamu" />
        </div>
        <div class="block group">
          <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" htmlFor="no_hp">Nomor
            Handphone</label>
          <input type="text" id="no_hp"
            class="justify-between block w-full p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
            placeholder="Masukkan nomor hp" />
        </div>
        <div class="block group">
          <label class="block w-full font-medium text-slate-500 group-hover:text-teal-500" htmlFor="no_hp">Alamat
            Lengkap</label>
          <textarea id="alamat"
            class="justify-between block w-full h-24 p-2 my-2 text-sm bg-white border rounded-md group-hover:placeholder-teal-500 group-hover:border-teal-500 border-slate-400 focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"></textarea>
        </div>
      </div>
    </div>
    <button type="submit"
      class="w-full py-4 mt-8 text-xl font-semibold text-center text-white bg-green-600 rounded-xl hover:bg-green-500"><span>Ubah
        Profil</span></button>
  </form>
</div>
)
}

export default Profile;
