<?php
// include "inc/connection.php";

function getNews($result) {
    include "inc/connection.php";
    $sql ="SELECT * FROM news_cards";

    try{
        $temp = $db->prepare($sql);
        $temp->execute();
    }catch(Exception $e){
        throw $e;
        
    }
    $result = $temp->fetchAll();
    return $result;
}

function getServiceCards($result){
    include "inc/connection.php";
    $sql ="SELECT * FROM service_cards";

    try{
        $temp = $db->prepare($sql);
        $temp->execute();
    }catch(Exception $e){
        throw $e;
        
    }
    $result = $temp->fetchAll();
    return $result;
}

function getMenu($result,$limit, $offset){

    include "inc/connection.php";
    $sql ="SELECT * FROM side_menu LIMIT ? OFFSET ?";

    try{
        $temp = $db->prepare($sql);
        $temp->bindParam(1,$limit,PDO::PARAM_INT);
        $temp->bindParam(2,$offset,PDO::PARAM_INT);
        $temp->execute();
    }catch(Exception $e){
        throw $e;
        
    }
    $result = $temp->fetchAll();
    return $result;
}

function getMenuFirst($result){
    include "inc/connection.php";
    $sql ="SELECT * FROM side_buttons";

    try{
        $temp = $db->prepare($sql);
        $temp->execute();
    }catch(Exception $e){
        throw $e;   
    }
    $result = $temp->fetchAll();
    return $result;
}

function getMenuMain($result){
    include "inc/connection.php";
    $sql ="SELECT * FROM menu_additions";

    try{
        $temp = $db->prepare($sql);
        $temp->execute();
    }catch(Exception $e){
        throw $e;   
    }
    $result = $temp->fetchAll();
    return $result;
}

function alreadySubbed($email){
    include "inc/connection.php";
    $sql = "SELECT Email FROM newsletter WHERE Email = '$email'";
    try{
        $temp = $db->prepare($sql);
        $temp->execute();
    }catch(Exception $e){
        throw $e;
    }
    
    $result = $temp->fetchAll();
    if(empty($result)){
        return false;
    }else{
        return true;
    }
}

function submitNewsletter($name, $email){

    include "inc/connection.php";

    $subSql = "INSERT INTO newsletter (Name, Email) VALUES ('$name', '$email')";
    
    try{
        $temp = $db->prepare($subSql);
        $temp->execute([$name, $email]);
    } catch (Exception $e){
        throw $e;
    }
}

function submitContact($name, $email, $tel, $subject, $msg){
    include "inc/connection.php";

    $subSql = "INSERT INTO contact_message (Name, Email, Tel_Number, Subject, Message) VALUES ('$name', '$email', '$tel', '$subject', '$msg')";
    
    try{
        $temp = $db->prepare($subSql);
        // $temp->execute([$name, $email, $tel, $subject, $msg]);
        $temp->execute();

    } catch (Exception $e){
        throw $e;
    }
}