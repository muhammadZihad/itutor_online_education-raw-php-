<?php
session_start();
if(isset($_COOKIE['itutor_user'])){
    setcookie("itutor_user", "", time() - 3600);
    setcookie(itutor_user, $_SESSION['id'], time()-3600, "/");
    $_SESSION['id']=0;
    header("Location: index.php");
}
else{
    header("Location: login-sign-up.php");
}

?>