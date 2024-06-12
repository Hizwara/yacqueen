@extends("layout.layout")

@section('menu', 'Signup')

@section('content')

<main class="w-screen h-screen">
    <div class="h-[80px]"></div>
    <div class="flex flex-row justify-center items-center m-14">
        <img src={{URL("/image/login.png")}} class="mr-20">
        <div class="flex flex-col">
            <form method="POST" action="{{route('signup')}}">
                @csrf
                @if ($errors->has('loginError'))
                <div class="w-[462px] bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                    role="alert">
                    <span class="block sm:inline">{{$errors->first('loginError')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
                @endif

                <h1 class="ml-3 font-bold text-4xl mt-3">Mendaftar </h1>
                <input id="name" name="name" type="name" class="w-[462px] h-[69px] pl-3 mt-3 rounded"
                    placeholder="nama" />
                <input id="email" name="email" type="email" class="w-[462px] h-[69px] pl-3 mt-3 rounded"
                    placeholder="Email" />
                <input id="password" name="password" type="password" class="w-[462px] h-[69px] pl-3 mt-3 rounded"
                    placeholder="password" />
                <div class="mt-10 flex flex-row justify-center w-[462px]">

                    <button type="submit"
                        class="w-[168px] text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</button>
                    <p class="text-xl m-auto text-center"> atau </p>
                    <a type="button" href="/login"
                        class="w-[168px] text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>
                </div>
            </form>
        </div>
    </div>

</main>
@endsection