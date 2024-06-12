@extends('layout.layout')

@section('menu', 'Paket')
@section('content')
<main class="w-full h-max">

    <div class="h-screen w-full">
        <div class="h-[150px]"></div>
        <div class="flex justify-center flex-col items-center">
            <h2 class="text-5xl font-primary text-center font-bold">Paket</h2>
            <p class="text-center w-[412px]  font-secondary mt-3">Our pricing is not expensive, but it's not cheap
                either,
                it's exactly
                what it
                should be</p>
        </div>

        <div class="flex flex-row m-14 h-[402px] justify-around items-end">
            <div class="h-[340px] w-[360px] bg-white rounded-2xl shadow-xl p-12">
                <h4 class="font-bold text-xl ">Paket Sterilisasi A</h4>
                <div class="h-6 inline-block font-bold mt-3">
                    <p class="align-top h-full">Rp.</p>
                    <span class=" ml-6 font-bold h-full text-6xl ">225K</span>
                </div>
                <p class="mt-8">General Cleaning (2 jam) +
                    ULV Fogging Disinfektan </p>
                <button type="button"
                    class="w-full mt-7 border-solid border-2 text-black bg-white hover:bg-blue-800  hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 mr-1 mb-2 dark:bg-white dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a class="w-full h-full" href="/formpemesanan">Get Started with Paket Sterilisasi A</a>
                </button>
            </div>
            <div class="h-[400px] w-[360px] bg-white rounded-2xl shadow-xl p-12">
                <div class="w-full flex flex-row-reverse">
                    <p class="  rounded-full bg-[#3164F4] text-white w-[120px] text-center">
                        Most
                        Popular</p>
                </div>
                <h4 class="font-bold text-xl mt-4">Paket Sterilisasi B</h4>
                <div class="h-6 inline-block font-bold mt-3">
                    <p class="align-top h-full">Rp.</p>
                    <span class=" ml-6 font-bold h-full text-6xl ">275K</span>
                </div>
                <p class="mt-8">General Cleaning (3 jam) +
                    ULV Fogging Disinfektan </p>
                <button type="button"
                    class="w-full mt-7 border-solid border-2 text-white bg-blue-600 hover:bg-blue-800  hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 mr-1 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a class="w-full h-full" href="/formpemesanan">Get Started with Paket Sterilisasi B</a>
                </button>
            </div>
            <div class="h-[340px] w-[360px] bg-white rounded-2xl shadow-xl p-12">
                <h4 class="font-bold text-xl ">Paket Sterilisasi C</h4>
                <div class="h-6 inline-block font-bold mt-3">
                    <p class="align-top h-full">Rp.</p>
                    <span class=" ml-6 font-bold h-full text-6xl ">350K</span>
                </div>
                <p class="mt-8">General Cleaning (4 jam) +
                    ULV Fogging Disinfektan </p>
                <button type="button"
                    class="w-full mt-7 border-solid border-2 text-black bg-white hover:bg-blue-800  hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 mr-1 mb-2 dark:bg-white dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <a class="w-full h-full" href="/formpemesanan">Get Started with Paket Sterilisasi C</a>
                </button>

            </div>

        </div>
    </div>
    <div class="h-[160px]"></div>
    <h2 class="text-center font-bold text-5xl mb-6">Compare Features</h2>

    <div class="flex justify-around m-14">

        <div class="w-[350px]">
            <h2 class="font-bold text-3xl text-center">Paket Sterilisasi A</h2>
            <div class="flex flex-col ml-12 mt-2">
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Menyapu</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Mengepel</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Membersihkan Kaca</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Vacuum Cleaner</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Fogging</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Durasi Pembersihan 2 Jam</p>
                </div>
            </div>
        </div>
        <div class="w-[350px]">
            <h2 class="font-bold text-3xl text-center">Paket Sterilisasi B</h2>
            <div class="flex flex-col ml-12 mt-2">
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Menyapu</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Mengepel</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Membersihkan Kaca</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Vacuum Cleaner</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Fogging</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Durasi Pembersihan 3 Jam</p>
                </div>
            </div>
        </div>
        <div class="w-[350px]">
            <h2 class="font-bold text-3xl">Paket Sterilisasi C</h2>
            <div class="flex flex-col  mt-2">
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Menyapu</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Mengepel</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Membersihkan Kaca</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Vacuum Cleaner</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Fogging</p>
                </div>
                <div class="flex flex-row mt-3">
                    <img src={{URL("/image/checkcircle.svg")}} width="30px" height="30px">
                    <p class="my-auto ml-4">Durasi Pembersihan 4 Jam</p>
                </div>
            </div>
        </div>


    </div>


</main>
@endsection