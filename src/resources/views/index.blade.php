@extends('layout.layout')

@section('menu', 'Beranda')
@section('content')

<main class="w-full h-max">

    <div class="flex flex-row justify-around w-screen h-screen items-center p-10 mt-7">
        <div class="flex flex-col">
            <h1 class="font-bold text-5xl p-3 leading-[72px]">Put some dirt in your room, we'll clean it</h1>
            <p class="p-3 font-secondary">Mudah pesannya, bersihnya nyata</p>
        </div>
        <img src={{URL("/image/pichome.png")}} />
    </div>

    <div class="flex w-screen h-[100px] justify-center items-center flex-col">
        <p>Powered by</p>
        <div class="flex flex-row justify-around w-full mt-5 font-bold font-primary">
            <h4>RESIC</h4>
            <h4>RESIC</h4>
            <h4>RESIC</h4>
            <h4>RESIC</h4>
            <h4>RESIC</h4>

        </div>
    </div>

    {{-- Selanjutnya --}}
    <div class="h-[100px]"></div>
    <div class="rounded-lg h-[400px] bg-white m-[64px] shadow-2xl">
        <div class="w-full h-full flex flex-row justify-around items-center align-middle p-10">
            <div class="flex flex-col ">
                <h2 class="font-bold font-primary text-5xl">Pilih paket sesuai kebutuhan Anda</h2>
                <p class="mt-10">Our pricing is not expensive, but it's not cheap either, it's exactly what it should be
                </p>
            </div>
            <img src={{URL("/image/resic.png")}}>
        </div>
    </div>

    <div class="h-[150px]"></div>

    {{-- Testimonial --}}
    <h2 class="text-center font-bold text-5xl">Testimonial</h2>
    <p class=" text-center font-secondary mt-20">People love what we do and we want to let your know</p>

    {{-- Testimonial Card --}}
    <div class="flex flex-row justify-around mt-20 p-10">
        <div class="bg-white h-[270px] w-[334px] rounded-xl">
            <div class="w-full h-full flex justify-center items-center font-bold text-center flex-col p-2">
                <p>"9 dari 10 pembantu rumah tangga merekomendasikan Resic."</p>
                <div class="flex flex-row mt-2 mb-2">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                </div>
                <p>Ryan Hikmah</p>
            </div>
        </div>
        <div class="bg-white h-[270px] w-[334px] rounded-xl">
            <div class="w-full h-full flex justify-center items-center font-bold text-center flex-col p-2">
                <p>"Paket 123 cuma beda durasi sama harga. Pilih paket 1 saja sudah bersih, tambah 2 jam masnya
                    nganggur. "</p>
                <div class="flex flex-row mt-2 mb-2">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                </div>
                <p>Vincentia Putri</p>
            </div>
        </div>
        <div class="bg-white h-[270px] w-[334px] rounded-xl">
            <div class="w-full h-full flex justify-center items-center font-bold text-center flex-col p-2">
                <p>"Tidak ramah, tapi bersih rumahnya. Jadi okelah."</p>
                <div class="flex flex-row mt-2 mb-2">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                    <img src={{URL("/image/start.svg")}} width="20px" height="20px">
                </div>
                <p>Ustman Ahmad</p>
            </div>
        </div>
    </div>

    {{-- Chose Resic --}}
    <div class="h-[100px]"></div>
    <div class="rounded-lg h-[400px] bg-white m-[64px] shadow-2xl">
        <div class="w-full h-full flex flex-row justify-around items-center align-middle p-12">
            <div class="flex flex-col ">
                <h2 class="font-bold font-primary text-7xl">Choose with Resic today</h2>
                <p class="mt-10 text-xl">Rumah yang bersih terdapat kenyamanan keluarga anda
                </p>
                {{-- <button type="button"
                    class="w-40 mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</button>
                --}}
            </div>
            <img src={{URL("/image/resic.png")}}>

        </div>

</main>


@endsection