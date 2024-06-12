<header class="">
    <nav class="flex justify-between h-6 w-screen p-10 ">
        <div class="grid gap-x-1 grid-cols-6 text-center items-center ">
            <img src="https://i.ibb.co/pj8wrG0/image-removebg-preview-1.png" />
            <a href="/" class="cursor-pointer hover:text-blue-600 font-secondary">Beranda</a>
            <a href="/paket" class="cursor-pointer hover:text-blue-600 font-secondary">Paket</a>
            <a href="/produk" class="cursor-pointer hover:text-blue-600 font-secondary">Produk</a>
            <a href="/tentang-kami" class="cursor-pointer hover:text-blue-600 font-secondary">Tentang Kami</a>
            @auth
            <a href="/akun" class="cursor-pointer hover:text-blue-600 font-secondary">Akun</a>
            @endauth

        </div>
        @auth
        <div class="items-center h-[121px] object-center content-center align-middle flex">
            <a type="button" href="/akun"
                class="text-black bg-white hover:bg-slate-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-white dark:hover:bg-slate-200 focus:outline-none dark:focus:ring-blue-800">{{Auth::user()->name}}</a>
            <a type="button" href="/logout"
                class="text-white bg-red-600 border border-red-700 focus:outline-none hover:bg-red-800 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-700 dark:text-white dark:border-red-800 dark:hover:bg-red-700 dark:hover:border-red-800 dark:focus:ring-red-800">Logout</a>
        </div>
        @else
        <div class="items-center h-[121px] object-center content-center align-middle flex">
            <a type="button" href="/login"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Masuk</a>
            <a type="button" href="/signup"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Daftar</a>
        </div>

        @endauth
        </div>
    </nav>
</header>