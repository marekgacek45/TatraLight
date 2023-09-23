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

        <section
            class='about-bg w-full h-full text-white  bg-test bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-24'>
        
        <div class="max-w-screen-xl mx-auto flex ">
            <div class="w-1/2 flex flex-col justify-center items-center ">
                <div class="mr-24 relative w-80 h-80">
                    <img src="https://th.bing.com/th/id/OIG.wQsdRxjQa11q_DB4kdAA?pid=ImgGn" alt=""  class="absolute w-full object-cover top-5 right-20 border ">
                </div>
                <div class="mr-24 relative w-96 h-96">
                    <img src="https://th.bing.com/th/id/OIG.shs4jn5H99nL5Tq_0MJx?pid=ImgGn" alt=""  class="absolute w-full object-cover  border left-28 ">
                </div>
                <div class="mr-24 relative w-72 h-72">
                    <img src="https://th.bing.com/th/id/OIG.yUOXr6b69ipWrzC1mYPj?pid=ImgGn" alt=""  class="absolute w-full object-cover  border bottom-12 right-6">
                </div>
               
    
            </div>
            <div class="w-1/2 flex flex-col  items-center">
                <img src="{{asset('assets/logo--white.png')}}" alt="" width="350px">
                <p>Jesteśmy zespołem pasjonatów z TatraLight, którzy od lat oddają się fascynacji światłem i sztuką oświetlenia. Nasza historia zaczęła się w malowniczym Nowym Targu, gdzie otaczające nas Tatry zainspirowały nas do tworzenia niezwykłych projektów oświetleniowych. Dzięki naszemu zaangażowaniu i ekspertyzie, TatraLight stała się miejscem, gdzie nauka, kreatywność i innowacje spotykają się, by tworzyć niepowtarzalne rozwiązania oświetleniowe. Naszym celem jest przekształcanie światła w wyjątkowe doświadczenia, które przyciągają uwagę i pozostawiają trwałe wrażenia. Dołącz do nas na tej pasjonującej podróży przez świat oświetlenia.</p>

<div class="mt-12">

<ol class="relative border-l border-gray-200 dark:border-gray-700">                  
    <li class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind CSS</h3>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
  </svg></a>
    </li>
    <li class="mb-10 ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
    </li>
    <li class="ml-4">
        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
    </li>
</ol>

</div>

            </div>
        </div>
        
        
        
        </section>
        {{-- <section
        class='w-full h-full text-white  gradient bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-24 pb-16'>
    
    <div class="max-w-screen-xl mx-auto flex border">
        
        <div class="w-3/5 flex flex-col  items-center text-black">
          
          <h3>Światło, Pasja, Innowacja: Nasza Historia</h3>

          <p>
            Nasza historia jest historią pasji i poświęcenia, które przekształciły nas w lidera w dziedzinie oświetlenia. Zrodziliśmy się z miłości do światła, fascynacji jego możliwościami i przekonania, że możemy je wykorzystać, aby tworzyć niezwykłe doświadczenia. To była ta miłość do światła, która skłoniła nas do założenia TatraLight. Od tamtej chwili naszą główną inspiracją stało się to, jak światło wpływa na nasze życie i środowisko.
          </p>
          <p>  W TatraLight wierzymy, że światło to nie tylko narzędzie oświetleniowe, to medium, które może wywoływać emocje, tworzyć atmosferę i przekazywać przesłanie. Nasza pasja do oświetlenia prowadzi nas do nieustannego poszukiwania innowacyjnych rozwiązań, które pozwalają nam przekształcać światło w sztukę. Naszym celem jest nie tylko dostarczanie efektywnych i funkcjonalnych rozwiązań, ale również tworzenie dzieł, które inspirują i zachwycają.
            </p>


        </div>
        <div class="w-2/5 flex flex-col justify-center items-center border">
            <img src="https://th.bing.com/th/id/OIG.shs4jn5H99nL5Tq_0MJx?pid=ImgGn" alt="" width="500px">
            
 
         </div>
    </div>
    
    
    
    </section> --}}
    <section
    class='about-bg w-full h-full text-white  bg-test bg-blend-multiply bg-center px-10 md:px-0 pt-16 md:pt-24'>

<div class="max-w-screen-xl mx-auto flex ">
   
    <div class="w-1/2 flex flex-col  items-center">
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
