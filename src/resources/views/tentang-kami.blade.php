@extends("layout.layout")

@section('menu', 'Tentang Kami')

@section('content')

<main class="w-full h-max">
    <div class="flex justify-center flex-col m-14 p-10 items-center">
        <h2 class="font-bold text-6xl text-center">Tentang Kami </h2>
        <img src="{{url("/image/tentangkami.png")}}" class="mt-14" width="1000px">

        <div class="py-20">
            <div class="w-full border-t border-gray-300"></div>
        </div>

        <div class="flex flex-row justify-around items-center pl-20 pr-20 pb-20">
            <h2 class="font-bold text-5xl">Membersihkan hingga sudut terdalam</h2>
            <img src="{{url("/image/cleaning.png")}}">
        </div>
        <div class="py-20">
            <div class="w-full border-t border-gray-300"></div>
        </div>
        <h2 class="text-3xl font-bold text-center">Team</h2>
        <p class="text-center mt-8">Meet the people behind our megical product</p>
        <img src="{{url("/image/home.png")}}" />

        <div class="w-[1000px] h-max bg-white rounded-xl mt-48 ">
            <div class="w-full h-full flex justify-center items-center flex-row">
                <div class="flex flex-col w-1/2 p-10">
                    <h2 class="font-bold text-5xl">Get started with RESIC today
                    </h2>
                    <p class="mt-10">Put some dirt in your room, we'll clean it</p>
                    {{-- <a type="submit" href="/signup"
                        class="w-[168px] text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-10">Sign
                        up now</a> --}}
                </div>
                <div class="flex flex-col w-1/2 p-10">
                    <img src="{{url("image/resic.png")}}">
                </div>

            </div>
        </div>
    </div>
</main>
@endsection