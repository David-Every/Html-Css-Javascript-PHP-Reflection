<?php 
    include "inc/header.php";
    // include "inc/functions.php";
?>
<div id = "slides"></div>

<!-- <?php
    // $carousel = json_decode(file_get_contents("main.json"));

    //  // <style>
    // //     .linkCol{
    // //         background-color: '.$slide->colour.';
    // //         width:'.$slide->width.';
    // //     } 
    // // </style>

    // foreach($carousel->carousel as $slide){
    // echo '<div id = "carousel-container">
    //         <img id = "carousel" class = "carousel opacity" src = "' . $slide->image .'" alt ="' . $slide->title .'">
    //             <div class = "carousel-wrapper">
    //                 <div class = "carousel-overlay" style ="z-index: 5000">
    //                     <h1>' . $slide->title  .'</h1>
    //                     <p>'. $slide->para. '</p>
    //                     <a href =" '.$slide->link. '" class ="'.$slide->class.'">
    //                         <p>'.$slide->button.'</p>
    //                         <i class = "fas fa-arrow-right"> </i>
    //                     </a>
    //                 </div>
    //             </div>
    //         </div>';
    // }

?>
</div> -->

<!-- Cards -->
<div class = "card-nav">
    <?php
        /**
         * Instansiates service cards from Database
         */
        $serviceCard = getServiceCards($result = null);
        $row = false;
        $cards = 0;
        foreach($serviceCard as $card){
            if(!$row){
                $row = true;
                echo '<div class = "row-1">';
            }
            if($cards === 3 ) {
                echo'</div>';
                if ($cards === 3){
                    echo '<div class = "row-2">';
                }
            }

            echo '<a href ="'. $card['Link'] . '" class = "' . $card['Class'] .'" > ';
                echo '<i class ="'. $card['Icon'] .'"></i>';
                echo '<h3 class = "c-title" >'. $card['Title'].'</h3>';
                echo '<p>'. $card['Para'] .'</p>';
                echo '<div class = "'.$card['Read_More'] .'" >read more</div>';
            echo '</a>';
            $cards++;
        }

        if($cards === 7){ echo '</div>';}
        echo '</div>';
    ?>
<!-- </div> -->
        <!-- about us -->
    <div class ="about-us">
        
        <div class ="content culture-img">
            <!-- <img src ="img/Icons/branded.png"> -->
            <h1>Netmatters</h1>
            <p> Netmatters Ltd is a leading web design,IT support and digital
                marketing agency based in Wymondham, Norfolk.
            </p>
            <p>Founded in 2008, we work with businesses from a variety of 
                industries to gain new prospects, nurture existing leads
                and further grow their sales.
            </p>
            <p>We provide cost effective, reliable solutions to a range of services;
                from bespoke cloud-based management systems, workflow and IT solutions
                through to creative website development and integrated
                digital campaigning.
            </p>
            <label class = "culture">  Our culture <i class="fas fa-arrow-right"></i> </label>
        </div>
    </div> 
    <!-- /about us -->

    <div class ="banner">
        <div class = "break" >Latest</div>
    </div>

    <!-- news -->
    
    <?php

    $news = getNews($result = null);
    
    echo '<div class = "news-container">'; //<!--Overall parent-->=
        foreach($news as $newsInfo){
            echo '<div class = "news-card">';
                echo '<div class = "nm-announce">';
                    echo '<img class = "latest-img" src = ' . $newsInfo['Img_src'] .' alt = '.$newsInfo['Img_alt'] . '>';
                    echo '<span data-text="' . $newsInfo['popup'] . '" class ="'.$newsInfo['Span_Class'] .'"<a href =' .$newsInfo['Link'] .'>' . $newsInfo['Text'] .'</a> </span>';
                
                    echo '</div>';

                echo '<div class = "info">';
                    echo '<h4><a class = '.$newsInfo['Tag_Title'] .'href = "#">'. $newsInfo['Title'] .'</a></h4>';
                    echo '<p class = "para">' . $newsInfo['Para'] . '</p>';
                    echo '<div class = "rm-n news-tag"><a href ="#">Read more</a></div>';

                    echo'<div class = "user">';
                        echo '<img class = "u-img" src = ' . $newsInfo['Posted_img'] .' alt = '.$newsInfo['Posted_alt'] . '>';
                        echo '<div class ="posted-by">';
                            echo '<strong>' . $newsInfo['Posted_by'].'</strong><br>';
                            echo '<small>' .$newsInfo['Date'] . '</small>';
                        echo '</div>'; 
                    echo'</div>';
                echo '</div>';
            echo '</div>';
        }
    echo '</div>';

    include "inc/topHoverImg.php";
    include "inc/footer.php";
    ?>
    </body>
</html>