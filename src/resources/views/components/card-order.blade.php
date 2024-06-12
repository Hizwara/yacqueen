@props(['data', 'loop'])

<div class="grid grid-cols-7 shadow p-2 rounded-xl hover:bg-slate-50">
  <div class="gap-x-4 col-span-4 flex items-center justify-start">
    <img src="{{ asset('images/cart/card_andini.png')}}" width="140" height="130" />
    <div class="text-black ">
      <h4 class="font-semibold text-2xl"> {{$data->event_name}} </h4>
      <input type="hidden" name="event_id[]" value="{{$data->id}}">
      <input type="hidden" name="pre_order_id[]" value="{{$data->pre_order_id}}">
      <div class="flex space-x-4 mt-2">
        <img src="{{ asset('icons/location.png')}}" width="20" height="20" />
        <p>{{$data->location}}</p>
      </div>
      <div class="flex space-x-4">
        <img src="{{ asset('icons/date.png')}}" width="20" height="20" />
        <p>{{$data->date}}</p>
      </div>
      <div class="flex space-x-4">
        <img src="{{ asset('icons/time.png')}}" width="20" height="20" />
        <p>{{$data->time}}</p>
      </div>
      <div class="flex space-x-4">
        <img src="{{ asset('icons/ticket.png')}}" width="20" height="20" />
        <p>{{$data->capacity}}</p>
      </div>
    </div>
  </div>
  <div class="flex items-center justify-center">
    <input type="number" id="{{'number_of_ticket_'.$loop}}" name="{{'number_of_ticket[]'}}" min="0" max="10"
      class=" border-2 border-black rounded-xl w-12 h-12 text-center" value="0" default="0" />
  </div>
  <div class="text-[#0077B6] flex items-center justify-center">
    <h4 class="font-semibold text-2xl" id="{{'price_'.$loop}}"> Rp.{{round($data->price)}} </h4>
  </div>
  <div class=" flex items-center justify-center">
    <a href="{{url('/remove_cart/'. $data->pre_order_id)}}">
      <img src="{{ asset('icons/delete.png')}}" width="20" height="20" />
    </a>
  </div>
</div>
<script>
  document.getElementById("{{'number_of_ticket_'.$loop}}").addEventListener("change", function(){
    var price = {{$data->price}};
    var number_of_ticket = document.getElementById("{{'number_of_ticket_'.$loop}}").value;
    var total_price = price * number_of_ticket;
    document.getElementById("{{'price_'.$loop}}").innerHTML = "Rp." + total_price;

    var total = 0;
    var i;
    for (i = 0; i < {{$loop}}; i++) {
      var price = document.getElementById("{{'price_'.$loop}}").innerHTML;
      var price = price.replace("Rp.", "");
      var price = parseInt(price);
      total = total + price;
    }
    document.getElementById("total_price").innerHTML = "Rp." + total;
  });
</script>