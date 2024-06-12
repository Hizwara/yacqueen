@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <section class="pt-24 event-background">
        <div class="layout px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center h-[calc(100vh-6rem)]">
            <!--Left Col-->
            <div class="flex flex-col w-full justify-center items-start text-center md:text-left">
                <h1 class="my-4 text-5xl font-bold leading-tight" style="font-family: Titania;">
                    TiKo
                </h1>
                <h2 class="leading-normal text-2xl mb-8">
                    Temukan Event Konser Saat Ini!
                </h2>
                <div class="w-1/2 flex ">
                    <input type="text" placeholder="Cari Event" id="search" name="search"
                        onchange="searchEvent(this.value)" value="{{ $search ?? '' }}"
                        class="w-full px-3 py-2 mr-2 text-sm text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500" />

                </div>
            </div>
        </div>
    </section>

    {{-- Event --}}
    <section class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
                Event
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap overflow-auto gap-3 p-6">
                @foreach ($events as $event)
                    <x-event :event="$event" />
                @endforeach
            </div>
        </div>
    </section>
    <script>
        function searchEvent(value) {
            window.location.href = "/event?search=" + value;
        }
    </script>
@endsection
