<!-- <script type = "text/javascript" >
    let effectedInput = document.getElementByClass("inputError");
    foreach(effectedInput){

    }
</script> -->

<script type = "text/javascript">
    // let incorrect = "contact_name"; //Can be changed in each section

    function noContent(pos, row){
        console.log(row);
        var elements = document.getElementById(row).children;
        // var inputTypes = ['text', 'email','tel', 'textarea','input'];
        for (var i = 0; i < elements.length; i++) {
            var elm = elements[pos];
            var child = elm.children;
            // console.log(child[1]);
            child[1].classList.add("inputError");
        }
    }

    function noMessage(){
        var msg = document.getElementById("messageToSend");
        msg.classList.add("inputError");
        // console.log(elements);
        
    }
</script>;

<?php
if(isset($_POST["sendMsg"])){
    $name = $_POST['contact_name'] = trim(filter_input(INPUT_POST, "contact_name", FILTER_SANITIZE_STRING));
    $email = $_POST['contact_email'] = trim(filter_input(INPUT_POST, "contact_email", FILTER_SANITIZE_EMAIL));
    $tel = $_POST['tel'] = trim(filter_input(INPUT_POST, "tel", FILTER_SANITIZE_NUMBER_INT));
    $subject = $_POST['sub'] = trim(filter_input(INPUT_POST, "sub", FILTER_SANITIZE_STRING));
    $msg = $_POST['msg'] = trim(filter_input(INPUT_POST,'msg', FILTER_SANITIZE_STRING));

    if(empty($name)){
        echo '<script type = "text/javascript"> var pos = 0, row = "top"; noContent(pos, row); </script>';
    }
    if(empty($email)){
        echo '<script type = "text/javascript"> var pos = 1, row = "top"; noContent(pos, row); </script>';
    }
    if(empty($tel)){
        echo '<script type = "text/javascript"> var pos = 0, row = "bottom"; noContent(pos, row); </script>'; 
    }
    if(empty($subject)){
        echo '<script type = "text/javascript"> var pos = 1, row = "bottom"; noContent(pos, row); </script>';
    }
    if(empty($msg)){
        echo '<script type = "text/javascript"> noMessage(); </script>';
        
    }

    if(!empty($name) && !empty($email) && !empty($tel) &&  !empty($subject) && !empty($msg)){
        echo 'Form is Submittable';
        // submitContact($name, $email, $tel, $subject, $msg);
        
    }
}