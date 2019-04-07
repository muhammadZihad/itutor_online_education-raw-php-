<?php
include 'mysql.php';
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $value=mysqli_fetch_assoc(mysqli_query($conn,"select instructor_status from users where id=$id"));
    if($value['instructor_status']==0){
        $value=mysqli_fetch_assoc(mysqli_query($conn,"select u_id from users where u_id=$id"));
        if(mysqli_num_rows($value)>0){
            header("Location:index.php");
        }

        mysqli_query($conn,"insert into pending(u_id) values ($id)");
        header("Location:index.php");
    }
    header("Location:index.php");
}
else{
    header("Location:login-sign-up.php");
}


?>