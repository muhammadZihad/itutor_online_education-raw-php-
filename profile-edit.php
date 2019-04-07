<?php
  $title="Edit Profile";
  include 'mysql.php';
  $id=$_SESSION['id'] ; 
  $saved=0;

  if(isset($_POST['submit'])){
    $first=$_POST['first'];
    $last=$_POST['last'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pro=$_POST['pro'];


    $query="update users set name='$name',email='$email' where id=$id";
    $query1="update users_details set first='$first',last='$last',phone='$phone',profession='$pro' where u_id=$id";
    mysqli_query($conn,$query);
    mysqli_query($conn,$query1);
    $saved=1;
  }
  if(isset($_POST['file_sub'])){
    $file=$_FILES['file'];
    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];

    
    $file_ext = explode('.',$file_name);
    $file_actual_ext = strtolower(end($file_ext));

    if($file_error===0){
        $file_new_name = strval($id).".".$file_actual_ext ;
        $file_destination = 'img/user/'.$file_new_name ;
        move_uploaded_file($file_tmp_name,$file_destination);
    }else{
      $file_destination='img/user/default_user.jpg';
    }

    $img = mysqli_fetch_assoc(mysqli_query($conn,"select image from users where id=$id"));
    if(!$img['image']=='img/user/default_user.jpg'){
          unlink($img['image']);
    }
    mysqli_query($conn,"update users set image='$file_destination' where id=$id");

  }
  if(isset($_POST['file_del'])){
    $img = mysqli_fetch_assoc(mysqli_query($conn,"select image from users where id=$id"));
    if(!$img['image']=='img/user/default_user.jpg'){
          unlink($img['image']);
    }
    $file_destination='img/user/default_user.jpg';
    mysqli_query($conn,"update users set image='$file_destination' where id=$id");
  }

  $data=mysqli_fetch_assoc(mysqli_query($conn,"select u.name,u.email,u.image,d.first,d.last,d.phone,d.profession from users as u,users_details as d where u.id=$id and d.u_id=u.id"));
  include "header.php";
?>


<div class="container p_edit_page">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center p_edit_avatar">
          <form enctype="multipart/form-data" action="profile-edit.php" method='post'>
          <img src="<?php echo $data['image'];?>" class="avatar img-circle" style="height:255px;width:255px" alt="avatar">
          <input type="file" name="file" id="image" class="form-control">
          <input type="submit" name="file_sub" class="form-control file" value="Upload">
          <input type="submit" name="file_del" class="form-control file" value="Delete">
          </form>        
        </div>
      </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <?php if($saved){   ?>
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-edit"></i>
          Your information is updated.<a href="profile.php">Click here</a> to view profile.
        </div>
        <?php }  ?>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" action="profile-edit.php" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="first" type="text" value="<?php echo $data['first'];?>" placeholder="First name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control"name="last"  type="text" value="<?php echo $data['last'];?>" placeholder="Last name">
            </div>
          </div>    
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control"name="name"  type="text" value="<?php echo $data['name'];?>" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $data['email'];?>" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Daffodil International University" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Profession:</label>
            <div class="col-lg-8">
              <input class="form-control" name="pro" type="text" value="<?php echo $data['profession'];?>" placeholder="Profession">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Phone:</label>
            <div class="col-md-8">
              <input class="form-control"  name="phone" type="text" value="<?php echo $data['phone'];?>" placeholder="Phone number">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="submit" class="btn btn-primary submit" value="Save Changes">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.js"></script>
    <style type="text/css">

        .p_edit_page{
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .p_edit_avatar img {
            margin-bottom: 19px;
        }

    </style>


<?php include 'footer.php'; ?>