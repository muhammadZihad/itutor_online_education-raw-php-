
<?php 
include '../mysql.php';
$page_title = 'Instructor Requests';
if(!isset($_COOKIE['itutor_user'])){
    header("Location:../index.php");
}
include 'header.php'; 

$u_id=$_SESSION['id'];
$u_name=$_SESSION['name'];


$query = "select u.name,u.id,u.email from users as u,pending as p where p.u_id=u.id" ;
$result = mysqli_query($conn , $query);



?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard
                        <small><?php echo $u_name ;?></small>
                    </h1>
                    
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Approve</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php   $serial = 1; 
                if(mysqli_num_rows($result)>0){   
                while ($pst = mysqli_fetch_assoc($result)) {        ?>
                <tr>
                <th scope="row"><?php echo $serial; ?> </th>
                <td><?php echo $pst['id'] ; ?></td>
                <td><?php echo $pst['name'] ; ?></td>
                <td><?php echo $pst['email'] ; ?></td>
                <td><a class="text-info" href="approve.php?id=<?php echo $pst['id'];?>">Approve</a></td>
                <td><a class="text-danger" href="delete_req.php?id=<?php echo $pst['id'];?>">Delete</a></td>
                </tr>
                <tr>

            <?php $serial++;} }?>
            </tbody>
        </table>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
