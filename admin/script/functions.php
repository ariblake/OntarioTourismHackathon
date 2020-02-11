<?php
ini_set('display_errors', 1);
require_once 'config.php';


// redirect
function redirect_to($location){
    if($location != null){
        header("Location: ".$location);
        exit;
    }
}


// get country data
function getCountryData($cou) {
    $pdo = Database::getInstance()->getConnection();
    $getData = 'SELECT * FROM tbl_country ORDER BY country_name ASC';
    $runQuery = $pdo->query($getData);

    $results = array();

    while ($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;
}

// update info
function createSubscriber($firstname, $lastname, $email){
    $pdo = Database::getInstance()->getConnection();
    // check existance
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE email = :email';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':email'=>$email,
        )
    );

    if($user_set->fetchColumn()>0){
       
        // while($found_user = $user_check->fetch(PDO::FETCH_ASSOC)){
        //     $email = $found_user['email'];
            $message = 'You subscribed already!';
            $update_time_query = 'UPDATE tbl_user SET lastupdate = current_timestamp WHERE email = :email';

    }else{
            $update_query = 'UPDATE tbl_user SET firstname = :firstname, lastname = :lastname, email = :email, country = :country WHERE email = :email';
            $update_set = $pdo->prepare($update_query);
            $update_set->execute(
                array(
                    ':firstname'=>$firstname,
                    ':lastname'=>$lastname,
                    ':email'=>$email,
                    ':country'=>$country
                )
            );
        }

    return $message;
}

// // email confirmation 
// function subscriber_email($firstname, $lastname, $email) {
//     $toEmail = $email;
//     $subject = 'Ontario Summer Newletter';
//     $body = '<h3> Hello '. $firstname .' , Welcome back!</h3> <p>We have plenty of new events and acitivities going on. Be sure to stay connected and check out our social media. We hope you the best! </p>';

//     $headers = "MIME-Version: 1.0" . "\r\n"; 
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
//     $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n"; 

//     mail($toEmail, $subject, $body);
//     if(!mail($toEmail, $subject, $body)) {
//         echo 'The email did not get through :(';
//     }else {
//         echo 'Email is on the way';
//     }
// }

// // new user
// function new_subscriber_email($firstname, $lastname, $email) {
//     $toEmail = $email;
//     $subject = 'Ontario Summer User Confirmation';
//     $body = '<h3> Hello '. $firstname .' ,</h3> 
//     <p>Thank you for subscribing our Newsletter. We will send you our updates on summer events and things to do in Ontario. We hope you the best and enjoy your days in Ontario!</p> 
//     <h4>Ontario Summer</h4>
//     ';

//     $headers = "MIME-Version: 1.0" . "\r\n"; 
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
//     $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n"; 
    
//     mail($toEmail, $subject, $body);
//     if(!mail($toEmail, $subject, $body)) {
//         echo 'The email did not get through :(';
//     }else {
//         echo 'Email is on the way';
//     }
// }

