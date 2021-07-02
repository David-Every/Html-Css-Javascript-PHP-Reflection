<footer>
    <!-- Find a way to turn this on and off, with @media in scss -->
        
        <div class ="newsletter">
            <form id ="news-letter">
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

            <!-- <div class ="checkbox">
                <input type="checkbox" id = "checkbox" name = "checkbox">
                <label class ="lc" for="checkbox">
                    Please tick this box if you wish to receive marketing information from us. 
                    Please see our <a href ="#"> Privacy Policy</a> for more information on how we use your data.
                </label>
            </div> -->

            <input type ="submit" id="subscribe" name="subscribe" value="Subscribe">
            </form>
        </div>
                
        <div class ="footer-background">
            <div class =  "buisness-info">
                <!-- Contact info -->
                <div class = "contact-info ft">
                    <h4 class = "f-title">Contact us</h4>
                    <address> 
                        11 Penfold Drive<br>
                        Wymondham <br>
                        Norfolk <br>
                        NR18 0WZ<br>
                        <br>
                        Tel:  <a href ="#">  01603 70 40 20 </a>
                        <br>
                        Email: <a href ="mailto:support@netmatters.com">support@netmatters.com</a>
                    </address>
                </div> 
                <!-- /Contact info -->

                <!-- About Netmatters -->
                <div class = "about ft"> 
                    <h4 class = "f-title">About Netmatters</h4>
                    <ul>
                        <li><a href ="#"> News</a></li>
                        <li><a href ="#"> Our Careers</a></li>
                        <li><a href ="#"> Our Team</a></li>
                        <li><a href ="#"> Out Office Tour</a></li>
                        <li><a href ="#"> Pricacy Policy</a></li>
                        <li><a href ="#"> Cookie Policy</a></li>
                        <li><a href ="#"> Terms &amp; conditions</a></li>
                        <li><a href ="#"> UK Domains</a></li>
                    </ul>
                </div>
                <!-- /About Netmatters -->

                <!-- Website -->
                <div class = "website ft"> 
                    <h4 class = "f-title">Website</h4>
                    <ul>
                        <li><a href = "#">Sitemap</a></li>
                        <li>Copyright Netmatters Ltd. 2020</li>
                        <li>All rights reserved.</li>
                    </ul>
                </div>
                <!-- /Website -->

                <!-- Social Media -->
                <div class = "social-media ft"> 
                    <!-- <div class ="social-distancing">  -->
                        <h4 class = "f-title">Social Media</h4>
                        <div class = "social-buttons">
                            <a class ="social social-fb" href = "https://www.facebook.com" target ="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class ="social social-tw" href = "https://www.twitter.com" target ="_blank"><i class="fab fa-twitter"></i></a>
                            <a class ="social social-li" href = "https://www.linkedin.com" target ="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    <!-- </div> -->
                </div>
                <!-- /Social Media -->
            </div>
            </div>
            <div class ="bottom-imgs">
                <div class = " footer-icons">
                    <div class = "f-img">
                        <img class ="google" src = "img/Footer-imgs/google_partner.png" alt = "Google partner"> 
                    </div>
                    <div class ="f-img">
                        <img src = "img/Footer-imgs/microsoft_partner.jpg" alt = "microsoft partner"> 
                    </div>
                    <div class ="f-img">
                        <img class = "greyimg" src = "img/Footer-imgs/Grayscale-img/future_50.jpg" alt = "Future 50">
                        <img class = "colourimg" src = "img/Footer-imgs/future-50.jpg" alt = "Future 50"> 
                    </div>
                    <div class ="f-img">
                        <img class = "greyimg" src = "img/Footer-imgs/Grayscale-img/qms-bw.jpg" alt = "QMS"> 
                        <img class = "colourimg" src = "img/Footer-imgs/qms_hover.jpg" alt = "QMS"> 
                    </div>
                    <div class ="f-img">
                        <img class = "greyimg" src = "img/Footer-imgs/Grayscale-img/norfolk_carbon_charter.jpg" alt ="Norfolk Carbon Charter Silver 2017"> 
                        <img class = "colourimg"  src = "img/Footer-imgs/norfolk_charter_hover.jpg" alt ="Norfolk Carbon Charter Silver 2017"> 
                    </div>
                </div>
            </div>
        </div>
    
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
    
