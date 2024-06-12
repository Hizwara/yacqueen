@extends('layout.layout')

@section('menu', 'Checkout');

@section('content')

<main class="h-max w-full">
    <div class="h-[80px] "></div>
    <div class="bg-white h-max w-[1137px] rounded-xl p-10 m-14 ">
        <h2 class="text-3xl font-bold text-center">Checkout</h2>

        <p class="text-right mr-14">{{$pesanan->waktu_pemesanan}}
        <p>
        <div class="py-4">
            <div class="w-full border-t border-gray-300"></div>
        </div>
        <form action="/checkout/{{$idpesanan}}" method="POST">
            <div class="flex flex-row">
                <div class="flex flex-col w-1/2">
                    <div class="flex flex-row justify-between">
                        <p>Nama</p>
                        <input class="w-1/2  ml-28" value="{{$akun->name}}" disabled>
                    </div>
                    {{-- Border --}}
                    <div class="py-4">
                        <div class="w-full border-t border-dotted border-gray-300"></div>
                    </div>

                    <div class="flex flex-row justify-between">
                        <p>Paket Pesanan</p>
                        <input class="w-1/2  ml-28" value="{{$pesanan->layanan->nama_paketlayanan}}" disabled>
                    </div>
                    {{-- Border --}}
                    <div class="py-4">
                        <div class="w-full border-t border-dotted border-gray-300"></div>
                    </div>

                    <div class="flex flex-row justify-between">
                        <p>Produk Pesanan</p>
                        <input class="w-1/2  ml-28" value="{{$pesanan->produk->nama_produk}}" disabled>
                    </div>

                    {{-- Border --}}
                    <div class="py-4">
                        <div class="w-full border-t border-dotted border-gray-300"></div>
                    </div>

                    <div class="flex flex-row justify-between">
                        <p>Alamat</p>
                        <input class="w-1/2  ml-28" value="{{$pesanan->alamat}}" disabled>
                    </div>


                    {{-- Border --}}
                    <div class="py-4">
                        <div class="w-full border-t border-dotted border-gray-300"></div>
                    </div>

                    <div class="flex flex-row justify-between">
                        <p>Metode Pembayaran</p>
                        <select class="w-1/2 ml-28 h-10 rounded" id="pembayaran" name="pembayaran" required>
                            <option> --- Pilih Metode Pembayaran -- </option>
                            <option value="Cash"> Cash</option>
                            <option value="Debit">Debit</option>
                            </option>
                        </select>
                    </div>

                    {{-- Border --}}
                    <div class="py-4">
                        <div class="w-full border-t border-dotted border-gray-300"></div>
                    </div>

                    <div class="flex flex-row justify-between">
                        <p>Total Pembayaran</p>
                        <input class="w-1/2  ml-28" value="{{$harga}}" disabled>
                    </div>

                </div>
                <div class="flex flex-col w-1/2">
                    <div class="flex flex-row mt-[115px] ml-14">
                        <p>Jumlah</p>
                        <input class="w-1/2  ml-28" value="{{$pesanan->jumlah_produk_pesanan}}" disabled>
                    </div>
                    <div class="py-4">
                        <div class="w-full border-t border-dotted border-gray-300"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end flex-row">
                <button type="submit"
                    class="w-[168px] text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pesan</button>
                <a href="gajadi/{{$idpesanan}}" type="submit"
                    class="w-[168px] text-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Ga
                    Jadi</a>
        </form>



    </div>


</main>

@endsection