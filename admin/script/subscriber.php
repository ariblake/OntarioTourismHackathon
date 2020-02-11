<?php
require_once 'config.php';
function createSubscriber($firstname, $lastname, $email, $country) {
    $pdo = Database::getInstance()->getConnection();
    $query = ' SELECT COUNT(*) FROM tbl_register WHERE user_email = :email';
    $get_info = $pdo->query($query);
    $results->execute(
    array(
        ':email'=>$user_email
    )
    );
    $email_mateh = $get_info->fetchColumn();
    if($email_match > 0){

        $update_user_query = 'UPDATE tbl_register SET user_lastupdate = date("h:i:sa") WHERE user_email = :email';
        $message = 'You already signed up!';
        return $message;
    }

    while($row = $get_info->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;

        $update_query = "INSERT INTO tbl_register (user_fname, user_lname, user_email, user_country, user_subdate, user_lastupdate)
        VALUES ('firstname', 'lastname', 'email', 'country')
        ON DUPLICATE KEY UPDATE
        user_fname = values(firstname),
        user_lname = values(lastname),
        user_country = values(country);";

    }



   $create_query = 'INSERT INTO tbl_register(user_fname, user_lname, user_email, user_country)';
   $create_query .= ' VALUES(:firstname, :lastname, :email, :country)';
   $create_user = $pdo->prepare($create_query);
   $create_user->execute(
       array(
          ':firstname'=>$user_fname,
          ':lastname'=>$user_lname,
          ':email'=>$user_email,
          ':country'=>$user_country
       )
       );
    if($create_user->rowCount()){
        $notification = 'You are subscribed!';
        return $notification;
    }else{
        $message = 'Error';
        return $message;
    }

}

// function get_all_users($pdo) {
//     $query = "SELECT * FROM tbl_user";

//     $get_users = $pdo->query($query);
//     $results = array();

//     while($row = $get_users->fetch(PDO::FETCH_ASSOC)) {
//         $results[] = $row;
//     }

//     return $results;
// }





// function login($email, $password){
//     //Debug
//     // $message = sprintf('You are trying to login with username %s and password %s', $username, $password);

//     $pdo = Database::getInstance()->getConnection();
//     $message_login = '';
//     //timezone config
//     date_default_timezone_set('America/Toronto');

//     // check user existance
//     $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_email= :email'; 
//     $user_set = $pdo->prepare($check_exist_query);
//     $user_set->execute(
//         array(
//             ':email'=>$email
//         )
//     );


//     if($user_set->fetchColumn()>0){
//         //user exist
//         $get_user_query = 'SELECT * FROM tbl_user WHERE user_email = :email AND user_password = :password';
//         $user_check = $pdo->prepare($get_user_query);
//         $user_check->execute(
//             array(
//                 ':email'=>$email,
//                 ':password'=>$password
//             )
//         );

//     while($found_user = $user_check->fetch(PDO::FETCH_ASSOC)){
//         $id = $found_user['user_id'];
//         $hash = $found_user['hash'];
//         $date = date('Y-m-d H:i:s');

//         // login successful
//         $message_login = 'Login Successful!';
//         // updating database
//         $update_query = 'UPDATE tbl_user SET last_updated = :date WHERE user_id = :id';
//         $update_set = $pdo->prepare($update_query);
//         $update_set->execute(
//             array(
//                 ':date'=>$date,
//                 ':id'=>$id
//             )
//         );
//     }

//     if(isset($id)){
//         redirect_to("../index.php?email=$email hash=$hash");
//     }

//     }else{
//         //user doesn't exit
//         $message_login = 'user doesnt exist';
//     }

//     return $message_login;
// }