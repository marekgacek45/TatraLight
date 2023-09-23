<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--NAVIGATION -->
    <x-navigation.topBar />
    <!--NAVIGATION -->

    
    <main>
        <!--FIRST SECTION-->
        <x-primarySection.primarySection>

{{-- 
            <div class="mr-24 relative w-80 h-80">
                <img src="https://th.bing.com/th/id/OIG.nsQw6g9P1HFoXCIbZa98?pid=ImgGn" alt=""
                    class="absolute w-full object-cover top-5 right-20 border border-secondaryColor box-shadow--img ">
            </div>
            <div class="mr-24 relative w-96 h-96">
                <img src="https://th.bing.com/th/id/OIG.WtbW573TBm587y1PzTym?pid=ImgGn" alt=""
                    class="absolute w-full object-cover  border left-28 border-secondaryColor box-shadow--img ">
            </div>
            <div class="mr-24 relative w-72 h-72">
                <img src="https://th.bing.com/th/id/OIG.OCadzOZgDRzXZnNme3gP?pid=ImgGn" alt=""
                    class="absolute w-full object-cover  border bottom-12 right-6  border-secondaryColor box-shadow--img ">
            </div> --}}



            <!--IMAGES-->
            <x-primarySection.image>
                <div class="mr-24 relative
                w-56 h-56
                xs:w-64 xs:h-64
                sm:w-80 sm:h-80
                md:w-64 md:h-64
                xl:w-72 xl:h-72
                2xl:w-80 2xl:h-80 ">
                    <img src="https://th.bing.com/th/id/OIG.wQsdRxjQa11q_DB4kdAA?pid=ImgGn" alt=""
                        class="absolute w-full object-cover 
                      left-6 xs:left-0 sm:right-2 top-5 md:top-5 lg:right-20 
                        border border-secondaryColor box-shadow--img ">
                </div>
                <div class="mr-24 relative
                w-60 h-60
                xs:w-72 xs:h-72
                sm:w-80 sm:h-80 
                md:w-72 md:h-72 
                xl:w-80 xl:h-80 
                2xl:w-96 2xl:h-96 ">
                    <img src="https://th.bing.com/th/id/OIG.shs4jn5H99nL5Tq_0MJx?pid=ImgGn" alt=""
                        class="absolute w-full object-cover  border 
                        left-16 xs:left-28 md:left-12 lg:left-28
                         border-secondaryColor box-shadow--img ">
                </div>
                <div class="mr-24 relative 
                w-48 h-48
                xs:w-56 xs:h-56
               sm:w-72 sm:h-72
                md:w-60 md:h-60 
                xl:w-64 xl:h-64 
                2xl:w-72 2xl:h-72 ">
                    <img src="https://th.bing.com/th/id/OIG.yUOXr6b69ipWrzC1mYPj?pid=ImgGn" alt=""
                        class="absolute w-full object-cover  border 
                         left-4 xs:left-0 bottom-12 right-6 md:bottom-6 lg:bottom-12 lg:right-6
                         border-secondaryColor box-shadow--img">
                </div>
            </x-primarySection.image>
            <!--TEXT-->
            <x-primarySection.text>
                <img src="{{ asset('assets/logo--white.png') }}" alt="" width="350px" class="mb-12">
                <p>Jesteśmy zespołem pasjonatów z TatraLight, którzy od lat oddają się fascynacji światłem i sztuką
                    oświetlenia. Nasza historia zaczęła się w malowniczym Nowym Targu, gdzie otaczające nas Tatry
                    zainspirowały nas do tworzenia niezwykłych projektów oświetleniowych. Dzięki naszemu zaangażowaniu i
                    ekspertyzie, TatraLight stała się miejscem, gdzie nauka, kreatywność i innowacje spotykają się, by
                    tworzyć niepowtarzalne rozwiązania oświetleniowe. Naszym celem jest przekształcanie światła w
                    wyjątkowe
                    doświadczenia, które przyciągają uwagę i pozostawiają trwałe wrażenia. Dołącz do nas na tej
                    pasjonującej
                    podróży przez świat oświetlenia.</p>
                <x-timeline />
            </x-primarySection.text>
        </x-primarySection.primarySection>


        <!--SECOND SECTION-->
        <x-primarySection.primarySection>
            <!--IMAGES-->
            <x-primarySection.image class="md:order-1">
                {{-- <div class="mr-24 relative w-80 h-80">
                    <img src="https://th.bing.com/th/id/OIG.nsQw6g9P1HFoXCIbZa98?pid=ImgGn" alt=""
                        class="absolute w-full object-cover top-5 right-20 border border-secondaryColor box-shadow--img ">
                </div>
                <div class="mr-24 relative w-96 h-96">
                    <img src="https://th.bing.com/th/id/OIG.WtbW573TBm587y1PzTym?pid=ImgGn" alt=""
                        class="absolute w-full object-cover  border left-28 border-secondaryColor box-shadow--img ">
                </div>
                <div class="mr-24 relative w-72 h-72">
                    <img src="https://th.bing.com/th/id/OIG.OCadzOZgDRzXZnNme3gP?pid=ImgGn" alt=""
                        class="absolute w-full object-cover  border bottom-12 right-6  border-secondaryColor box-shadow--img ">
                </div> --}}
                <div class="mr-24 relative
                w-56 h-56
                xs:w-64 xs:h-64
                sm:w-80 sm:h-80
                md:w-64 md:h-64
                xl:w-72 xl:h-72
                2xl:w-80 2xl:h-80 ">
                    <img src="https://th.bing.com/th/id/OIG.wQsdRxjQa11q_DB4kdAA?pid=ImgGn" alt=""
                        class="absolute w-full object-cover 
                      left-6 xs:left-0 sm:right-2 top-5 md:top-5 lg:right-20 
                        border border-secondaryColor box-shadow--img ">
                </div>
                <div class="mr-24 relative
                w-60 h-60
                xs:w-72 xs:h-72
                sm:w-80 sm:h-80 
                md:w-72 md:h-72 
                xl:w-80 xl:h-80 
                2xl:w-96 2xl:h-96 ">
                    <img src="https://th.bing.com/th/id/OIG.shs4jn5H99nL5Tq_0MJx?pid=ImgGn" alt=""
                        class="absolute w-full object-cover  border 
                        left-16 xs:left-28 md:left-12 lg:left-28
                         border-secondaryColor box-shadow--img ">
                </div>
                <div class="mr-24 relative 
                w-48 h-48
                xs:w-56 xs:h-56
               sm:w-72 sm:h-72
                md:w-60 md:h-60 
                xl:w-64 xl:h-64 
                2xl:w-72 2xl:h-72 ">
                    <img src="https://th.bing.com/th/id/OIG.yUOXr6b69ipWrzC1mYPj?pid=ImgGn" alt=""
                        class="absolute w-full object-cover  border 
                         left-4 xs:left-0 bottom-12 right-6 md:bottom-6 lg:bottom-12 lg:right-6
                         border-secondaryColor box-shadow--img">
                </div>
            </x-primarySection.image>
            <!--TEXT-->
            <x-primarySection.text>
                <h3 class="heading">Nowoczesna Technologia W Służbie Światła</h3>
                <p class="mb-8">W TatraLight stawiamy na najnowocześniejsze rozwiązania technologiczne, aby dostarczać naszym
                    klientom oświetlenie najwyższej jakości. Nasza firma opiera się na zaawansowanych maszynach i
                    narzędziach, które pozwalają nam tworzyć precyzyjne, skomplikowane projekty oświetleniowe.</p>

                <p class="mb-8">Korzystamy z najnowszych technologii LED, które nie tylko zapewniają energooszczędność, ale także
                    pozwalają na wyjątkową kontrolę nad intensywnością i kolorem światła. To daje naszym projektom
                    wyjątkową elastyczność i możliwość dostosowania oświetlenia do konkretnych potrzeb i atmosfery.</p>

                <p>Nasze materiały to wyłącznie wysokiej jakości surowce, które gwarantują trwałość i niezawodność
                    naszych produktów. Połączenie zaawansowanej technologii, kreatywności oraz dbałości o jakość pozwala
                    nam tworzyć innowacyjne rozwiązania oświetleniowe, które spełniają najwyższe standardy i
                    pozostawiają niezapomniane wrażenia. W TatraLight łączymy pasję do światła z zaawansowaną
                    technologią, aby kreować światło, które przekracza granice wyobraźni.</p>

            </x-primarySection.text>
        </x-primarySection.primarySection>


    </main>
    <x-footer />
</body>

</html>
