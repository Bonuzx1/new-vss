<?php

require '../includes/config.php';

/**
 *
 */
function login($email, $password)
{
    $hashedpassword = md5($password);
    $users = $db->query("SELECT * FROM users where email='$email' and password='$hashedpassword'");
    if ($users > 0) {
        $_SESSION['isadminn'] = '1';
        return true;
    }else{
        return false;
    }
}
function register($all)
{
    
}
function is_logged_in()
{
    
}
function logout()
{
    
}
function is_admin($username)
{
    
}
function reset_password($old_password, $new_password)
{
    
}
function forgot_password($new_password)
{
    
}
function go_to($url)
{
    
}
function send_mail($username)
{
    
}
function confirm_email($user, $confirmation_code)
{
    
}
