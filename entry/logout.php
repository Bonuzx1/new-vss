<?php
session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once 'php_action/core.php';

// remove all session variables
session_unset(); 

// destroy the session 
//session_destroy(); 

if(session_destroy()){
    header("Location: login.php");
    $_SESSION['isadminn'] = 0;
}else{
    echo 'Not Logged Out!';
}