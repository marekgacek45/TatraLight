const hamburgerBtn = document.querySelector('.hamburger')

const navCollapse = document.querySelector('.overlay')

const logoCenter = document.querySelector('.logo-center')
const logoLeft = document.querySelector('.logo-left')
const navList = document.querySelector('.nav-list')
const navSocial = document.querySelector('.nav-social')

const hamburgerHandler = ()=>{
    hamburgerBtn.classList.toggle('is-active')
    navCollapse.classList.toggle('left-[780px]');
    
}

hamburgerBtn.addEventListener('click',hamburgerHandler)


function obslugaScrolla() {
    // Pobierz aktualną pozycję scrolla w pionie
    var pozycjaScrolla = window.scrollY || window.pageYOffset;
  
    // Jeżeli pozycja scrolla osiągnęła lub przekroczyła 200 pikseli
    if (pozycjaScrolla >= 200) {
        // Przesuń div w górę o 100px
        logoCenter.classList.add('translate-y-[-100px]');
        logoLeft.classList.remove('translate-x-[-170px]');
        navSocial.classList.remove('translate-x-[150px]');
        navList.classList.remove('opacity-0')
    } else {
        // Przywróć div do pierwotnej pozycji
        logoCenter.classList.remove('translate-y-[-100px]');
        logoLeft.classList.add('translate-x-[-170px]')
        navSocial.classList.add('translate-x-[150px]')
        navList.classList.add('opacity-0')
    }
}

// Dodaj nasłuchiwanie scrolla, które wywoła funkcję obslugaScrolla
window.addEventListener('scroll', obslugaScrolla);