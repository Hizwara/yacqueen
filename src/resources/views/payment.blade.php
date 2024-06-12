<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="leading-normal tracking-normal"
    style="font-family: 'Source Sans Pro', sans-serif; background-color: #0077B6;">
    <div class="">
        <div id="main" class="row">
            <div>
                <form action="{{ route('payment.store') }}" method="POST"
                    class="flex flex-col items-center justify-center py-4" enctype="multipart/form-data">
                    @csrf
                    <div class="w-3/4">
                        <div class="w-5/6 sm:w-1/2 p-6">
                            <h3 class="text-5xl text-white font-bold leading-none mb-3">
                                Pembayaran
                            </h3>
                        </div>
                        <input type="hidden" name="order_code" value="{{$order_code}}" />
                        <select id="bank_id" label="Nama Bank" type="text" name="bank_id" :value="old('bank_id')"
                            required autofocus placeholder="Nama Bank"
                            class="block mt-1 w-full px-2 py-3 rounded-lg text-gray-500">
                            <option value=""> Pilih Bank </option>
                            @foreach ($banks as $bank)
                            <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                            @endforeach
                        </select>

                        <x-input id="proof_of_payment" label="Foto atau Bukti Pembayaran" type="file"
                            name="proof_of_payment" :value="old('proof_of_payment')" required autofocus
                            placeholder="Bukti bayar" class="block mt-1 w-full " />

                        <x-button class="mt-5 w-full" color="blue" label="Kirim" type="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>