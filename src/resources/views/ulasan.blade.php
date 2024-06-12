@extends('layout.layout')

@section('menu', 'Ulasan')

@section('content')

<main class="w-full h-max">
    <div class="h-[80px]"></div>
    <div class="bg-white h-max w-[1137px] rounded-xl p-10 m-14 ">
        <form action="/ulasan/{{$idpesanan}}" method="POST">
            <h2 class="font-bold text-4xl text-center">Ulasan </h2>
            <div class="py-4">
                <div class="w-full border-t border-gray-300"></div>
            </div>

            <div class="flex flex-row justify-start">
                <p>Ulasan Penilaian</p>
                <textarea class="w-1/2  ml-28 h-40 bg-slate-50 p-5" placeholder="Isikan Ulasan Anda" name="ulasan"
                    id="ulasan" required></textarea>
            </div>
            <div class="flex flex-row justify-start mt-10">
                <p>Nilai</p>
                <select name="karyawan" id="karyawan" class="ml-52 bg-slate-50 h-10  w-[312px]">
                    <option>-- Karyawan -- </option>
                    @foreach ($karyawan as $item)
                    <option value="{{$item->idkaryawan_pembersih}}"> {{$item->nama_karyawan}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-row justify-start mt-10">
                <p>Nilai</p>
                <select name="nilai" id="nilai" class="ml-52 bg-slate-50 h-10 w-[312px]">
                    <option> -- Nilai --</option>
                    <option value="1">Sangat Buruk</option>
                    <option value="2">Buruk</option>
                    <option value="3">Sedang</option>
                    <option value="4">Baik</option>
                    <option value="5">Sangat Baik</option>
                </select>
            </div>
            <button type="submit"
                class="mt-14 w-[168px] text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</button>
        </form>
    </div>

</main>

@endsection