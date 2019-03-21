<?php 
    session_start();
    include "mysql.php";
    $post_id=$_GET['post_id'];
    $query = "select * from post_init where post_id=$post_id";
    $posts = mysqli_fetch_assoc(mysqli_query($conn,$query));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,600i,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="single-page.css">
    <title>Single Post</title>
</head>

<body>
    <div class="sin_blog-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sin_logo">
                        <img src="img/logo-black.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="slider_search sin_page float-right">
                        <div class="search_in">
                            <input type="search" placeholder="What do you want to learn?">
                            <div class="search_submit">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
									<img src="img/sing-bl.jpg" alt="" />
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
													 Marketing, Sales 
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
                                        <li class="rating">
                                            <a href="#">
													Rating
													<ul> 
														<li><a href="#"><?php echo $posts['rating'] ; ?></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                    </a>
                                    </li>
                                    </ul>
                                </div>
                            </header>
                            <!-- /.end single blog header -->

                            <!-- start single blog entry content -->
                            <div class="entry-content">
                                <p><?php  echo $posts['content'];   ?></p>
                            <?php if($posts['video_status']==1) { ?>
                                
                                <div class="full-width-img">
                                    <iframe width="" height="" src=<?php echo $posts['video_link'] ; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                    <?php } ?>
                               
                            </div>
                            <!-- /.end single blog entry content -->




                        </div>
                        <!-- /.end single blog content -->

                        <!-- start comments wrapper -->
                        <div class="comments-wrapper">
                            <div class="single-post-title comment-title">
                                <h2>write your comment</h2>
                            </div>


                            <form class="contact-form" id="contactForm" name="contact-form" action="sendemail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="sr-only" for="subject">Subject</label>
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group cust_txtarea">
                                    <label class="sr-only" for="message">Message</label>
                                    <textarea name="message" class="form-control" id="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary input-btn"><span>Submit</span></button>
                                </div>
                            </form>


                        </div>
                        <!-- /.end comments wrapper -->

                        <div class="comments-responsed-wrapper">
                            <div class="single-post-title comment-title">
                                <h2>Commets (<?php echo $posts['count_com'] ; ?>)</h2>
                            </div>
                            <!-- post comments -->
                            <div class="comments-media">
                                <!-- 1st comment -->
                                <ol>
                                    <li>
                                        <div class="comment-inner">
                                            <div class="comment-avatar">
                                                <img src="img/1.jpg" alt="" />
                                            </div>
                                            <div class="comment-section">
                                                <header>
                                                    <h2>Josef Milton</h2>
                                                    <span> 15 minutes ago </span>
                                                </header>
                                                <div class="comment-content">
                                                    <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                    <a href="#" class="btn-comment-replay">Replay</a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="comment-inner">
                                                    <div class="comment-avatar">
                                                        <img src="img/2.jpg" alt="" />
                                                    </div>
                                                    <div class="comment-section">
                                                        <header>
                                                            <h2>Jonathon Bin</h2>
                                                            <span> 10 minutes ago </span>
                                                        </header>
                                                        <div class="comment-content">
                                                            <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                            <a href="#" class="btn-comment-replay">Replay</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment-inner">
                                                    <div class="comment-avatar">
                                                        <img src="img/1.jpg" alt="" />
                                                    </div>
                                                    <div class="comment-section">
                                                        <header>
                                                            <h2>Josef Milton</h2>
                                                            <span> 5 minutes ago </span>
                                                        </header>
                                                        <div class="comment-content">
                                                            <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                            <a href="#" class="btn-comment-replay">Replay</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                                <!-- 2nd comment -->
                                <ol>
                                    <li>
                                        <div class="comment-inner">
                                            <div class="comment-avatar">
                                                <img src="img/3.jpg" alt="" />
                                            </div>
                                            <div class="comment-section">
                                                <header>
                                                    <h2>Tomas Udoya</h2>
                                                    <span> 20 minutes ago </span>
                                                </header>
                                                <div class="comment-content">
                                                    <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                    <a href="#" class="btn-comment-replay">Replay</a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <div class="comment-inner">
                                                    <div class="comment-avatar">
                                                        <img src="img/2.jpg" alt="" />
                                                    </div>
                                                    <div class="comment-section">
                                                        <header>
                                                            <h2>Josef Milton</h2>
                                                            <span> 15 minutes ago </span>
                                                        </header>
                                                        <div class="comment-content">
                                                            <p>The challenge is to ensure that when a client visits your website they feel positive about your company. </p>
                                                            <a href="#" class="btn-comment-replay">Replay</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./end single-blog section -->

    <!--  Footer Area-->
    <div class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about_itutor">
                        <h5>About Itutor</h5>
                        <p>itutor is a free resource site for Students. Students can learn their subject from online. If you have skill you can also be an instructor here. The main goal of this site is to provide quality tutorial for students</p>
                    </div>
                </div>
                <div class="col">
                    <div class="footer_menu1">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Contact</a>
                            </li>
                            <li>
                                <a href="#!">About Us</a>
                            </li>
                            <li>
                                <a href="#!">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright_area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_copyright_txt">&copy; Saleheen & Zihad</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Footer Area-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
