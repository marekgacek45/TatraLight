<nav class="bg-red-500 fixed top-0 w-full z-50">
    <div class="max-w-screen-xl flex justify-between items-center mx-auto px-2 relative">
  <!--LOGO LEFT -->
  <div class="logo-left transform -translate-x-[-150px] ml-[-140px] transition-transform duration-300 ease-in-out">
    <a href="#">
        <img src="{{asset('assets/logo--sign.png')}}" alt="" width="50px">
    </a>
</div>

        <!--LOGO CENTER -->
        <div class="logo-center absolute bg-black top-0 -bottom-10 left-1/2 flex justify-center items-center transform -translate-x-1/2 px-4 transition-transform duration-300 ease-in-out ">
            <a href="#">
                <img src="{{asset('assets/logo--white.png')}}" alt="" width="90px">
            </a>
        </div>
        <div class="nav-list hidden md:flex opacity-0 opacity-transition">
            <ul class="flex">
                <li>test</li>
                <li>test</li>
                <li>test</li>
            </ul>
        </div>

<div class="hidden md:block nav-social transform -translate-x-[150px] ml-[150px] transition-transform duration-300 ease-in-out">
    <button>test</button>
</div>


          <!--HAMBURGER -->
        <div class="ml-auto md:hidden">
            <button class="hamburger hamburger--spring" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</nav>

