//||### Hamburger Menu Toggle ###||\\
// document.getElementById("hamburger").addEventListener("click",ham);
var element = document.getElementById("hamburger");

$("#hamburger").on("click",activate);
$('.site-overlay').on("click",deactivate);


function activate(){
    element.classList.add("is-active");
    // active = true;
    $("#body,#html").css({"overflow-x":"hidden", "height":"100%", "-webkit-overflow-scrolling":"touch"});
}
function deactivate(){
    element.classList.remove("is-active");
    // active = false;
    $("#body,#html").css({"overflow-x":"visible", "height":"100%"});
}

//||### /Hamburger Menu Toggle ###||\\



//||### Pushy Additions||\\

//Add the class "Pushy-link to all list elements in side menu"
$('#pushy-cont ul li').addClass("pushy-link");

/**
 * I am trying to select  list 
 */
