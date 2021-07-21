<!-- <script type = "text/javascript" >
    let effectedInput = document.getElementByClass("inputError");
    foreach(effectedInput){

    }
</script> -->

<?php
if(isset($_POST["sendMsg"])){
    $name = $_POST['contact_name'] = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = $_POST['contact_email'] = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $tel = $_POST['tel'] = trim(filter_input(INPUT_POST, "tel", FILTER_SANITIZE_NUMBER_INT));
    $subject = $_POST['subject'] = trim(filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING));
    $msg = $_POST['msg'] = trim(filter_input(INPUT_POST,'msg', FILTER_SANITIZE_STRING));
    // submitContact($name, $email, $tel, $subject, $msg);

    if(empty($name)){
        echo '<script type = "text/javascript"> 
        
        </script>';
    }
    if(empty($email)){
        
    }
    if(empty($tel)){
        
    }
    if(empty($subject)){
        
    }
    if(empty($msg)){
        
    }
}