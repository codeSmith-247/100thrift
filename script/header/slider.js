let counter = 1;
let time = 7000;
let timmer = setTimeout(slide, time);
let slides = selectAll('header .slide');
let size = slides.length;

function slide() {

    deactivate_all('.slide');
    activate_itm(`.slide:nth-of-type(${counter})`);
    
    counter = counter >= size? 1 : counter + 1;
    timmer = setTimeout(slide, time);
}

