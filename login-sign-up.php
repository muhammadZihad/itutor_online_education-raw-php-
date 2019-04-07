<?php
	include 'mysql.php';
	if(isset($_SESSION['id']) && $_SESSION['id']!=0){
		header("Location:index.php");
	}

	if(isset($_POST['sign_up'])){
		$username = mysqli_real_escape_string($conn,$_POST['name']) ;
		$password = mysqli_real_escape_string($conn,$_POST['password']) ;
		$email = mysqli_real_escape_string($conn,$_POST['email']) ;
		$cpassword = mysqli_real_escape_string($conn,$_POST['confirm_password']) ;
		$keyword=substr(str_shuffle('QWERTYUIOPLKJHGFDSA1234567890'),0,5);
		if($username!='' && $email!='' && $password!='' && $cpassword!=''){
			if($password!=$cpassword){
				die("sjit");
			}
			else{
				$password = md5($password);
				$qur = "insert into users(name,password,email,keyword) values ('$username','$password','$email','$keyword')";
				mysqli_query($conn,$qur);
				$query="insert into users_details (u_id) select id from users where keyword=$keyword";
				mysqli_query($conn,$query);
				completed();
			}
		}
	}
	$ispasswrong=0;
	if(isset($_POST['sign_in'])){
		$email = mysqli_real_escape_string($conn,$_POST['email']) ;
		$password = mysqli_real_escape_string($conn,$_POST['password']) ;
		$password=md5($password);
		$qur = "select * from users where email='$email'";
		$res=mysqli_query($conn,$qur);
		if(mysqli_num_rows($res)<1){
			die('Email not registered');
		}
		while($data=mysqli_fetch_assoc($res)){
			if($password==$data['password']){

				 $cookie_name = "itutor_user";
				 $cookie_value = $data['id'];
				 setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
				 
				 if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]);
				}

			}
			else{
				$ispasswrong=1;
			}
		}
	}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,600i,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="login-sign-up.css">
    
    <title>Login or Sign Up</title>
</head>

<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="login-sign-up.php" method="post">
			<h1>Create Account</h1>
			<span></span>
			<?php function completed(){
				echo '<div class="alert alert-primary" role="alert">
				Registration Successful. Please Log in to continue.
			  </div>';
			}
			?>
			<input type="text" name="name" placeholder="Username" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="password" name="confirm_password" placeholder="Confirm Password" />
			<button type="submit" name="sign_up" class="sign_up_btn1">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login-sign-up.php" method="post" class="sign_form1">
			<h1>Sign in</h1>
			<span></span>
			<?php
				if($ispasswrong){
					echo '<div class="alert alert-danger" role="alert">
						Invalid username or password.
				  </div>';
				}
			?>
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button name='sign_in' class="sign_in2">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1 class="already_hav_acc_h1">Already Have An Account?</h1>
				
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Become An Instructor!</h1>
				<p>Reach Thousands of Students</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>

</footer>

</body>

<script src="js/custom.js"></script>

</html>

