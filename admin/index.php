
<?php 

    $page_title = 'Dashboard';
    if(!isset($_COOKIE['itutor_user'])){
        header("Location:../index.php");
    }
    include '../mysql.php';
 include 'header.php'; 

$u_id=$_SESSION['id'];
$u_name=$_SESSION['name'];


$query = "select * from post_init where ins_id=$u_id" ;
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
                    <th scope="col">Title</th>
                    <th style="width: 11%" scope="col">Date</th>
                    <th style="width: 8%"scope="col">Comments</th>
                    <th style="width: 8%" scope="col">Rating</th>
                    <th style="width: 18%" scope="col-2">Image</th>
                    <th style="width: 8%" scope="col">Edit</th>
                    <th style="width: 8%" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php   $serial = 1; while ($pst = mysqli_fetch_assoc($result)) {        ?>
                    <tr>
                    <th scope="row"><?php echo $serial; ?> </th>
                    <td><a href="../single.php?post_id=<?php echo $pst['post_id'];?>" target="_blank"><?php echo $pst['title'] ; ?></a> </td>
                    <td><?php echo $pst['post_date'] ; ?></td>
                    <td><?php echo $pst['count_com'] ; ?></td>
                    <td><?php echo $pst['rating'] ; ?></td>
                    <td height="120"><img src="<?php echo '../'.$pst['image_name'] ; ?>" style="width:100%;height:100%;" alt="" /></td>
                    <td><a class="text-info" href="edit_post.php?post_id=<?php echo $pst['post_id'];?>">Edit</a></td>
                    <td><a class="text-danger" href="#">Delete</a></td>
                    </tr>
                    <tr>

                <?php $serial++;} ?>
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
