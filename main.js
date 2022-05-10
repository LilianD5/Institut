/*Slider*/

let slide = ["./img/slider/slider1.jpg", "./img/slider/slider2.jpg", "./img/slider/slider3.jpg"];
let slideNb = 0;

const next = document.getElementById("next");
const back = document.getElementById("back");

next.addEventListener('click', function () { 

    slideNb++;

    if (slideNb > slide.length - 1) {
        slideNb = 0;
    }

    document.getElementById("slide").src = slide[slideNb];

    console.log(slideNb);
})

back.addEventListener('click', function () {

    slideNb--;

    if (slideNb < 0) {
        slideNb = 2;
    }

    document.getElementById("slide").src = slide[slideNb];

    console.log(slideNb);
})

setInterval(function(){

    slideNb++;

    if (slideNb > slide.length - 1) {
        slideNb = 0;
    }

    document.getElementById("slide").src = slide[slideNb];
},5000)

/* Menu Burger */

const button = document.getElementById("icone-burger");
const menu = document.getElementById("menu-b");

button.addEventListener('click', function(){
    menu.classList.toggle('show');
});

console.log(button);




