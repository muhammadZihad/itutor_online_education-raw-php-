<?php 
    session_start();
    include "mysql.php";
    $post_id=$_GET['post_id'];
    $_SESSION['post']=$post_id;
    
    if(isset($_POST['rating'])){
        header("Location:index.php");
        if(!isset($_COOKIE['itutor_user'])){
            die('You have to log in to comment');
            header("Location:single.php?post_id=$post_id");
        }
        else{
            $u_id = $_COOKIE['itutor_user'];
            $rating=$_POST['rating'];
            $query="INSERT INTO ratings values($u_id,$post_id,$rating)";
            mysqli_query($conn,$query);
            $query="select rating,num_rating from post_init where post_id=$post_id";
            $data=mysqli_fetch_assoc(mysqli_query($conn,$query));
            $rating=($rating+$data['rating'])/($data['num_rating']+1);
            $num = $data['num_rating']+1;
            $query="update post_init set rating=$rating,num_rating=$num where post_id=$post_id";
            mysqli_query($conn,$query);
        }   
    }
?>