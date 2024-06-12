<!doctype html>
<html>
<head>
  @include('includes.head')
</head>
<body class="leading-normal tracking-normal text-white" style="font-family: 'Source Sans Pro', sans-serif;">
  <div id="main" class="row">
    <div class="h-[416px] w-full">
      <img src="{{ asset('images/cart/bg.png') }}" class="h-[416px] w-full object-cover" />
    </div>
    <div class="layout py-12">
      <form action="{{route('cart.store')}}" method="POST">
        @csrf
        <div class="text-black">
          <h2 class="font-semibold text-3xl"> Tiket </h2>
          <hr class="border-2 border-black w-full mt-2" />
          <div class="py-12 space-y-6">
            @foreach ($pre_order as $loop => $item)
            <x-card-order :data="$item" :loop="$loop->iteration" />
            @endforeach
          </div>
          <hr class="border-2 border-black w-full mt-2" />
          <div class="flex justify-end px-10 gap-x-24 mt-8">
            <h4 class="text-xl font-semibold">SUBTOTAL</h4>
            <p class="ml-4 text-xl font-semibold" id="total_price">Rp.0</p>
          </div>
        </div>
        <div class="flex justify-between">
          <a href="/event"
            class="border border-gray-500 text-black font-semibold text-xl px-10 py-2 rounded-lg mt-8">Kembali</a>
          <button class="bg-[#1875DB] text-white font-semibold text-xl px-10 py-2 rounded-lg mt-8">Beli Tiket</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>