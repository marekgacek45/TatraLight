<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Offer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--NAVIGATION -->
    <x-navigation.topBar />
    <!--NAVIGATION -->
    <main>
        <section class='about-bg w-full h-full text-white  bg-test bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-24'>
            <div class="flex flex-col justify-center items-center">
                <div class="flex flex-col justify-center items-center text-center  space-y-4 max-w-screen-lg mx-auto ">
        
                    <h2 class=" text-3xl lg:text-5xl text-bold">Odkryj świat TatraLight: Mistrzowie Reklamy Świetlnej</h2>
                    <p class="font-light leading-7">W TatraLight, pasja do tworzenia wyjątkowej reklamy świetlnej stanowi serce naszej działalności. Jesteśmy z Nowego Targu, miejscowości otoczonej malowniczymi Tatrami, co inspiruje nas do kreowania rozwiązań, które przyciągają wzrok i wzbudzają emocje. Nasza firma to miejsce, gdzie nauka, kreatywność i innowacje spotykają się, tworząc unikalne projekty oświetleniowe, które pomagają naszym klientom wyróżnić się w gąszczu konkurencji.</p>
                </div>
        
        
        
            {{-- <div class="mt-8 md:mt-16 grid grid-cols-1 lg:grid-cols-3 gap-10 xl:gap-16  max-w-screen-xl mx-auto justify-center md:px-12 xl:px-0"> --}}
            <div class="mt-8 md:mt-16 grid grid-cols-1 lg:grid-cols-3 gap-0 xl:gap-0  max-w-screen-xl mx-auto justify-center md:px-12 xl:px-0">
               
                    <x-offerCard :src="'https://th.bing.com/th/id/OIG.mSWV3Vwe_LD2bgJiX623?pid=ImgGn'" :heading="'Reklama Świetlna, Która Przyciąga Spojrzenia'" >Nasze innowacyjne rozwiązania w reklamie świetlnej to klucz do uwagi Twojego klienta. Nasze światła nie tylko oświetlają, ale też przyciągają, nadając Twojej firmie niepowtarzalny blask, który sprawi, że zostaniesz zapamiętany na długo.</x-offerCard>
                    <x-offerCard :src="'https://th.bing.com/th/id/OIG.T3.2_sdcrGDgG_ZEes3A?pid=ImgGn'" :heading="'Oświetlenie Wnętrz, które Tworzy Wyjątkową Atmosferę'" class="lg:mt-24">Nasze rozwiązania oświetleniowe wnętrz to klucz do kreowania niezapomnianych atmosfer w każdym pomieszczeniu. Dzięki nowoczesnym LED-om i innowacyjnym projektom, potrafimy przekształcić każde wnętrze w przestrzeń pełną wyrazu i nastroju.</x-offerCard>
                    <x-offerCard :src="'https://th.bing.com/th/id/OIG.ppep874WXBG3x8ZD7oaz?pid=ImgGn'" :heading="'Napisy LED - Twoja Wiadomość, Nasze Światło'" class="lg:mt-6">Napisy LED to potężne narzędzie komunikacji, które pomaga Twojej firmie wyróżnić się i przyciągnąć uwagę w każdym otoczeniu. W TatraLight oferujemy napisy LED najwyższej jakości, które można dostosować do Twoich unikalnych potrzeb.</x-offerCard>
                  
                </div>
            </div>
                
        
        
             <div class="py-16 pb-24 flex justify-center items-center ">
        
               
        
             </div>
            
        </section>
        <section
        class='w-full h-full text-white  gradient bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-24 pb-16'>
    
    <div class="max-w-screen-xl mx-auto flex ">
       
        <div class="w-1/2 flex flex-col  items-center text-black">
           <h3>Nowoczesna Technologia W Służbie Światła</h3>
            <p>W TatraLight stawiamy na najnowocześniejsze rozwiązania technologiczne, aby dostarczać naszym klientom oświetlenie najwyższej jakości. Nasza firma opiera się na zaawansowanych maszynach i narzędziach, które pozwalają nam tworzyć precyzyjne, skomplikowane projekty oświetleniowe.</p>
    
            <p>Korzystamy z najnowszych technologii LED, które nie tylko zapewniają energooszczędność, ale także pozwalają na wyjątkową kontrolę nad intensywnością i kolorem światła. To daje naszym projektom wyjątkową elastyczność i możliwość dostosowania oświetlenia do konkretnych potrzeb i atmosfery.</p>
    
            <p>Nasze materiały to wyłącznie wysokiej jakości surowce, które gwarantują trwałość i niezawodność naszych produktów. Połączenie zaawansowanej technologii, kreatywności oraz dbałości o jakość pozwala nam tworzyć innowacyjne rozwiązania oświetleniowe, które spełniają najwyższe standardy i pozostawiają niezapomniane wrażenia. W TatraLight łączymy pasję do światła z zaawansowaną technologią, aby kreować światło, które przekracza granice wyobraźni.</p>
    
        </div>
        <div class="w-1/2 flex flex-col justify-center items-center ">
            <div class="mr-24 relative w-80 h-80">
                <img src="https://th.bing.com/th/id/OIG.nsQw6g9P1HFoXCIbZa98?pid=ImgGn" alt=""  class="absolute w-full object-cover top-5 right-20 border ">
            </div>
            <div class="mr-24 relative w-96 h-96">
                <img src="https://th.bing.com/th/id/OIG.WtbW573TBm587y1PzTym?pid=ImgGn" alt=""  class="absolute w-full object-cover  border left-28 ">
            </div>
            <div class="mr-24 relative w-72 h-72">
                <img src="https://th.bing.com/th/id/OIG.OCadzOZgDRzXZnNme3gP?pid=ImgGn" alt=""  class="absolute w-full object-cover  border bottom-12 right-6">
            </div>
           
    
        </div>
    </div>
    
    
    
    </section>
        <section
        class='about-bg w-full h-full text-white  bg-test bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-24'>
    
    <div class="max-w-screen-xl mx-auto flex ">
       
        <div class="w-1/2 flex flex-col  items-center text-white order-1">
           <h3>Nowoczesna Technologia W Służbie Światła</h3>
            <p>W TatraLight stawiamy na najnowocześniejsze rozwiązania technologiczne, aby dostarczać naszym klientom oświetlenie najwyższej jakości. Nasza firma opiera się na zaawansowanych maszynach i narzędziach, które pozwalają nam tworzyć precyzyjne, skomplikowane projekty oświetleniowe.</p>
    
            <p>Korzystamy z najnowszych technologii LED, które nie tylko zapewniają energooszczędność, ale także pozwalają na wyjątkową kontrolę nad intensywnością i kolorem światła. To daje naszym projektom wyjątkową elastyczność i możliwość dostosowania oświetlenia do konkretnych potrzeb i atmosfery.</p>
    
            <p>Nasze materiały to wyłącznie wysokiej jakości surowce, które gwarantują trwałość i niezawodność naszych produktów. Połączenie zaawansowanej technologii, kreatywności oraz dbałości o jakość pozwala nam tworzyć innowacyjne rozwiązania oświetleniowe, które spełniają najwyższe standardy i pozostawiają niezapomniane wrażenia. W TatraLight łączymy pasję do światła z zaawansowaną technologią, aby kreować światło, które przekracza granice wyobraźni.</p>
    
        </div>
        <div class="w-1/2 flex flex-col justify-center items-center ">
            <div class="mr-24 relative w-80 h-80">
                <img src="https://th.bing.com/th/id/OIG.nsQw6g9P1HFoXCIbZa98?pid=ImgGn" alt=""  class="absolute w-full object-cover top-5 right-20 border ">
            </div>
            <div class="mr-24 relative w-96 h-96">
                <img src="https://th.bing.com/th/id/OIG.WtbW573TBm587y1PzTym?pid=ImgGn" alt=""  class="absolute w-full object-cover  border left-28 ">
            </div>
            <div class="mr-24 relative w-72 h-72">
                <img src="https://th.bing.com/th/id/OIG.OCadzOZgDRzXZnNme3gP?pid=ImgGn" alt=""  class="absolute w-full object-cover  border bottom-12 right-6">
            </div>
           
    
        </div>
    </div>
    
    
    
    </section>
        <section
        class='w-full h-full text-white  gradient bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-24 pb-16'>
    
    <div class="max-w-screen-xl mx-auto flex ">
       
        <div class="w-1/2 flex flex-col  items-center text-black">
           <h3>Nowoczesna Technologia W Służbie Światła</h3>
            <p>W TatraLight stawiamy na najnowocześniejsze rozwiązania technologiczne, aby dostarczać naszym klientom oświetlenie najwyższej jakości. Nasza firma opiera się na zaawansowanych maszynach i narzędziach, które pozwalają nam tworzyć precyzyjne, skomplikowane projekty oświetleniowe.</p>
    
            <p>Korzystamy z najnowszych technologii LED, które nie tylko zapewniają energooszczędność, ale także pozwalają na wyjątkową kontrolę nad intensywnością i kolorem światła. To daje naszym projektom wyjątkową elastyczność i możliwość dostosowania oświetlenia do konkretnych potrzeb i atmosfery.</p>
    
            <p>Nasze materiały to wyłącznie wysokiej jakości surowce, które gwarantują trwałość i niezawodność naszych produktów. Połączenie zaawansowanej technologii, kreatywności oraz dbałości o jakość pozwala nam tworzyć innowacyjne rozwiązania oświetleniowe, które spełniają najwyższe standardy i pozostawiają niezapomniane wrażenia. W TatraLight łączymy pasję do światła z zaawansowaną technologią, aby kreować światło, które przekracza granice wyobraźni.</p>
    
        </div>
        <div class="w-1/2 flex flex-col justify-center items-center ">
            <div class="mr-24 relative w-80 h-80">
                <img src="https://th.bing.com/th/id/OIG.nsQw6g9P1HFoXCIbZa98?pid=ImgGn" alt=""  class="absolute w-full object-cover top-5 right-20 border ">
            </div>
            <div class="mr-24 relative w-96 h-96">
                <img src="https://th.bing.com/th/id/OIG.WtbW573TBm587y1PzTym?pid=ImgGn" alt=""  class="absolute w-full object-cover  border left-28 ">
            </div>
            <div class="mr-24 relative w-72 h-72">
                <img src="https://th.bing.com/th/id/OIG.OCadzOZgDRzXZnNme3gP?pid=ImgGn" alt=""  class="absolute w-full object-cover  border bottom-12 right-6">
            </div>
           
    
        </div>
    </div>
    
    
    
    </section>

    </main>
    <x-footer />
</body>

</html>
