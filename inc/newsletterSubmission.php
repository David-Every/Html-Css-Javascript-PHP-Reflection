<?php
if (isset ($_POST['subscribe'])){            
    if(empty($_POST['name'])){
        echo '<script type="text/javascript">noName();</script>';
    }
    if(empty($_POST['email'])){
        echo '<script type="text/javascript">noEmail();</script>';
    }
    if(!isset($_POST['check'])){
        echo '<script type="text/javascript">noMarketing();</script>';
    }  
    if(!empty($_POST['name'] && !empty($_POST['email'] && isset($_POST['check'])))){
        //Check to see if it is already there
        if(alreadySubbed($_POST['email'])){
            echo '<script type="text/javascript">alreadySub();</script>';
        }else{
            $name = ($_POST['name'] = trim(filter_input(INPUT_POST, FILTER_SANITIZE_STRING)));
            $email = ($_POST['email'] = trim(filter_input(INPUT_POST,FILTER_SANITIZE_EMAIL)));
            echo '<script type="text/javascript">successfulSub();</script>';
            submitNewsletter($name, $email);
        }
    }
}