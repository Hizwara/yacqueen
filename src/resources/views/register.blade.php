<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Source Sans Pro', sans-serif;">
    <div class="">
        <div id="main" class="row">
            <div class="min-h-screen grid md:grid-cols-2 grid-cols-1">
                <form action="{{ route('register.store') }}" method="POST"
                    class="flex flex-col items-center justify-center py-4">
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
                            <x-input id="first_name" label="First Name" type="text" name="first_name"
                                :value="old('first_name')" required autofocus placeholder="First Name"
                                class="block mt-1 w-full" />
                            <x-input id="last_name" label="Last Name" type="text" name="last_name" :value="old('last_name')"
                                required autofocus placeholder="Last Name" class="block mt-1 w-full " />
                            <x-input id="phone_number" label="Phone Number" type="text" name="phone_number"
                                :value="old('phone_number')" required autofocus placeholder="Your Phone Number"
                                class="block mt-1 w-full " />
                            <x-input id="email" label="Email" type="text" name="email" :value="old('email')"
                                required autofocus placeholder="Email" class="block mt-1 w-full" />
                            <x-input id="password" label="Password" type="password" name="password" required
                                autocomplete="current-password" placeholder="Password" class="block mt-1 w-full" />
                            <x-input id="password_confirmation" label="Password Confirmation" type="password"
                                name="password_confirmation" required autocomplete="current-password"
                                placeholder="Password Confirmation" class="block mt-1 w-full" />

                        </div>
                        <x-button class="mt-5 w-full" color="blue" label="Login" type="submit" />
                        <div class="flex items-center justify-center mt-5">
                            <a href="{{ route('login') }}" class="text-center text-blue-500">Sudah punya akun?
                                Register</a>
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
