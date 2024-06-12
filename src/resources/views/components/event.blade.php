@props(['event'])


<div class="flex-col min-w-[320px] min-h-[520px] snap-start bg-white shadow rounded-xl">
    <div class="overflow-hidden ">
        <div class="flex flex-col">
            <img src="{{ asset('images/landing/event.png') }}" />
            <h4 class="text-black text-xl font-bold px-4 mt-1">
                {{$event->event_name}}
            </h4>
            <div class="text-black px-4 space-y-2 mt-4">
                <div class="flex gap-x-3">
                    <img src="{{ asset('icons/location.png')}}" width="20" height="20" />
                    <p>{{$event->location}}</p>
                </div>
                <div class="flex gap-x-3">
                    <img src="{{ asset('icons/date.png')}}" width="20" height="20" />
                    <p>{{$event->date}}</p>
                </div>
                <div class="flex gap-x-3">
                    <img src="{{ asset('icons/time.png')}}" width="20" height="20" />
                    <p>{{$event->time}}</p>
                </div>
                <div class="flex gap-x-3">
                    <img src="{{ asset('icons/ticket.png')}}" width="20" height="20" />
                    <p>{{$event->capacity}}</p>
                </div>
            </div>
            <div class="px-4 pb-4 flex justify-between mt-4 group">
                <h4 class="text-[#0077B6] text-2xl font-semibold">Rp.{{round($event->price)}}</h4>
                <a href="{{url('/event/'. $event->id)}}"
                    class="bg-[#0077B6] text-white p-2 rounded-full group-hover:scale-105">
                    <img src="{{ asset('icons/forward.png')}}" width="20" height="20" />
                </a>
            </div>
        </div>
    </div>
</div>