<?php
	///user login
	session_start();
	include("util/dbhelper.php");
	if(isset($_POST['email']) && isset($_POST['passw'])){
		$message="INVALID USER";
		$url="index.php";
		$uname=$_POST['email'];
		$pword=$_POST['passw'];
		$row=getrecord('user',['email','passw'],[$uname,$pword]);
		if($row!=null){
			$_SESSION['user']=$username;
			$message="EMAIL ACCEPTED";
			$url="studentlist.php";
		}
		header("location:$url?message=$message");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="/styles/index.css" rel="stylesheet">
    <link href="/styles/fonts.css" rel="stylesheet" type="text/css">
    <script src="./scripts/script.js" defer></script>
    <!--JAVASCRIPT BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <title>Welcome to ThriftHub</title>
</head>

<body>
    <section id="login">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <img class="logo pt-5" src="/resources/Logo.png">
                    <p class="welcometext text-start">Welcome Back, Please login<br> to your account.</p>
                    <form method="post">
                        <small>
                            <p class="email" name="email">Email-Address:</p>
                        </small>
                        <input type="text" id="e-inpt">
                        <small>
                            <p class="passw" name="passw">Password:</p>
                        </small>
                        <input type="password" id="p-inpt">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <div class="forgetpass">
                            <p class="forget pt-1"><a href="#">Forgot Password</a></p>
                        </div>

                        <button type="button" class="btn-hover color-3"
                            onclick="window.open('marketplace.php')">Login</button>
                        <button class="btn-hover1 color-1" onclick="window.open('signup.php')">Sign me
                            up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!---FOOTER-->
    <footer class="text-center text-white fixed-bottom">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3">
            © THRIFTHUB 2023
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>