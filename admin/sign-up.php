<?php 
ini_set('display_errors', 1);
require_once ('scripts/config.php');

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

if (empty($firstname) || empty($lastname) || empty($email) | empty($country)) {
    $message = "Please filled in the required fields";
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    
    $message = 'Please use a valid email';
} else {
    
    $result = createSubscriber($firstname, $lastname, $email, $country);
    $message = $result;
}

echo json_encode($result);
