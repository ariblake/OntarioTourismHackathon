<?php

ini_set('display_errors', 1);
require_once ('script/config.php');

if(isset($_POST['submit'])){
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $country = trim($_POST['country']);
    $date = date('Y-m-d H:i:s');

    }
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['country'])){
        $message = 'Please fill in required fields';
    } else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        var_dump();
        $result = createSubscriber($firstname, $lastname, $email, $country);
        
        echo json_encode($result);
    }



    if(isset($_POST['signUp'])){
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $password = trim($_POST['user_password']);
        $email = trim($_POST['user_email']);
        $country = trim($_POST['user_country']);
        $date = date('Y-m-d H:i:s');
    
        if(!empty($firstName) && !empty($lastName) && !empty($password) && !empty($email) && !empty($country)){
            //Log user in
            $message_signUp = signUp($firstName, $lastName, $password, $email, $country, $date);
        }else{
            $message_signUp = 'Please fill out the required field';
        }
    }
    
    if(isset($_POST['login'])){
        $password = trim($_POST['user_password']);
        $email = trim($_POST['user_email']);
    
        if(!empty($password) && !empty($email)){
            //Log user in
            $message_login = login($email, $password);
        }else{
            $message_login = 'Please fill out the required field';
        }
    }
    
    ?>
