<?php
/*
created by: Mohamed sebai
facebook https://facebook.com/mohamedseabeai
github : https://github.com/mohamedsebai
email: mohamedseabeai@gmail.com
website: https://arrogantm.com/
*/
session_start();
// if there is google login
if(!isset($_SESSION['ucode']) || (isset($_SESSION['ucode']) && empty($_SESSION['ucode']))){
    if(strstr($_SERVER['PHP_SELF'], 'login.php') === false)
    header('location:login.php');
}else{
    if(strstr($_SERVER['PHP_SELF'], 'index.php') === false)
    header('location:index.php');
}
