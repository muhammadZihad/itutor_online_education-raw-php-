<?php  
$page_title = "Edit post";
include '../mysql.php';
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
if(isset($_GET['post_id'])){
    $_SESSION['post_id']=$_GET['post_id'];
}
$post_id=$_SESSION['post_id'];
$get_qry = "SELECT *  FROM post_init WHERE post_id = $post_id";
$post = mysqli_query($conn,$get_qry);

$data = mysqli_fetch_assoc($post);


$page_title = "Edit post";
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $level = $_POST['level'];
        $term = $_POST['term'];
        $subject = $_POST['subject'];
        $content =mysqli_real_escape_string($conn, $_POST['content']);
        $catagory= $level.$term.$subject;
        $update_query = "UPDATE post_init SET title='$title' , catagory='$catagory', content='$content' WHERE post_id=$post_id";
        $rr = mysqli_query($conn,$update_query);
    }
?>

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Edit Post
                <small>by <?php echo 'Author' ?></small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
<div class="post_wrapper">
    <form action="edit_post.php" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control title" class="title" value="<?php echo $data['title']; ?>">
        </div>
        <div class="cats">
            <div class="form-group cat">
                <label for="level">Level</label>
                <select class="form-control" name="level">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                </select>
            </div>
            <div class="form-group cat">
                <label for="term">Term</label>
                 <select class="form-control" name="term">
                <option>1</option>
             <option>2</option>
                 <option>3</option>
                </select>
            </div>
            <div class="form-group cat">
                <label for="level">Subject</label>
                <select class="form-control" name="subject">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="img-file">Select featured image</label>
            <input type="file" name="img-file" class="form-control-file" id="exampleFormControlFile1">
            <small>You don't need to select any picture if you dont want to change.</small>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="body" class="form-control" ><?php echo $data['content']; ?></textarea>
        </div>
        <button name = "submit" type="submit" class="btn btn-primary mb-2">Submit Post</button>
        
    </form>
</ >
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php //echo htmlspecialchars($data['content']) ; ?>