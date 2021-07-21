<!doctype html>
<html lang="en" id = "html">
    <head>
        <title>Netmatters | Full Service Digital Agency | Norwich, Norfolk</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/8ac16a56cb.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="hamburger/hamburgers.css" >
        <!-- <link rel = "stylesheet" href ="/pushy/css/mypushy.css"> -->
        <link rel = "stylesheet" href ="slick/slick.css">
        <link rel = "stylesheet" href = "slick/slick-theme.css">
        <link href = "dist/style.min.css" rel ="stylesheet" > 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!--  js Scripts  here as otherwise it cannot detect IE in ie 11-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Script to detect if user is on Internet Exporer -->
        <script>
            "use strict";
    
            var ie = !(navigator.userAgent.indexOf("rv:11.0") < 0);
            
            if (ie == true){
                var esJson = document.createElement('script');
                esJson.src = "src/json.es5.js";
                document.getElementsByTagName('head')[0].appendChild(esJson);

                var esScript = document.createElement('script');
                esScript.src = "dist/app.es5.min.js";

                document.getElementsByTagName('head')[0].appendChild(esScript);
    
                console.log("This is IE");
            }else{
                // Default Script
                var script = document.createElement('script');
                script.src = "dist/app.es6.min.js";
                document.getElementsByTagName('head')[0].appendChild(script);
                
            }
        </script>
    </head>
    <body id ="body">

    
<?php 
include "sideMenu.php";
include "cookies.php";
include "siteNavigation.php"; ?>    
 <!-- 387 -->