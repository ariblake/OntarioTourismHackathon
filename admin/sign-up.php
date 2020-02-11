<?php

ini_set('display_errors', 1);
require_once 'script/config.php';


function update_db($first_name,$last_name, $email, $country, $user_lastupdate) {
    $pdo = Database::getInstance()->getConnection();

    $check_user_exist = 'SELECT * FROM tbl_register WHERE first_name = :user_fname AND last_name = :user_lname AND country = :user_country';
    $user_set = $pdo->prepare($check_user_exist);
    $user_set->execute(
        array(
            ':user_fname'=>$first_name,
            ':user_lname'=>$last_name,
            ':user_country'=>$country
        )
    );

    if($user_update = $user_set->fetch(PDO::FETCH_ASSOC)){
        $id= $user_update['user_id'];
        $update_query = 'UPDATE tbl_register SET email = :user_email, user_lastupdate = now() WHERE id = :user_id';
        $update_set = $pdo->prepare($update_query);
        $update_set->execute(
            array(
            ':user_email'=>$email,
            ':user_id'=>$id
            )

        );

    $to = $email;
    $subject = "Email Ubdated";
    $message = "You email was updated to " . $email;
    $headers = [
        'From'=>'ontatiosummer@team.ca',
        'Reply-To'=>$first_name . ' ' . $last_name.'<'.$email.'>'
    ];

    
    if(mail($to, $subject, $message, $headers)) {
        echo "We sent you an email";
    } else{
        echo "Mail Not Sent";
    };

    header('Refresh:5; url=index.html');
    exit;
       

    } else {
        $sql = 'INSERT INTO tbl_register (user_fname, user_lname, user_email, user_country) VALUES (:first_name, :last_name, :email, :country)';
        $sql_set = $pdo->prepare($sql);
        $sql_set->execute(
            array(
            ':user_fname'=>$first_name,
            ':user_lname'=>$last_name,
            ':user_email'=>$email,
            ':user_country'=>$country
            )
        );

        $to = $email;
        $subject = "Welcome " . $first_name;
        $message = "Your account was created with " . $email;
        $headers = [
            'From'=>'ontatiosummer@test.ca',
            'Reply-To'=>$first_name . ' ' . $last_name.'<'.$email.'>'
        ];
        if(mail($to, $subject, $message, $headers)) {
            echo "We sent you an email";
        } else{
            echo "Mail Not Sent";
        };

        header('Refresh:5; url=index.html');
        exit;
    } 
}

if(isset($_POST['submit'])) {
    $first_name=trim($_POST['user_fname']);
    $last_name=trim($_POST['user_lname']);
    $email=trim($_POST['user_email']);
    $country=trim($_POST['user_country']);

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($country)) {
        update_db($first_name,$last_name, $email, $country);
    
    } else {
        $message = "Subscription Failed";
        return $message;
    }
}

