// const liczbaSpan= document.querySelector('.counter-1')
const counter1 = document.querySelector(".counter-1");
const counter2 = document.querySelector(".counter-2");
const counter3 = document.querySelector(".counter-3");




const counter = (x, y, span, time,p,z) => {
    const interval = setInterval(() => {
        span.innerHTML = p + x + z;
        x++;
        if (x > y) {
            clearInterval(interval);
        }
    }, time);
};

counter(0, 10, counter1, 100,"","");
counter(0, 300, counter2, 5,'<',"");
counter(0, 100, counter3, 50,'','%');
