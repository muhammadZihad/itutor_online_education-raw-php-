
<?php 

    $page_title = 'Dashboard';
    if(!isset($_COOKIE['itutor_user'])){
        header("Location:../index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php include 'header.php'; 
include '../mysql.php';
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
                    <th scope="col">Date</th>
                    <th scope="col">Rating</th>
                    <th scope="col-2">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                <?php   $serial = 1; while ($pst = mysqli_fetch_assoc($result)) {        ?>
                    <tr>
                    <th scope="row"><?php echo $serial; ?> </th>
                    <td><?php echo $pst['title'] ; ?></td>
                    <td><?php echo $pst['post_date'] ; ?></td>
                    <td><?php echo $pst['rating'] ; ?></td>
                    <td><?php echo $pst['num_rating'] ; ?></td>
                    <td><a class="text-info" href="#">Edit</a></td>
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
