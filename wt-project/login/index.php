<?php
session_start();

require 'config.php';
$msg = "";

if (isset($_POST['register'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_pwd = $_POST['password'];
	// $target_dir = "image/";
	// $target_file = $target_dir . basename($_FILES['pImage']["name"]);
	// move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);

	$sql = "INSERT INTO `user`(`user_name`, `user_email`, `user_pwd`) VALUES ('$user_name','$user_email','$user_pwd')";
	if (mysqli_query($conn, $sql)) {
		$msg = "Product added to the database succesfully";
	} else {
		$msg = "Fail to add the product ";
	}
}


?>
<?php
require 'config.php';
$msg = "";
if (isset($_POST['signin'])) {
	// $user_name = $_POST['user_name'];
	$user_email_1 = $_POST['your_email'];
	$user_pwd_1 = $_POST['pwd'];
	// $target_dir = "image/";
	// $target_file = $target_dir . basename($_FILES['pImage']["name"]);
	// move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);

	$sql =  "SELECT * FROM  user";
	$result = mysqli_query($conn, $sql);
	$flag = 0;
	$alert = '';
	$_SESSION['ab'] = false;

	while ($row = mysqli_fetch_array($result)) {

		$uname = $row['user_name'];
		$uemail = $row['user_email'];
		$upwd = $row['user_pwd'];
		if (($user_email_1 === $uemail && $user_pwd_1 === $upwd) || ($user_email_1 === "admin@gmail.com" && $user_pwd_1 === "adminadmin")) {
			$flag++;
			break;
		}
	}

	if ($flag != 0) {
		header('location:../home.php');

		//create and handle cookies
		$cookie_name = "userName";
		$cookie_value = $uname;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

		//session start
		$_SESSION['visiter_name'] = $uname;
		$_SESSION['ab'] = true;
	} else {
		echo '<div class="alert alert-danger  mb-0" role="alert">Not a Valid user</div>';
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form-v8 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body class="form-v8">
	<!-- <div class="alert alert-danger  mb-0" style="display: none;" id="alert" role="alert">
		not a valid user, please enter valid email/password.
	</div> -->
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="images/asset 26_resize.jpeg" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
					</div>
				</div>
				<form class="form-detail" action="index.php" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="user_name" id="full_name" class="input-text" required>
								<span class="label">Username</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="user_email" id="your_email" class="input-text" required>
								<span class="label">E-Mail</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
					</div>
				</form>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-in">

						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="your_email" id="user_email" class="input-text" required>
								<span class="label">E-Mail</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="pwd" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>

						<div class="form-row-last">
							<input type="submit" name="signin" class="register" value="Sign In">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();

		//for alert
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>