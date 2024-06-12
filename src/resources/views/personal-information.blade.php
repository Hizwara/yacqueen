<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Source Sans Pro', sans-serif;">
    <div class="pt-24 header-form">
        {{-- <div class="layout px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center h-screen ">
        </div> --}}
    </div>
    <div class="">
        <div id="main" class="row">
            <div>
                <form action="{{ route('personal-information.store') }}" method="POST"
                    class="flex flex-col items-center justify-center py-4">
                    @csrf
                    <div class="w-3/4">
                        <a href="/" class="underline">
                            Kembali</a>
                        @error('status')
                        <div class="text-red-500 text-center p-2 rounded">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mt-5 flex flex-col space-y-4">
                            <input type="hidden" name="order_code" value="{{$order_code}}">
                            <x-input id="first_name" label="Nama Depan" type="text" name="first_name"
                                :value="old('first_name')" required autofocus placeholder="Nama Depan"
                                class="block mt-1 w-full" />
                            <x-input id="last_name" label="Nama Belakang" type="text" name="last_name"
                                :value="old('last_name')" required autofocus placeholder="Nama Belakang"
                                class="block mt-1 w-full " />
                            <x-input id="phone_number" label="Telepon" type="text" name="phone_number"
                                :value="old('phone_number')" required autofocus placeholder="Your Phone Number"
                                class="block mt-1 w-full " />
                            {{-- Nomor Identitas / NIK belum ada di DataBase --}}
                            <x-input id="nik" label="Nomor Identitas / NIK" type="text" name="nik" :value="old('nik')"
                                required autofocus placeholder="Nomor Identitas / NIK" class="block mt-1 w-full" />
                            {{-- Tanggal Lahir Belum --}}
                            <x-input id="birth_date" label="Tanggal Lahir" type="date" name="birth_date"
                                :value="old('birth_date')" required autofocus placeholder="Tanggal Lahir"
                                class="block mt-1 w-full" />
                            {{-- Jenis Kelamin Belum --}}
                            <div class="space-y-2">
                                <h2 class="font-semibold text-lg">Jenis Kelamin</h2>
                                <div>
                                    <input id='gender' type="radio" name="gender" value="L" required autofocus />
                                    <label for="gender" class="ml-2">Laki-laki</label>
                                </div>
                                <div>
                                    <input id='gender' type="radio" name="gender" value="P" required autofocus />
                                    <label for="gender" class="ml-2">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        {{-- tombol harusnya di kanan, menuju page "keranjang" --}}
                        <div style="display: flex; justify-content: space-between;">
                            {{-- tombol kembali belum di styling --}}
                            <a href="/" class="mt-5 underline text-blue-500">Kembali</a>
                            <x-button class="mt-5" color="blue" label="Selanjutnya" type="submit" href="/keranjang" />
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>