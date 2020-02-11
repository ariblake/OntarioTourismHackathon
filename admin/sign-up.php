<?php 
ini_set('display_errors', 1);
require_once ('script/config.php');



if(isset($_GET['country'])){

    $cou = 'country_name';

}




if (empty($_POST)) {
    echo 'No...';
    exit;
}

if (isset($_POST['submit'])){
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $country = trim($_POST['country']);
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
    }
        echo json_encode($message);