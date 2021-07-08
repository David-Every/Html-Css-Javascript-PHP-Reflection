<footer>
    <!-- Find a way to turn this on and off, with @media in scss -->
        
    <div class ="newsletter">
        <div class ="alerts">
            <?php
                include "inc/functions.php";
                checkCompleted();  
            ?>
        </div>

        <form id ="news-letter" method="post">
        <h2> Email newsletter sign-up</h2>

        <div class = "form-wrapper">

            <div class="name-group"> 
                <label for="name"> Your Name <small>*</small></label>
                <input type="text" id="name" name="name">
            </div>

            <div class ="email-group"> 
                <label for="email">Your Email <small>*</small></label>
                <input type="email" id="email" name="email">
            </div>

        </div>
        <div class ="check" >
            <input type="checkbox" name="check">
            <label class="checkLab" for ="check"> 	
                Please tick this box if you wish to receive 
                marketing information from us. Please see our <a href ="#">Privacy Policy</a> for more 
                information on how we use your data
            </label>
        </div>
        <input type ="submit" id="subscribe" name="subscribe" value="Subscribe">
        </form>
    </div>
        
    <?php
    $main = json_decode(file_get_contents("main.json"));
    echo '<div class ="footer-background">';
        echo '<div class = "allFooter">';
            echo'<div class = "footWrap">';
                $amount = 0;
                foreach($main->Footer->footInfo as $info){
                    if($amount === 0 || $amount === 7 || $amount === 14)  {
                        //start div
                        if($amount === 7 || $amount === 14){
                            //If at end of section close UL and DIV then continue
                            echo '</ul>';
                            echo '</div>';
                            if($amount=== 14){
                                return;
                            }
                        }
                        //create new div
                        echo '<div class ="footerServices">';
                            if($amount === 0){
                                echo '<h4>About Netmatters</h4>';
                            }
                            if($amount === 7){
                                echo '<h4>Our Services</h4>';
                            }
                            echo '<ul>';
                    }
                    $amount++;
                    echo '<li><a href =' .$info->Link  . '>' . $info->Title . '</a></li>';
                }
            echo '</div>';

                // 
                echo '</div>';
                echo '<div class ="allOffices">';
                
                foreach($main->collection->addresses as $add){
                        echo '<div class ="office">';
                            // echo '<div>';
                                echo '<h4>' . $add->Office .'</h4></a>';
                                echo '<p>' . $add->Address .'</p>';
                                echo '<p class = "postCode">' . $add->Post_code .'</p>';
                                echo '<a href = tel:' . $add->Tel . '>' .$add->Tel. '</a><br>';
                            // echo '</div>';
                        echo '</div>';
                }
                echo '</div>';

                echo '<div>';
                    echo '<p id = "licence"> &copy; Copyright Netmatters Ltd. 2021. Allrights reserved - <a href = "">Sitemap</a></p> ';
                    foreach($main->Footer->socialMedia as $sm){
                        echo '<a class ="' .$sm->Class . '" href = '. $sm->Link .'target ="_blank"><i class='. $sm->Icon . '></i></a>';
                    }
                echo '</div>';

        echo '</div>';
        

    // <div class ="bottom-imgs">
    //     <div class = " footer-icons">
    //         <div class = "f-img">
    //             <img class ="google" src = "img/Footer-imgs/google_partner.png" alt = "Google partner"> 
    //         </div>
    //         <div class ="f-img">
    //             <img src = "img/Footer-imgs/microsoft_partner.jpg" alt = "microsoft partner"> 
    //         </div>
    //         <div class ="f-img">
    //             <img class = "greyimg" src = "img/Footer-imgs/Grayscale-img/future_50.jpg" alt = "Future 50">
    //             <img class = "colourimg" src = "img/Footer-imgs/future-50.jpg" alt = "Future 50"> 
    //         </div>
    //         <div class ="f-img">
    //             <img class = "greyimg" src = "img/Footer-imgs/Grayscale-img/qms-bw.jpg" alt = "QMS"> 
    //             <img class = "colourimg" src = "img/Footer-imgs/qms_hover.jpg" alt = "QMS"> 
    //         </div>
    //         <div class ="f-img">
    //             <img class = "greyimg" src = "img/Footer-imgs/Grayscale-img/norfolk_carbon_charter.jpg" alt ="Norfolk Carbon Charter Silver 2017"> 
    //             <img class = "colourimg"  src = "img/Footer-imgs/norfolk_charter_hover.jpg" alt ="Norfolk Carbon Charter Silver 2017"> 
    //         </div>
    //     </div>
    // </div>
    ?>
    
</footer>
</main>
        
    <script src ="slick/slick.min.js"></script>

    <script src ="pushy/JS/pushy.min.js"></script>
    
    <script src ="dist/json.es6.min.js"></script>

    <script>
        $('#slides').slick({
            arrows:false,
            autoplay:4000,
            dots: true,
        });
    </script>
    
