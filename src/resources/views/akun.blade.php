@extends('layout.layout')

@section('menu', 'Akun')

@section("content")

<main class="h-max w-full ">
    <div class="flex justify-center m-14 flex-col">
        @csrf
        <form action="/akun/{{$akun->id}}" method="POST"
            class="w-[1137px] h-max bg-white shadow-lg rounded-xl mt-10 p-20 flex flex-col">
            <h2 class="font-bold text-3xl "> Profile </h2>
            <div class="py-4">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <label class="font-bold text-xl mr-24"> Nama </label>
            <input id="name" name="name" type="text" class=" w-1/2 h-12 border-2 bg-slate-50 p-2 mt-3"
                value="{{$akun->name}}">
            </input>
            <label class="font-bold text-xl mr-24 mt-5"> Email </label>
            <input id="email" name="email" type="email" class=" w-1/2 h-12 border-2 bg-slate-50 p-2 mt-3"
                value="{{$akun->email}}">
            </input>
            <label class="font-bold text-xl mr-24 mt-5"> Password </label>
            <input id="password" name="password" type="password" class=" w-1/2 h-12 border-2 bg-slate-50 p-2 mt-3"
                placeholder="Isikan Password Anda">
            </input>
            <label class="font-bold text-xl mr-24 mt-5"> Alamat </label>
            <input id="alamat" name="alamat" type="text" class=" w-1/2 h-12 border-2 bg-slate-50 p-2 mt-3"
                {{($akun->alamat
            != "") ? "value=$akun->alamat" : 'placeholder=Isikan_Alamat_Anda'}}>
            </input>
            <label class="font-bold text-xl mr-24 mt-5"> Nomor Telpon </label>
            <input id="notelp" name="notelp" type="text" class=" w-1/2 h-12 border-2 bg-slate-50 p-2 mt-3"
                {{($akun->notelp
            != "") ? "value=$akun->notelp" : 'placeholder=Isikan_Nomor_Anda'}}>

            <button type="submit"
                class="w-[168px] mt-5 text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
            </input>
        </form>

        <div class=" w-[1137px] h-max bg-white shadow-lg rounded-xl mt-10 p-20 flex flex-col">
            <h2 class="font-bold text-3xl "> Riwayat Pemesanan </h2>
            <div class="py-4">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Paket</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
                        <th>Ulasan</th>
                    </tr>
                </thead>
                <tbody>
                    @if($pesanan->count())
                    @foreach ($pesanan as $item)
                    <tr class="text-center mt-2">
                        <td class="p-1">{{$loop->iteration}}</td>
                        <td>{{$item->waktu_pemesanan}}</td>
                        <td>{{$item->layanan->nama_paketlayanan}}</td>
                        <td>{{$item->produk->nama_produk}}</td>
                        <td>{{$item->jumlah_produk_pesanan}}</td>
                        <td>{{$item->total_pembayaran}}</td>
                        <td>{{$item->status_pembayaran}}</td>
                        <td>
                            <a href="/ulasan/{{$item->id}}" class="text-blue-600">Ulasan</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="text-center p-10"> No record found </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
</main>
@endsection