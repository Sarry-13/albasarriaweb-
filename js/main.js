//Logo animation

$(document).ready(function(){
    $(".logo-nav").fadeIn(2000);
    $(".introduction").animate({
        top: '200px', opacity: '1'},"slow");
    $(".intro-dev").animate({
        top: '200px', opacity: '1'},"slow");
    $(".intro-description").animate({
        top: '350px', opacity: '1'},"slow");
    $(".silhouette").animate({
        top: '9vh', opacity: '0.2'},"slow");
        
});

//menu toggle
var btn = $('.btn');
var cont = 0;
btn.on('click', function() {

    if (cont == 0) {
        $(this).toggleClass('init');
        $(this).toggleClass('active');
        cont++;

    }else if (cont > 0) {
        $(this).toggleClass('active');
        $(this).toggleClass('not-active');
    }

   showMenu();
});







function showMenu(){
    setTimeout(function(){
        $(".menu-hidden").fadeToggle(250);

    }
,500)};




//Show hidden menu
/*

$("#menu-hidden").toggleClass('menu-hidden');
$("#menu-hidden").toggleClass('menu-hidden hidden');
},550);*/






//Show arrow


$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > window.innerHeight) {
      $('#arrow').fadeIn();
    } else {
      $('#arrow').fadeOut();
    }
  });

//Control onScroll event

function scrollLink(){
    var elemAbout = document.getElementById("about"); 
    elemAbout.classList.remove("about-scroll");
}
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollpos = window.pageYOffset;
    if((prevScrollpos < currentScrollpos)&&(currentScrollpos < 300)) {
        var elem = document.getElementsByClassName("about-scroll")[0]; 
        elem.scrollIntoView(); 
    }else{
        var elemAbout = document.getElementById("about"); 
        elemAbout.classList.add("about-scroll");
    }
    prevScrollpos = currentScrollpos
}
