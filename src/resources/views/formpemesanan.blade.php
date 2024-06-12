@extends('layout.layout')

@section('menu', 'Form Pemesanan')
@section('content')

<main class="w-full h-max">
    <div class="flex flex-row mt-20 ml-20 justify-between">
        <form action="/formpemesanan" method="POST" class="flex flex-col gap-y-3 p-6">
            <h3 class="font-bold text-4xl">Form Pemesanan </h3>
            <label class="mt-5 text-base">Nama Lenkap</label>
            <input class="w-[412px] h-[43px] rounded-xl p-2" id="name" name="name" value="{{$akun->name}}" disabled>
            <label class="mt-2 text-base">Email</label>
            <input class="w-[412px] h-[43px] rounded-xl p-2" id="email" name="email" type="email"
                value="{{$akun->email}}" disabled>
            <label class="mt-2 text-base">Alamat</label>
            <input class="w-[412px] h-[43px] rounded-xl p-2" id="alamat" name="alamat" required>
            <label class="mt-2 text-base">No Handphone</label>
            <input class="w-[412px] h-[43px] rounded-xl p-2" id="nohp" name="nohp" value="{{$akun->notelp}}" disabled>
            <label class="mt-2 text-base">Paket yang dipilih</label>
            <select id="paket" name="paket" class="w-[412px] h-[43px] rounded-xl bg-white p-2">
                <option>-- Paket ---</option>
                @foreach ($paket as $item)
                <option value="{{$item->id_paket}}"> {{$item->nama_paketlayanan}}</option>
                @endforeach
            </select>
            <button type="submit"
                class="w-[168px] text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pesan</button>
        </form>
        <div>
            <img src="https://i.ibb.co/rmZ98Xd/image-removebg-preview.png" alt="Yeah" class="mr-20 mt-20" />
        </div>
    </div>
    {{-- @foreach ($paket as $item)
    {{$item->nama_paketlayanan}}
    @endforeach --}}
</main>
@endsection