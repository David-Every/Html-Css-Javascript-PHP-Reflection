
<main id ="container"> 
    <header id ="header">
            <!-- Top of page Navigation  with buttons and search bar -->
        <div class = "top-nav" >
            <a class ="logo" href = "index.php">  
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

                <?php
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
            
?>
                <!-- Empty for navigation placement placement -->
                   <div id = "invis-2">
                        <div class ="navis "></div>
                    </div>
                <!--/ Empty for navigation placement placement -->
    
            </div> 
        </div>
        <!-- /Navigation -->   
    
    </header>
    <div id ="placeholder"></div>