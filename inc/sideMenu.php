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