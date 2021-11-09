var hero = document.getElementById("hero");
var main0 = document.getElementById("main0");
var main1 = document.getElementById("main1");
var main2 = document.getElementById("main2");
var main3 = document.getElementById("main3");
var main4 = document.getElementById("main4");
var main5 = document.getElementById("main5");
var main6 = document.getElementById("main6");
var main7 = document.getElementById("main7");
var main8 = document.getElementById("main8");


var header = document.getElementById("header");


var navbar = document.getElementById("navbar");
var navbarToggle = document.getElementById("mobile-nav-toggle");

var faceimg1 = document.getElementById("faceimg");
var facename1 = document.getElementById("facename");
var facetext1 = document.getElementById("facetext");



var scrwidth;

    main8.style.display = "none";
    main7.style.display = "none";
    main6.style.display = "none";
    main5.style.display = "none";
    main4.style.display = "none";
    main3.style.display = "none";
    main2.style.display = "none";
    main1.style.display = "none";
    





function Home(){
    scrwidth = screen.width;
    main8.style.display = "none";
    main7.style.display = "none";
    main6.style.display = "none";
    main5.style.display = "none";
    main4.style.display = "none";
    main3.style.display = "none";
    main2.style.display = "none";
    main1.style.display = "none";
    main0.style.display = "block";
    hero.style.display = "block";
    header.classList.add('header')
    header.classList.remove('header2')
    if(( scrwidth <= 992)){
        navbar.classList.toggle('navbar-mobile')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
    }
}

function About(){

   // header.style.background = "#1e4356";
    main8.style.display = "none";
    main7.style.display = "none";
    main6.style.display = "none";
    main5.style.display = "none";
    main4.style.display = "none";
    main3.style.display = "none";
    main2.style.display = "none";
    main1.style.display = "block";
    main0.style.display = "none";
    hero.style.display = "none" ;
    hero.style.display = "none";
    header.classList.add('header2')
    header.classList.remove('header')
    scrwidth = screen.width;
    if(( scrwidth <= 992)){
        navbar.classList.toggle('navbar-mobile')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
    }
}
function Programs(){
    main8.style.display = "none";
    main7.style.display = "none";
    main6.style.display = "none";
    main5.style.display = "none";
    main4.style.display = "block";
    main3.style.display = "none";
    main2.style.display = "none";
    main1.style.display = "none";
    main0.style.display = "none";
    hero.style.display = "none";
    header.classList.add('header2')
    header.classList.remove('header')
    scrwidth = screen.width;
    if(( scrwidth <= 992)){
        navbar.classList.toggle('navbar-mobile')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
    }
}
function Gallery(){
    main8.style.display = "none";
    main7.style.display = "none";
    main6.style.display = "none";
    main5.style.display = "none";
    main4.style.display = "none";
    main3.style.display = "block";
    main2.style.display = "block";
    main1.style.display = "none";
    main0.style.display = "none";
    hero.style.display = "none";
    scrwidth = screen.width;
    header.classList.add('header2')
    header.classList.remove('header')
    if(( scrwidth <= 992)){
        navbar.classList.toggle('navbar-mobile')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
    }
}
function Executives(){
    main8.style.display = "none";
    main7.style.display = "none";
    main6.style.display = "block";
    main5.style.display = "none";
    main4.style.display = "none";
    main3.style.display = "none";
    main2.style.display = "none";
    main1.style.display = "none";
    main0.style.display = "none";
    hero.style.display = "none";
    header.classList.add('header2')
    header.classList.remove('header')
    scrwidth = screen.width;
    if(( scrwidth <= 992)){
        navbar.classList.toggle('navbar-mobile')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
    }
}
function Profile(){
    main8.style.display = "block";
    main7.style.display = "none";
    main6.style.display = "none";
    main5.style.display = "none";
    main4.style.display = "none";
    main3.style.display = "none";
    main2.style.display = "none";
    main1.style.display = "none";
    main0.style.display = "none";
    hero.style.display = "none";
    header.classList.add('header2')
    header.classList.remove('header')
    scrwidth = screen.width;
    if(( scrwidth <= 992)){
        navbar.classList.toggle('navbar-mobile')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
    }
}
function Contact(){
    //update.style.display = "none";
    main8.style.display = "none";
    main7.style.display = "none";
    main6.style.display = "nones";
    main5.style.display = "block";
    main4.style.display = "none";
    main3.style.display = "none";
    main2.style.display = "none";
    main1.style.display = "none";
    main0.style.display = "none";
    hero.style.display = "none";
    header.classList.add('header2')
    header.classList.remove('header')
    scrwidth = screen.width;
    if(( scrwidth <= 992)){
        navbar.classList.toggle('navbar-mobile')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
    }
}

function SOB(){

}
function PU(){

}
function FOB(){

}
function VOB(){
    
}
function EOB(){
    
}
function PUU(){

}
function FAU(){

}
function TOS(){

}

function QTime(){

}
var id =1;
function seeMore(){

id++;
if (id < 0 || id > 20) {
return id= 0;
} else {
    
}
}

var btnfw1 = document.getElementById("btnfw1");
var btnfw2 = document.getElementById("btnfw2");

