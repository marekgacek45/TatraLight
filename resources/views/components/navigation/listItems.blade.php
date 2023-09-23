
<ul {{$attributes(['class'=>""])}}>
    <a href="{{route('about')}}"><li>O nas</li></a>
    <a href=""><li>Oferta</li></a>
    <a href=""><li>Galeria</li></a>
    <a href=""><li>Kontakt</li></a>
    <div class="md:hidden flex gap-4 mt-10">
        <x-socialItems/>
    </div>
</ul>

