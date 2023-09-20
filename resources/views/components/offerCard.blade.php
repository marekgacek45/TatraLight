<div class="border p-5 flex flex-col md:flex-row lg:flex-col justify-between items-center text-center space-y-2 bg-mainColor box-shadow max-w-[450px] md:max-w-full xl:max-w-[370px] gap-5">
    <div class="max-w-[300px]">

        <img src="{{$src}}" alt="" class="w-full">
    </div>
    <div>

        <h3 class="text-xl font-semibold text-secondaryColor">{{$heading}}</h3>
        <p>{{$slot}}</p>
    </div>
    </div>