<?php
session_start();
include "mysql.php";
    $u_name="";
        if(isset($_COOKIE['itutor_user'])){
        $u_id = $_COOKIE['itutor_user'];
        $u_q = "select name from users where id=$u_id";
        $rr = mysqli_query($conn,$u_q);
        $user = mysqli_fetch_assoc($rr);
        $u_name = $user['name'];
        $_SESSION['id']=$u_id;
        $_SESSION['name']=$u_name;
        $admin_query = mysqli_query($conn,"select instructor_status from users where id=$u_id");
        $ad_check =mysqli_fetch_assoc($admin_query); 
        $is_ins = $ad_check['instructor_status'];
    }
    
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,600i,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
        
</head>

<body>
<!--   slider area-->
    <div class="slider_area">
        <div class="container">
            <div class="row header">
                <div class="col float-left">
                    <div class="logo">
                        <img src="img/logo-01.png" alt="">
                    </div>
                </div>
                <div class="col float-right my-auto">
                    <div class="login">


                    <?php if(!$u_name!='') { ?>
                    <a class="login_a"href="login-sign-up.php"><i class="fas fa-sign-in-alt"></i> Login/Signup</a><?php 
                    }
                    else{
                        ?>
                        
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle  user_menu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $u_name ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                    <?php if($is_ins){ ?> <a class="dropdown-item" href="admin/index.php">Admin</a> <?php } ?>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </div>
                    
                    <?php
                    } 
                    ?>
                    </div>
                </div>
            </div>
            <div class="row slider_txt">
                <div class="col-md-6">
                    <h2>Welcome <br> To The <span>itutor</span></h2>
                    <p>Learn from your instructor online</p>
                    <div class="slider_search">
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
    

    <!--   Semister Subject Input Area-->
    <div class="sem_select_area">
        <div class="container">
            <form>
                <div class="row justify-content-center">
                    <form action="">
                        <div class="col-auto">
                            <div class="single_op">
                                <select class="custom-select">
                                  <option selected>Select Your Level</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="single_op">
                                <select class="custom-select">
                                  <option selected>Select Your Term</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="single_op">
                                <select class="custom-select">
                                  <option selected>Select Your Subject</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn sub_btn" type="submit">Go</button>
                        </div>
                </div>
                </form>
        </div>
    </div>

    <!-- End  Semister Subject Input Area-->
    <!-- Recent Uploads area-->

    <div class="container">
        <div class="row heading_big">
            <div class="col">
                <h2 class="big_h text-center">Recent <span>Uploads</span></h2>
            </div>
        </div>
        <div class="row">

            <!--  single upload-->
            <?php
                
                $query = "select * from post_init order by post_id DESC";
                $posts = mysqli_query($conn,$query);
                while($s_post = mysqli_fetch_assoc($posts)){
            ?>
            <div class="col-md-3 col-sm-4">
                <div class="single_recent_upld">
                    <div class="prevw"></div>
                    <div class="course_txt">
                        <h5><a href="single.php?post_id=<?php echo $s_post['post_id'];?>"><?php  echo excerpt($s_post['title']) ; ?></a></h5>
                        <p><i class="fas fa-user"></i><?php  
                            $sub_query = 'select name from users where id='.$s_post['ins_id'].'';
                            $sub_res = mysqli_fetch_assoc(mysqli_query($conn,$sub_query)) ;
                            echo $sub_res['name'];
                        ?></p>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i> <span class="rate_val"><?php echo $s_post['rating'].'('.$s_post['num_rating'].')';?></span>
                        </div>
                    </div>
                </div>
            </div>

                <?php   }   ?>
            

        </div>
    </div>

    <!-- End Of Recent Uploads area-->

    <!--    Become Instructor Area-->
    <div class="become_ins_area">
        <div class="become_ins_patt">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Become An Instructor</h2>
                        <p>Reach Thousands of Students</p>
                        <button class="get_start_btn">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Of Become Instructor Area-->
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
                                <a href="contact.php">Contact</a>
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
    <script src="js/custom.js"></script>
</body>

</html>
<?php 
    function excerpt($title) {
        $cutOffLength=30;
        $charAtPosition = "";
        $titleLength = strlen($title);
    
        do {
            $cutOffLength++;
            $charAtPosition = substr($title, $cutOffLength, 1);
        } while ($cutOffLength < $titleLength && $charAtPosition != " ");
    
        return substr($title, 0, $cutOffLength) . '...';
    
    }

    function convertYoutube($string) {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
            $string
        );
    }
?>

