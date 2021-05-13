
const $sticky = $("#header");
let $carousel = $("#carousel");
let $head = $('#header');

var scrollPos = 0, currentPos = 0, oldPos, slide = false;
var atTop = true, time = 350, topCap = 250;

$sticky.css("width", "100%");

/**
 * This Controls the header animation and positioning
 * When the user scrolls up the  
 */

window.addEventListener("scroll", () =>{
  //checks to see if user is scrolling up
  oldPos = currentPos;
  currentPos = scrollY;

  // if(scrollY > topCap) {
   //Animation can play
   if(oldPos > currentPos & slide === false){
      $sticky.css("position", "fixed");
      $head.animate({top: '-220px'}, 0);
      $head.animate({top: '0px'}, time);
      slide = true;
  }else if (oldPos < currentPos){
    $sticky.css("position", "absolute")
    slide = false;
  }

  // }
});

window.addEventListener("scroll", () =>{

  if(scrollY < topCap){
    console.log("Less then 345");
    $head.animate().stop();

    //Runs the sameAnimation as above but with 0;
    $head.animate({top: '-220px'}, 0);
    $head.animate({top: '0px'}, 0);

    $carousel.css("margin-top", 210)
    $sticky.css("position", "absolute")
  }
});
