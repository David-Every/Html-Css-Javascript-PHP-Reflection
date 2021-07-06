<?php
include "inc/connection.php";

// function

function checkCompleted() {
    $name = $email = $marketing = $alreadySub = $completedSub = false;

    if(!$name){
        echo '<div class = "alert failedSub"> The name field is required. <i class="cross fas fa-times"></i> </div>';
    }
    if(!$email){
        echo '<div class = "alert failedSub"> The email field is required. <i class="cross fas fa-times"></i> </div>';
    }
    if(!$marketing){
        //Do not sumbit
        echo '<div class = "alert failedSub"> The marketing preference field is required. <i class="cross fas fa-times"></i> </div>';
    }
    if(!$alreadySub){
        echo '<div class = "alert failedSub"> Please wait until submitting the form again. <i class="cross fas fa-times"></i> </div>';
    }
    if(!$completedSub){
       echo '<div class = "alert completedSub"> You have successfully joined our mailing list. <i class="cross fas fa-times"></i> </div>';
    }
}