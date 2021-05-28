console.log("ES6 boii");
//#region Cookie
/**
 * This Code is for the cookie popup it manages how the cookie will popup 
 * currently disabled and awaiting to be stored locally
 */
let haveCookieConsent = false;

const popUp = document.getElementById("netmattersPopUp");
const overlay = document.getElementById("site-overlay-pop");

popUp.style.display="none";
overlay.style.display = "none";

document.getElementById('accCoo').addEventListener('click', close);

function getCookie(cookie) {
    var name = cookie + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
          haveCookieConsent = true;
        return c.substring(name.length, c.length);
      }
    }
    return "";//alert(`${name} not found`);
  }

setTimeout(()=>{
    //check for cookie consent
    getCookie(document.getCookie = "cookiesAllowed");
    if(!haveCookieConsent){
        overlay.style.display="block";
        popUp.style.display="block";
        //Disable Animation
        window.addEventListener('scroll',noScroll);
    }else{
        // alert("we have cookie consent!");
        return "";
    }
    
},1000);

function noScroll(){
    window.scrollTo(0, 0);
    resetHeader();
}

function close(){    
    popUp.style.display ="none";
    window.removeEventListener('scroll',noScroll);
    overlay.style.display ="none";
    document.cookie ="cookiesAllowed = True";
}
//#endregion

//#region header scroll
/**
 * This Controls the header animation and positioning
 * When the user scrolls up 
 */
 const $sticky = $("#header");
 let $carousel = $("#slides");
 let $head = $('#header');
 
 var scrollPos = 0, currentPos = 0, oldPos, scrollingUp = false;
 var atTop = true, time = 350, topCap = 250;
 
 
 $sticky.css("width", "100%");
 $head.css("position", "absolute");
 
 var scrolled = 0;
 window.addEventListener("scroll", () =>{
   //checks to see if user is scrolling up
   oldPos = currentPos;
   currentPos = pageYOffset;  
   /**
    * check is still scrolling
    */
   if(oldPos > currentPos & !scrollingUp){
     scrollingUp = true;
     slideDown();
   }else if (oldPos < currentPos &scrollingUp){   
     scrollingUp = false;
     slideUp();
   }
 });
 
 function slideDown(){
   $sticky.css("position", "fixed");
   $head.animate({top: '-220px'}, 0);
   $head.animate({top: '0px'}, time);
 }
 
 function slideUp(){
   $head.animate({top: '0px'}, 0);
   $head.animate({top: '-220px'}, 500);
  //  $sticky.css("position", "absolute");
 }
 
 window.addEventListener("scroll", () =>{
   if(pageYOffset < topCap){
     resetHeader();
   }
 });
 
 function resetHeader(){
   $head.animate().stop();
   $head.animate({top: '-220px'}, 0);
   $head.animate({top: '0px'}, 0);
   $sticky.css("position", "absolute");
 }
//#endregion

//#region Hamburger
// var id = null;
/**
 * Hamburger button Animation
*/
$(`#hamburger`).on("click",activate);
$('.site-overlay').on("click",deactivate);

function getCSSRoot(pos,min){
    root.style.setProperty('--pushywidth',pos);
    root.style.setProperty('--minusPushyWidth',min);
}

function activate(){
    // console.log("%c Activating","color:green");
    $("#hamburger").addClass("is-active");
    $("#body,#html").css({"overflow-x":"hidden","overflow-y":"scroll", "height":"100%", "-webkit-overflow-scrolling":"touch"});
    $("#container").css ("overflow-y","scroll");

}
function deactivate(){
    $("#hamburger").removeClass("is-active");
    $("#body,#html").css({"overflow-x":"visible", "overflow-y":"visible", "height":"0"});
    $("#container").css ("overflow-y","visible");
}
//#endregion

//#region slides
// $('#slides').slick({
//   arrows:false,
//   autoplay:4000,
//   dots: true,
// });
//#endregion

//#region Pushy
//||### Pushy Additions||\\

//Add the class "Pushy-link to all list elements in side menu"
$('#pushy-cont ul li').addClass("pushy-link");


//|| Smaller Menu tablet / Mobile ||\\
/**
 * This code looks into and changes the cssvariables (prefixed with '--')
 * and changes the side menu's width.
 * 
 * This code also changes the height of the placeholder Div that stands 
 * under the header.
 */
 var $bMenu =$( `
 <button id ="hamburger" class=" hamburger hamburger--spin menu-btn hb-lg " type="button">
     <span class="hamburger-box">
     <span class="hamburger-inner"></span>
     </span>
     <span class ="H-Lab"><small>Menu</small></span>
 </button>`);


var $ph =$("#placeholder"); //Top of site keeps sites from jumping around when scrolling / running nav anim
var $smHam =$("#smHam");
var $lgHam =$("#lgHam");
var root= document.querySelector(':root');

let id = null
checkSet(id);

window.addEventListener("resize",() =>{
    checkSet();
});

function checkSet(){
    if(window.matchMedia('(max-width:1023px)').matches){

        getCSSRoot("275px","-250px");
        
        $("#small-additions").css("display","block");
        $ph.css({"width":"100%", "height":"120.06px"});    
    }
    if(window.matchMedia('(min-width:1024px)').matches){

        getCSSRoot("400px","-385px");
        
        $("#small-additions").css("display","none");
        $ph.css({"width":"100%", "height":"210px"});
    }
    if(window.matchMedia('(max-width:766px)').matches){
        //Smaller Screen size
        $("#hamburger").css({"position":"absolute", "top":"30px","right":"5px"});

    }

    if(window.matchMedia('(min-width:767px)').matches){
        $("#hamburger").css("position","initial");
    }
}


//#endregion