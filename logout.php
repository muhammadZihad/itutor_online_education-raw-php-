<?php
session_start();
if(isset($_COOKIE['itutor_user'])){
    setcookie("itutor_user", "", time() - 3600);
    setcookie('itutor_user', $_SESSION['id'], time()-3600, "/");
    unset($_SESSION['id']);
    unset( $_SESSION['name']);
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
    
}
else{
    header("Location: login-sign-up.php");
}

?>