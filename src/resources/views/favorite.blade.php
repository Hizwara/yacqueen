<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Source Sans Pro', sans-serif; background-color: white;">
    <div class="">
        <div id="main" class="row">
            <div>
                <form action="{{ route('register.store') }}" method="POST"
                    class="flex flex-col items-center justify-center py-4">
                    @csrf
                    <div class="w-3/4">


                        <div class="w-5/6 sm:w-1/2 p-6">
                            <h1 class="text-4xl text-black font-bold leading-none mb-3">
                                Favorite Saat Ini !
                            </h1>
                            <h1 class="text-1xl text-black leading-none mb-3">
                                Tanggal
                            </h1>
                        </div>

                        <div class="w-1/2 flex ">
                            <input type="text" placeholder="Search" id="search" name="search"
                                onchange="searchEvent(this.value)" value="{{ $search ?? '' }}"
                                class="w-full px-3 py-2 mr-2 text-sm text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500" />

                        </div>


                        {{-- LeaderBoard artisnya belum, gak tau gimana :( --}}



                    </div>

            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
