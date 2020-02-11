<?php

require('connect.php');

function redirect_to($location){
    if($location != NULL){
        header("Location: ".$location);
        exit;
    }
}
?>

