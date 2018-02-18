<?php

include "../includes/config.php";

if (isset($_POST['loginbtn']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (login($email, $password)){
        go_to('../login.php');
        exit;
    }
    else{
        
    }

}