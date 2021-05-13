
/**
 * This Code is for the cookie popup it manages how the cookie will popup 
 * currently disabled and awaiting to be stored locally
 */

const popUp = document.getElementById("netmattersPopUp");
// onLoad();
function onLoad(){
    setTimeout(TimesetloadCookiePopUp,1000);
}
popUp.style.display ="none";
document.getElementById('accCoo').addEventListener('click', close)
function TimesetloadCookiePopUp(){
    popUp.style.display="block";

}
function close(){    
    popUp.style.display ="none";
}
