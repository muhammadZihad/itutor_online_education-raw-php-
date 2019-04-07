<?php  
$page_title = "Edit post";
$saved=0;
include '../mysql.php';
include 'header.php'; 
if(isset($_GET['post_id'])){
    $_SESSION['post_id']=$_GET['post_id'];
}
$post_id=$_SESSION['post_id'];
$page_title = "Edit post";
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $level = $_POST['level'];
        $term = $_POST['term'];
        $subject = $_POST['subject'];
        $content =mysqli_real_escape_string($conn, $_POST['content']);
        $catagory= 'CSE'.$level.$term.$subject;

        // dealing with feature image
        // $file=$_FILES['file'];
        // $file_name = $file['name'];
        // $file_tmp_name = $file['tmp_name'];
        // $file_size = $file['size'];
        // $file_error = $file['error'];
        // $file_type = $file['type'];
        
        // $file_ext = explode('.',$file_name);
        // $file_actual_ext = strtolower(end($file_ext));

        // if($file_error===0){
        //     $file_new_name = $file_ext[0].uniqid('',true).".".$file_actual_ext ;
        //     $file_destination = '../img/post_image/'.$file_new_name ;
        //     $file_final_destination = 'img/post_image/'.$file_new_name ;
        //     move_uploaded_file($file_tmp_name,$file_destination);
        // }else{
        //     echo "<script>alert('Error occured while uploading image');</script>";
        // }



        $link_status=0;
        $link=mysqli_real_escape_string($conn, $_POST['link']);
        $keyword=mysqli_real_escape_string($conn, $_POST['keyword']);
        if($link!=''){
            $link_status=1;
        }
        $update_query = "UPDATE post_init SET title='$title' , catagory='$catagory',keyword='$keyword',video_status=$link_status,video_link='$link', content='$content' WHERE post_id=$post_id";
        $rr = mysqli_query($conn,$update_query);
        $saved=1;
    }
    $get_qry = "SELECT *  FROM post_init WHERE post_id = $post_id";
$post = mysqli_query($conn,$get_qry);

$data = mysqli_fetch_assoc($post);
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
            <?php
                if($saved){
                    ?><div class="alert alert-success" role="alert">
                    Update Successful.<a href="edit_post.php?post_id=<?php echo $post_id;?>">Click here</a> to view the post.
                  </div>'<?php 
                }

?>
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
        <small class="sml">This post's course code is : <?php echo $data['catagory']; ?>.</small>
        <div class="form-group">
            <label for="img-file">Select featured image</label>
            <input type="file" name="img-file" class="form-control-file" id="exampleFormControlFile1" >
            <small>You don't need to select any picture if you dont want to change.</small>
        </div>
        <div class="form-group">
            <label for="title">Video link from youtube</label>
            <input type="text" name="link" class="form-control title" value="<?php echo $data['video_link']; ?>"  placeholder="Enter Link">
        </div>
        <div class="form-group">
            <label for="title">Keyword</label>
            <input type="text" name="keyword" class="form-control title" value="<?php echo $data['keyword']; ?>" placeholder="Enter Keyword">
            <small>Use ',' comma to separate keywords</small>
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