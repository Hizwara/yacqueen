@extends('layouts.app')

@section('content')
    <!--Nav-->

    <!--Hero-->
    <div class="pt-24 hero-background">
        <div class="layout px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center h-screen ">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <h1 class="my-4 text-5xl font-bold leading-tight" style="font-family: Titania;">
                    TiKo
                </h1>
                <h2 class="leading-normal text-2xl mb-8" style="font-family: Montserrat;">
                    Watch the most magnificant concert
                    <br class="hidden md:block">
                    you&apos;ve never seen
                </h2>
                <h3 class="leading-normal text-1xl mb-8" style="font-family: Inter;">
                    Get your chance to see the most incredible concert you&apos;ve never seen in your life before
                </h3>
            </div>
        </div>
    </div>

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <div class="w-full mb-4">
                <div class="h-1 mx-auto  w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Tentang Tiko
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Tiko merupakan sebuah website aplikasi untuk mengelola sistem
                        penjualan Tiket Konser. Tiko merupakan sebuah website aplikasi untuk
                        mengelola sistem penjualan Tiket Konser.Tiko merupakan sebuah
                        website aplikasi untuk mengelola sistem penjualan Tiket Konser.
                        <br />
                        <br />
                    </p>
                </div>
                <div class="w-full sm:w-1/2 p-6">
                    <img src="{{ asset('images/landing/tentang_tiko.png') }}" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
                Kenapa Harus TiKo?
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Kemudahan Akses
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Tiko memberikan pendataan lengkap
                            tentang event konser yang akan datang.
                            Pengguna dapat mencari informasi
                            tentang event konser, termasuk nama
                            event, deskripsi, artis yang tampil,
                            harga tiket, waktu, dan tempat pelaksanaan.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        {{-- <button
                        class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Action
                    </button> --}}
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">

                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Kemudahan Akses
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Tiko memberikan pendataan lengkap
                            tentang event konser yang akan datang.
                            Pengguna dapat mencari informasi
                            tentang event konser, termasuk nama
                            event, deskripsi, artis yang tampil,
                            harga tiket, waktu, dan tempat pelaksanaan.
                        </p>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">

                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Kemudahan Akses
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Tiko memberikan pendataan lengkap
                            tentang event konser yang akan datang.
                            Pengguna dapat mencari informasi
                            tentang event konser, termasuk nama
                            event, deskripsi, artis yang tampil,
                            harga tiket, waktu, dan tempat pelaksanaan.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-24 event-artisfav">
        <div class="layout px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center h-screen ">
            <a href="/event"
                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Selengkapnya
            </a>
        </div>
    </div>

    <section class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <a href=""
                class="text-1xl right-align font-bold font-Inter text-[#0077B6] text-large flex justify-end w-full">
                Lihat Semua
            </a>
            <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
                Artis Populer
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-nowrap overflow-auto gap-3 p-6">
                @foreach ($popular as $item)
                    <x-artis :artis="$item" />
                @endforeach
            </div>
    </section>

    <section class="bg-[#0077B6] border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <a href="/event"
                class="text-1xl right-align font-bold font-Inter text-white text-large flex justify-end w-full">
                Lihat Semua
            </a>
            <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
                Event Saat Ini
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-nowrap overflow-auto gap-3 p-6">
                @foreach ($upcoming as $item)
                    <x-event :event="$item" />
                @endforeach
            </div>
    </section>

    <section class="bg-[#CAF0F8] border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <div class="w-full mb-4">
                <div class="h-1 mx-auto  w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Hubungi Kami!
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Tim kami dengan senang hati akan menghubungi anda.
                        <br />
                        <br />
                        Silakan masukan alamat kontak perusahaan yang dapat dihubungi
                        <br />
                    </p>
                    <p class="text-blue-600 mb-8">
                        <br />
                        <img src="{{ asset('images/landing/hubungi.png') }}" />
                        <br />
                    </p>
                </div>
                <div class="w-full sm:w-1/2 p-6">
                    <img src="{{ asset('images/landing/tentang_tiko.png') }}" />
                </div>
            </div>
    </section>
    <!--Footer-->
@endsection
