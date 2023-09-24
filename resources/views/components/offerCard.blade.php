{{-- <div class="border p-5 flex flex-col md:flex-row lg:flex-col justify-between items-center text-center space-y-2 bg-mainColor box-shadow max-w-[450px] md:max-w-full xl:max-w-[370px] gap-5"> --}}
<div {{$attributes(['class'=>" p-3 flex flex-col md:flex-row lg:flex-col  items-center text-center space-y-2   max-w-[450px] md:max-w-full xl:max-w-[400px] gap-5 test"])}}>
    <div class="max-w-[400px] box-shadow--img test-img">

        <img src="{{$src}}" alt="" class="w-full order">
    </div>
    <div class="space-y-3 ">

        <h3 class="text-2xl font-semibold text-secondaryColor">{{$heading}}</h3>
        <p >{{$slot}}</p>
    </div>
    </div>


   