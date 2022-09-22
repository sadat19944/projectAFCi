// drop down menu



let navbars = document.querySelectorAll('.navbar');
console.log(navbars);

navbars.forEach(navbar => {
    const select = navbar.querySelector('.select');
    const caret = navbar.querySelector('.caret');
    const menu = navbar.querySelector('.menu');
    const options = navbar.querySelectorAll('.menu li');
    const selected = navbar.querySelector('.selected');
   

    select.addEventListener('click', () => {
        navbars.forEach(nav=>toggleNavbar(nav, false));
        toggleNavbar(navbar);
    });
   
    
    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            toggleNavbar(navbar, false);
            options.forEach(option => {
                option.classList.remove('active');
            });
            option.classList.add('active');
            
        });
            
    });
    document.addEventListener("click",function(e){
    if(!e.target.classList.contains('select')  && !e.target.classList.contains('caret') && !e.target.classList.contains('menu')
    && !e.target.classList.contains('selected')){ // && e.target !== 'menu li' 
        toggleNavbar(navbar, false);
        // options.classList.remove('menu li');
        // selected.classList.remove('selected');
    }
});
});
function toggleNavbar(navbar, toggle = true){
    const select = navbar.querySelector('.select');
    const caret = navbar.querySelector('.caret');
    const menu = navbar.querySelector('.menu');
    if(toggle)
    {
        select.classList.toggle('select-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menu-open');
    }else{
        select.classList.remove('select-clicked');
        caret.classList.remove('caret-rotate');
        menu.classList.remove('menu-open');
    }
}



// third part
const items = document.querySelectorAll('.slide');
const nbSlide = items.length;
console.log(nbSlide);
const prev = document.querySelector('.prev');
const  next= document.querySelector('.next');

let count = 0;
function slideSuivante(){
    items[count].classList.remove('active');

    if(count < nbSlide -1){
        count++;
    }else{
       count = 0;

    }
    items[count].classList.add('active')
    console.log(count);
}
prev.addEventListener('click', slideSuivante);


//Second Button

function slidePrecedent(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    }else{
        count = nbSlide - 1;
    }
    items[count].classList.add('active')
    console.log(count);
    
}
next.addEventListener('click', slidePrecedent)