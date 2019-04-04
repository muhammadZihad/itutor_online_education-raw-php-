<?php 
    session_start();
    include "mysql.php";
    $post_id=$_GET['post_id'];
    if (isset($_POST['comment_submit'])){
        if(!isset($_COOKIE['itutor_user'])){
            die('You have to log in to comment');
            echo "<script>alert('You have to log in to comment');</script>";
            header("Location:single.php?post_id=$post_id");
        }
        else{
            $u_id = $_COOKIE['itutor_user'];
            $comment = mysqli_real_escape_string($conn,$_POST['comment']);
            $query = "INSERT INTO comments (post_id,user_id,comment,date) values ($post_id,$u_id,'$comment',now())" ;
            mysqli_query($conn,$query);
            
        }
    }
    
    $query = "update post_init set count_com = (select count(c_id) where post_id = $post_id) where post_id = $post_id";
    mysqli_query($conn,$query);
    $query = "select * from post_init where post_id=$post_id";
    $posts = mysqli_fetch_assoc(mysqli_query($conn,$query));


    include 'header.php';
?>

    <!-- ::::::::::::::::::::: single-blog section:::::::::::::::::::::::::: -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- post wrapper -->
                    <div class="post-wrapper clearfix">
                        <!-- post thumbnail -->
                        <div class="single-thumb">
                            <a href="">
									<img src="<?php echo $posts['image_name'] ; ?>" style="max-width:1120px;max-height:500px;" alt="" />
								</a>
                        </div>

                        <!-- start single blog content -->
                        <div class="blog-content">
                            <!-- start single blog header -->
                            <header class="single-header">
                                <div class="single-post-title">
                                    <h2><a href="#"><?php echo $posts['title'] ; ?></a></h2>
                                </div>
                                <!-- post meta -->
                                <div class="post-meta">
                                    <ul>
                                        <li>
                                            <a href="#">
													<i class="fa fa-user"></i>
                                                    <?php 
                                                        $ins_id = $posts['ins_id'];
                                                        $q = "select name from users where id=$ins_id";
                                                        $author = mysqli_fetch_assoc(mysqli_query($conn,$q));
                                                        echo $author['name'];
                                                    ?>
												</a>
                                        </li>
                                        <li>
                                            <a href="#">
													<i class="fa fa-tag"></i>
													<?php echo $posts['catagory'] ; ?>
												</a>
                                        </li>
                                        <li>
                                            <a href="#">
													<i class="fa fa-calendar"></i>
                                                    <?php echo $posts['post_date'] ; ?>
												</a>
                                        </li>
                                        <li>
                                            <a href="#">
													<i class="fa fa-comment"></i>
													<?php echo $posts['count_com'] ; ?> Comments
												</a>
                                        </li>
                                        <li class="rating"  data-toggle="modal" data-target="#exampleModalCenter">
                                            <a href="#">
													Rating
													<ul> 
														<li><a href=""><?php echo $posts['rating'] ; ?></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                    </a>
                                    </li>
                                    </ul>
                                </div>
                            </header>
                            <!-- /.end single blog header -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Rate this post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="range-field">
      <input class='slider orange' type="range"  max="5"/>
      Drag the slider to give rating.
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>





                            <!-- start single blog entry content -->
                            <div class="entry-content">
                                <p><?php  echo $posts['content'];   ?></p>
                            <?php if($posts['video_status']==1) { 
                                preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $posts['video_link'], $matches);
                                $link = $matches[1];
                                ?>
                                
                                <div class="full-width-img">
                                    <iframe type="text/html" width="" height="" src="https://www.youtube.com/embed/<?php echo $link ?>?rel=0&showinfo=0&color=white&iv_load_policy=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                    <?php } ?>
                               
                            </div>
                            <!-- /.end single blog entry content -->

                        </div>
                        <!-- /.end single blog content -->
                              

                        <div class="comments-responsed-wrapper">
                            <div class="single-post-title comment-title">
                                <h2>Commets (<?php echo $posts['count_com'] ; ?>)</h2>
                            </div>
                            <!-- post comments -->
                            <div class="comments-media">
                                <!-- 1st comment -->
                    <?php 
                    // Main comment starts here
                        $c_query = "select * from comments where post_id=$post_id order by date desc";
                        $comment_result = mysqli_query($conn,$c_query);
                        if(mysqli_num_rows($comment_result) > 0){
                    ?>
                        <ol>
                        <?php       
                            while($comment = mysqli_fetch_assoc($comment_result)){      
                                $c_id =  $comment['c_id'];   
                                ?>
                                    <li>
                                        <div class="comment-inner">
                                            <div class="comment-avatar">
                                                <img src="<?php $data=data_fetch($comment['user_id']);echo $data['image'];?>" alt="No Img" />
                                            </div>
                                            <div class="comment-section">
                                                <header>
                                                    <h2><?php echo $data['name'] ?></h2>
                                                    <span><?php echo $comment['date'];?> </span>
                                                </header>
                                                <div class="comment-content">
                                                    <p><?php echo $comment['comment']  ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>          
                            <?php 
                                }
                            }
                        ?>
                        </ol>


                                
        

                            </div>
                        </div>
                        <!-- start comments wrapper -->
                        <div class="comments-wrapper">
                            <div class="single-post-title comment-title">
                                <h2>Write your comment</h2>
                            </div>

                            <form class="contact-form" id="contactForm" name="contact-form" action='<?php echo "single.php?post_id=$post_id";?>' method="POST">

                                <div class="form-group cust_txtarea">
                                    <label class="sr-only" for="comment">Comment</label>
                                    <textarea name="comment" class="form-control" id="message" placeholder="Your Comment" ></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="comment_submit" class="btn btn-primary input-btn"><span>Submit</span></button>
                                </div>
                            </form>
                        </div>
                        <!-- /.end comments wrapper --> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./end single-blog section -->



<?php
    include 'footer.php';

function data_fetch($id){
    global $conn;
    $n_qry = "select name,image from users where id=$id";
    $n_result = mysqli_fetch_assoc(mysqli_query( $conn,$n_qry));
    return $n_result;
}

?>