<?php
include '../mysql.php';
$id=$_GET['id'];
mysqli_query($conn,"delete from pending where u_id=$id");
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
header("Location:index.php");
?>