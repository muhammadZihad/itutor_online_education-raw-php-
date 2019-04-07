<?php
include 'mysql.php';
$id=$_GET['post_id'];
mysqli_query($conn,"delete from post_init where post_id=$id");
header('Location:index.php');
?>