<?php $conn = mysqli_connect('localhost','root','','itutor'); 
session_start();
$u_name="";
if(isset($_COOKIE['itutor_user'])){
    $u_id = $_COOKIE['itutor_user'];
    $u_q = "select name,instructor_status from users where id=$u_id";
    $rr = mysqli_query($conn,$u_q);
    $user = mysqli_fetch_assoc($rr);
    $u_name = $user['name'];
    $_SESSION['id']=$u_id;
    $_SESSION['name']=$u_name;
    $_SESSION['ins']=$user['instructor_status'];
}

?>