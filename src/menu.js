const sideMenu = document.getElementById("sideMenu");
//Controlling Main page content
const main = document.getElementById("main");
const over = document.getElementById("over");

over.style.display ="none";
sideMenu.style.display ="none";

let open = false

const bMenu = document.getElementById("menu").addEventListener('click',()=>{
    if(!open){
        open = true;
        bAnim();
        over.style.display ="block";
        // over.style.marginRight = "350px";
        // main.style.marginRight ="350px";
        main.style.backgroundColor ="rgba(0,0,0,0.2)";
        sideMenu.style.display ="block";
    }
    else{
        open = false;
        console.log("closing")
        over.style.display ="none";
        sideMenu.style.display ="none";
    //     over.style.marginRight ="0";
    //     main.style.marginRight = "0";
    }
    
});

