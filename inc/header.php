<!doctype html>
<?

    $url=$_SERVER['REQUEST_URI'];
    header("Refresh: 5; URL=$url");
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Expires: 0");
?>
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

        <nav class = "pushy pushy-right">
            <div class ="pushy-content" id ="pushy-cont">
                <div id ="small-additions">
                    <div id ="main-info-pushy-small">
                        <?php
                        include "inc/functions.php";
                        // $listItemsPerUL = 6;
                        $listItems = 0;

                        $firstmenu = getMenuFirst($result = null);

                            foreach($firstmenu as $fMenu){
                            echo'<ul>';
                                echo '<li class = "side-nav-main"><a href =' 
                                    .$fMenu['Link'] . '><i class = "'. $fMenu['Icons'] 
                                    .'" style = color:'.$fMenu['Colour'] .'> </i><br><small>'.$fMenu['Small_first'] 
                                    .'</small><br>'.$fMenu['Small_second'].'</a></li>'
                                ;
                                $limit = 6;
                                $offset = $listItems;

                                foreach( getMenu($result = null,$limit, $offset) as $menu){
                                    echo '<li><a href ='. $menu['Link'].'>' . $menu['Title'] . '</a></li>';
                                    $listItems++;
                                }
                            echo'</ul>';
                        }
                    echo '</div>';
                echo '</div>';

                echo '<div id = "main-info-all">';
                $limit = 30;
                $listAmount = $listTotal = 0;
                $offset = 36;
                    // echo '<ul>';
                    foreach( getMenuMain($result) as $mainMenu){
                        echo '<ul>';
                        echo'<li> <a href = '.$mainMenu['Link'].'>'.$mainMenu['Title'].'</a></li>';
                        $offset = $offset + $listAmount;
                        $listAmount = 0;
                        foreach(getMenu($result = null,$limit, $offset) as $sMenu){
                            $listAmount++;
                            $listTotal++;
                            echo '<li><a href ='.$sMenu['Link'].'>'.$sMenu['Title'].'</a></li>';
                            if($listTotal === 3 || $listTotal === 4 || $listTotal === 9 || $listTotal === 10 || $listTotal === 13 || $listTotal === 14|| $listTotal === 16){
                                
                                break;
                            }
                        }
                        echo '</ul>';
                    }  
                    echo '</div>';
                ?>
            </div>
        </nav>

        <div class="site-overlay"></div>
        <div id = "site-overlay-pop"></div> 

        <div id = "netmattersPopUp">
            <h2> Cookie Policy</h2>
            <p>
                We use cookies to obtain aggregate data regarding site traffic and interaction,
                in order to identify user trends and obtain insights in order to continually improve
                our site. These cookies enable us to improve your customer experience as you use our
                site and help provide you with relevent online marketing.
            </p>
            <p>
                You can see a list of the other companies who use cookies on this website by visiting
                cookie settings at the bottom of each page. For full details of how we use your personal 
                infomation, and your rights in relation to it, view our privacy policy.
            </p>
            <div id ="cookieButtons">
                <a href ="#">
                    <h3> Change settings</h3>
                </a>
                <a id ="accCoo" href ="#">
                    <h3> Accept Cookies</h3>
                </a>
        
            </div>
        </div>
<?php
/*
'<main id ="container"> 
    <header id ="header">
            <!-- Top of page Navigation  with buttons and search bar -->
        <div class = "top-nav" >
            <a class ="logo" href ="">  
                <img class ="f-logo"  src = "img/Icons/f-logo.png" alt ="Netmatters Logo" >
            </a>
            <div class ="phone "> 
                <a href= "tel:00000000000"> <i class = "fas fa-phone-volume"></i> </a> 
            </div> 

            <div id = "smHam"></div>
            
            <div class ="nav-buttons"> 
                <div ><a href = "#" class = " btn btn-1">  <i class="fas fa-mouse"> </i>Support </a> </div> 
                <div ><a href = "contact.php" class = " btn btn-2">  <i class ="fa fa-paper-plane-o"> </i> Contact </a> </div>
            </div>
    
            <form class ="navigation " > 
                <input class = "search-bar" type="text" placeholder="Search..." name ="search">
                <div class ="search-button">  
                    <a href ="#" ><i class = "fas fa-search"></i></a>
                    
                 </div>
                    <button id ="hamburger" class=" hamburger hamburger--spin menu-btn hb-lg " type="button">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                        <span class ="H-Lab"><small>Menu</small></span>
                    </button>
            </form>         
        </div>
        <!-- Main site Navigation -->
                
        <div class ="nav-wrapper">
            <div class ="nav-bar">
            
                 <!-- Empty for navigation placement placement -->

                <div id ="invis"> 
                    <div class ="navis"></div>
                </div>';

                // <?php
                // $first = true;
                // <!--/ Empty for navigation placement placement -->
        //             foreach($firstmenu as $nav){
        //                 echo '<div class = "'. 'dropdown-container service'.$nav['Class'].'">';
        //                 if($first){
        //                     echo '<div class ="nav first">';
        //                     $first = false; 
        //                 }else{
        //                     echo '<div class ="nav">'; 
        //                 }
        //                    echo '<a href ='. $nav['Link'] .'>'; 
        //                        echo '<i class = "'. $nav['Icons'].'"> </i><br>'; 
        //                         echo '<p class = "nav-title" > <small>'.$nav['Small_first'].'</small><br>'.$nav['Small_second'].'</p>';
        //                     echo '</a>';
        //                 echo '</div>';

        //                 echo '<div class = "dropdown-content">';
        //                 foreach(getMenu($result = null,$limit, $offset) as $menu){
        //                     echo '<span><a href ="#">Stylish Websites</a></span>';
        //                 }
        //             }
        //     echo '</div>';
        // echo '</div>';

        
        echo '    <div class = "dropdown-container service nav-web"> <!--nav-web-->
                        <div class ="nav first"> 
                            <a href ="#"> 
                                <i class = "fa fa-code icon"> </i><br> 
                                <p class = "nav-title" > <small>Web</small><br>Design </p>
                            </a>
                        </div>

                        <div class ="dropdown-content">
                            <span><a href ="#"> Stylish Websites  </a> </span>
                            <span><a href ="#"> Ecommerce Stores  </a></span>
                            <span><a href ="#"> Branding  </a></span>
                            <span><a href ="#"> Apps  </a></span>
                            <span><a href ="#"> Web Hosting  </a></span>
                            <span><a href ="#"> Pay Monthly Websites  </a></span>
                            <div class ="align"></div>

                        </div>
                    </div>
    
                <div class ="restraint"> 
                    <div class = "dropdown-container service nav-it">
                        <div class ="nav">
                            <a href ="#">
                                <i class = "fa fa-desktop icon"></i><br> 
                                <p class = "nav-title"> <small>IT</small> <br>Support </p>
                            </a>
                        </div>
                        <div class ="dropdown-content">
                            <span><a href ="#"> Managed it  </a> </span>
                            <span><a href ="#"> buisness it  </a></span>
                            <span><a href ="#"> office 365  </a></span>
                            <span><a href ="#"> consultancy  </a></span>
                            <span><a href ="#"> cloud provider  </a></span>
                            <span><a href ="#"> data backup  </a></span>
                            <div class ="align"></div>
                            <div class ="align"></div>
                            <div class ="align"></div>
                        </div>
                    </div>
                </div>
    
                <div class ="restraint">
                    <div class = "dropdown-container service nav-tc">
                        <div class ="nav">
                            <a href ="#">  
                                <i class ="fa fa-volume-control-phone icon"></i><br> 
                                <p class = "nav-title"> <small> Telecoms </small><br> services </p>
                            </a>
                        </div>
                        <div class ="dropdown-content">
                            <span><a href ="#"> Gigabit voucher </a> </span>
                            <span><a href ="#"> hosted viop  </a></span>
                            <span><a href ="#"> business viop  </a></span>
                            <span><a href ="#"> business broadband  </a></span>
                            <span><a href ="#"> leased line  </a></span>
                            <span><a href ="#"> 3cx systems  </a></span>
                            <div class ="align"></div>
                        </div>
                    </div>
                </div>
    
                <div class ="restraint"> 
                    <div class = "dropdown-container service nav-bs">
                        <div class = "nav">
                            <a href ="#"> 
                                <i class ="glyphicon glyphicon-th icon"></i><br> 
                                <p class = "nav-title"> <small> bespoke </small> <br>software </p>
                            </a>
                        </div>
                        <div class ="dropdown-content">
                            <span><a href ="#"> Workflow solutions </a> </span>
                            <span><a href ="#"> automation  </a></span>
                            <span><a href ="#"> system intergration  </a></span>
                            <span><a href ="#"> database management  </a></span>
                            <span><a href ="#"> sharepoint  </a></span>
                            <span><a href ="#"> erp  </a></span>
                            <div class ="end"></div>

                        </div>
                    </div>
                </div>
                
                <div class ="restraint">
                    <div class = "dropdown-container service nav-mk">
                        <div class ="nav">
                            <a href ="#">  
                                <i class = "glyphicon glyphicon-signal icon" ></i><br> 
                                <p class = "nav-title"> <small> Digital </small><br>marketing  </p>
                            </a>
                        </div>
                        <div class ="dropdown-content">
                            <span><a href ="#"> Search (seo) </a> </span>
                            <span><a href ="#"> paid (ppc)  </a></span>
                            <span><a href ="#"> conversion (cro)  </a></span>
                            <span><a href ="#"> email  </a></span>
                            <span><a href ="#"> social media  </a></span>
                            <span><a href ="#"> content </a></span>
                            <!-- not pretty but fixes -->
                            <div class ="align"></div>
                            <div class ="align"></div>
                            <div class ="align"></div>
                            <div class ="align"></div>
                        </div>
                    </div>
                </div>
    
                <div class ="restraint">
                    <div class = "dropdown-container service nav-cs">
                        <div class = "nav last">
                            <a href ="#"> 
                                <i class = "fa fa-shield icon"> </i><br> 
                                <p class = "nav-title"> <small> Cyber </small> <br> Security </p>
                            </a>
                        </div>
                        <div class ="dropdown-content">
                            <span><a href ="#"> Assesment </a> </span>
                            <span><a href ="#"> management  </a></span>
                            <span><a href ="#"> penetration testing  </a></span>
                            <span><a href ="#"> cyber essentials  </a></span>
                            <span><a href ="#"> pci/dss  </a></span>
                            <span><a href ="#"> hacker prevention </a></span>
                            <div class ="align"></div>

                        </div>
                    </div>
                </div>';
            

                // <!-- Empty for navigation placement placement -->
               echo     '<div id = "invis-2">
                        <div class ="navis "></div>
                    </div>
                <!--/ Empty for navigation placement placement -->
    
            </div> 
        </div>
        <!-- /Navigation -->   
    
    </header>
    */
    echo '<div id ="placeholder"></div>';
    
// <!-- 387 -->