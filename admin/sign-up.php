<?php

ini_set('display_errors', 1);
require_once ('script/config.php');

if(isset($_POST['submit'])){
    $firstname = trim($_POST['user_fname']);
    $lastname = trim($_POST['user_lname']);
    $email = trim($_POST['user_email']);
    $country = trim($_POST['user_country']);
    $lastupdate = date('Y-m-d H:i:s');

    }
    if(empty($_POST['user_fname']) || empty($_POST['user_lname']) || empty($_POST['user_email']) || empty($_POST['user_country'])){
        $message = 'Please fill in required fields';
    } else {
        $firstname = $_POST['user_fname'];
        $lastname = $_POST['user_lname'];
        $email = $_POST['user_email'];
        $country = $_POST['user_country'];
        var_dump();
        $result = createSubscriber($firstname, $lastname, $email, $country);
        
        echo json_encode($result);
    }



    // if(isset($_POST['signUp'])){
    //     $firstName = trim($_POST['firstname']);
    //     $lastName = trim($_POST['lastname']);
    //     // $password = trim($_POST['password']);
    //     $email = trim($_POST['email']);
    //     $country = trim($_POST['country']);
    //     $date = date('Y-m-d H:i:s');
    
    //     if(!empty($firstName) && !empty($lastName) && !empty($password) && !empty($email) && !empty($country)){
    //         //Log user in
    //         $message_signUp = signUp($firstName, $lastName, $password, $email, $country, $lastupdate);
    //     }else{
    //         $message_signUp = 'Please fill out the required field';
    //     }
    // }
    
    // if(isset($_POST['login'])){
    //     // $password = trim($_POST['user_password']);
    //     $email = trim($_POST['email']);
    
    //     if(!empty($password) && !empty($email)){
    //         //Log user in
    //         $message_login = login($email, $password);
    //     }else{
    //         $message_login = 'Please fill out the required field';
    //     }
    // }
    


    // function createSubscriber($firstname, $lastname, $country, $email){
    //     $pdo = Database::getInstance()->getConnection();

    //     //Check if email exists
             
    //     $emailQuery = 'SELECT COUNT(*) FROM `tbl_user` WHERE email =:email';
    //     $executeQuery = $pdo->prepare($emailQuery);
    //     $executeQuery->execute(
    //         array(
    //             ':email'=>$email
    //         )
    //         );
    //         // echo $executeQuery;
            
    //     if($executeQuery->fetchColumn()>0){
            
    //         //Update the latest timestamp
    //         $updateTimeStamp = 'UPDATE tbl_user SET lastupdate=now() WHERE email = :email';
    //         $queryUpdate = $pdo->prepare($updateTimeStamp);
    //         $queryUpdate->execute(
    //             array(
    //                 ':email'=>$email
    //             )
    //             );
          
    //     }else{
    //         //insert into database the info provided
    //         $addUser = 'INSERT INTO tbl_user (firstname, lastname, country, lastupdate, email)
    //         VALUES ("'.$firstname.'", "'.$lastname.'", "'.$country.'", now(), "'.$email.'")';
    //         $insert_user_info = $pdo->query($addUser);
    //         // echo $addUser;

    //         // exit;
    //         $subj = 'Welcome to the Ontario Tourism Newsletter';
    //         $msg = 'Check out these awesome Places to visit';
    //         $headers = 'FROM: ontariotourism@noreply';



    //         //send out first time sub email
    //         mail($email, $subj, $msg, $headers);
            
    //     }
        

    // }