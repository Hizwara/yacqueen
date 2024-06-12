<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Source Sans Pro', sans-serif;">
    <div class="">
        <div id="main" class="row">
            <div class="min-h-screen grid md:grid-cols-2 grid-cols-1">
                <form action="{{ route('login.store') }}" method="POST"
                    class="flex flex-col items-center justify-center">
                    @csrf
                    <div class="w-3/4">
                        <a href="/" class="underline">
                            Kembali</a>
                        <h1 class="text-4xl font-bold text-center">Selamat Datang</h1>
                        @error('status')
                        <div class="text-red-500 text-center p-2 rounded">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mt-5 flex flex-col space-y-4">
                            <x-input id="email" label="Email" type="email" name="email" :value="old('email')" required
                                autofocus placeholder="Email" class="block mt-1 w-full" />
                            <x-input id="password" label="Password" type="password" name="password" required
                                autocomplete="current-password" placeholder="Password" class="block mt-1 w-full" />
                        </div>
                        <x-button class="mt-5 w-full bg-blue-500" color="blue" label="Login" type="submit" />
                        <div class="flex items-center justify-center mt-5">
                            <a href="{{ route('register') }}" class="text-center text-blue-500">Belum punya akun?
                                Daftar</a>
                        </div>
                    </div>
                </form>
                <div class="login-background hidden md:block">
                </div>
            </div>
        </div>
    </div>
</body>

</html>