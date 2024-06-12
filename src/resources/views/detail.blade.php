<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="leading-normal tracking-normal text-white" style="font-family: 'Source Sans Pro', sans-serif;">
    <div class="">
        <div id="main" class="row">
            <!-- main content -->
            <section class="layout h-screen py-8">
                <a href="{{ url('/event') }}" class="text-blue-500 py-4">Kembali</a>
                <img src="{{ asset('images/event/detail.png') }}" class="w-full h-full object-cover rounded-lg" />
            </section>
            <section class="layout">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    @foreach ($event['guest_star'] as $item)
                    <p>{{ $item->name }}</p>
                    @if (!$loop->last)
                    <p class="text-gray-600 mb-8">, </p>
                    @endif
                    @endforeach
                </h3>

                <div class="text-black flex justify-between items-center ">
                    <div class="flex items-center justify-start space-x-2">
                        <img src="{{ asset('icons/location.png') }}" width="30" height="30" />
                        <p>{{$event['event']->location}}</p>
                    </div>
                    <div class="flex items-center justify-start space-x-2">
                        <img src="{{ asset('icons/date.png') }}" width="30" height="30" />
                        <p>{{$event['event']->date}}</p>
                    </div>
                    <div class="flex items-center justify-start space-x-2">
                        <img src="{{ asset('icons/time.png') }}" width="30" height="30" />
                        <p>{{$event['event']->time}}</p>
                    </div>
                    <div class="flex items-center justify-start space-x-2">
                        <img src="{{ asset('icons/ticket.png') }}" width="30" height="30" />
                        <p>{{$event['event']->capacity}}</p>
                    </div>
                </div>
            </section>

            <section class="layout">
                <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                    <h3 class="text-2xl text-gray-800 leading-none mb-3">
                        Tentang Event
                    </h3>
                    <p class="text-gray-600 mb-8">
                        {{$event['event']->description}}
                    </p>
                </div>
                <div class="">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Timeline Event
                    </h3>
                    @if ($event['timeline'] != null)
                    <div class="h-[460px]">
                        <div class="h-full w-1 bg-[#1875DB] rounded-full flex justify-between flex-col items-center">
                            <div class="flex gap-x-8 relative ">
                                <div
                                    class="w-[60px] h-[60px] bg-[#1875DB] absolute rounded-full flex items-center justify-center -translate-x-1/2">
                                    <p class="font-semibold text-xl">1</p>
                                </div>
                                <div class="text-black absolute w-[400px] left-12">
                                    <h3 class="font-semibold text-xl">Penukaran Tiket & Open Gate </h3>
                                    <p> 12.00 - 13.00</p>
                                    <p>Tukar tiketmu di loket yang telah disediakan</p>
                                </div>
                            </div>
                            <div class="flex gap-x-8 relative ">
                                <div
                                    class="w-[60px] h-[60px] bg-[#1875DB] absolute rounded-full flex items-center justify-center -translate-x-1/2">
                                    <p class="font-semibold text-xl">1</p>
                                </div>
                                <div class="text-black absolute w-[400px] left-12">
                                    <h3 class="font-semibold text-xl">Pembukaan </h3>
                                    <p> 12.00 - 13.00</p>
                                    <p>Tukar tiketmu di loket yang telah disediakan</p>
                                </div>
                            </div>
                            <div class="flex gap-x-8 relative ">
                                <div
                                    class="w-[60px] h-[60px] bg-[#1875DB] absolute rounded-full flex items-center justify-center -translate-x-1/2">
                                    <p class="font-semibold text-xl">1</p>
                                </div>
                                <div class="text-black absolute w-[400px] left-12">
                                    <h3 class="font-semibold text-xl">Konser</h3>
                                    <p> 12.00 - 13.00</p>
                                    <p>Tukar tiketmu di loket yang telah disediakan</p>
                                </div>
                            </div>
                            <div class="flex gap-x-8 relative ">
                                <div
                                    class="w-[60px] h-[60px] bg-[#1875DB] absolute rounded-full flex items-center justify-center -translate-x-1/2">
                                    <p class="font-semibold text-xl">1</p>
                                </div>
                                <div class="text-black absolute w-[400px] left-12">
                                    <h3 class="font-semibold text-xl">Penutupan</h3>
                                    <p> 12.00 - 13.00</p>
                                    <p>Tukar tiketmu di loket yang telah disediakan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="text-black">
                        <p>Belum ada timeline</p>
                    </div>
                    @endif

                    @if ($pre_order != null)
                    <div class="flex items-center justify-center my-12">
                        <a class="w-full bg-blue-500 rounded-xl px-4 py-2 text-center" href="{{route('cart')}}"> Cek
                            Keranjang </a>
                    </div>
                    @else

                    <div class="flex items-center justify-center my-12">
                        <a class="w-full bg-blue-500 rounded-xl px-4 py-2 text-center"
                            href="{{ url('/add_cart/'.$event['event']->id ) }}"> Masukkan Keranjang </a>
                    </div>
                    @endif
            </section>
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>