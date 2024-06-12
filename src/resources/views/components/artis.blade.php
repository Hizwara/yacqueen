@props(['artis'])


<div class="flex-col min-w-[320px] min-h-[520px] snap-start bg-white shadow rounded-xl">
    <div class="overflow-hidden ">
        <div href="#" class="flex flex-wrap no-underline hover:no-underline">
            <img src="{{ asset('images/landing/mahalini.png') }}" />
            <div class="w-full text-gray-800 p-2">
                <div class="flex justify-between">
                    <h4 class="font-bold text-xl">
                        {{ $artis['name'] }}
                    </h4>
                    {{-- <p>{{$artis['total']}}</p> --}}
                </div>
                <p class="">Saksikan Pada :</p>
            </div>
        </div>
    </div>
</div>
