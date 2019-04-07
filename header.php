
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="single-page.css">
    <title><?php echo $title;?></title>
</head>

<body>
<div class="nav_2">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light cust_nav_bg">
  <a class="navbar-brand" href="index.php"><img src="img/logo-black.png" style="width:75px;height:38px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    
  </div>
  <div class="dropdown dropdwn_3">

  <?php if(!isset($_SESSION['name']) || $_SESSION['name']=='') { ?>
            <a class="login_a" href="login-sign-up.php"><i class="fas fa-sign-in-alt"></i> Login/Signup</a><?php 
    }
    else{
    ?>

  <button class="btn dropdown-toggle" style="color:#fff" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fas fa-user head_user"></i></i> <?php echo "$u_name";?>
  </button>
  <div class="dropdown-menu dropdwn_menu_3" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="profile.php">Profile</a>
    <?php if($_SESSION['ins']){   ?>
    <a class="dropdown-item" href="admin/index.php">Admin</a>
    <?php  }?>
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
    <?php } ?>
</div>
</nav>
</div>
</div>


    <!-- <div class="sin_blog-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sin_logo">
                        <a href="index.php" style=' border:none; color:none'><img src="img/logo-black.png" alt=""> </a>
                        
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
    </div> -->
