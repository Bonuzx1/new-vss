<?php include "includes/header.php";

if (isset($_GET['page']))
{
    $page_name = $_GET['page'];

    if ($page_name == 'dashboard')
    {
        include "includes/dashboard.php";
    }
    elseif ($page_name == 'users')
    {

    }
    elseif ($page_name == 'voucher')
    {

    }
    elseif ($page_name == 'orders')
    {

    }
    elseif ($page_name == 'profile')
    {

    }
    elseif ($page_name == '')
    {

    }
}
